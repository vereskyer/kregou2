<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Bavix\Wallet\Models\Transaction;

class UserController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        // $users = User::all();
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone' => 'nullable',
            'email' => 'required|max:255|email',
            'role' => 'max:255',
            'status' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        // $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);
        // $user->image = empty($imagePath) ? $user->image : $imagePath;

        $user->save();

        toastr('user created successfully');

        return redirect()->route('admin.users.index');
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        $balance = $user->balance;
        $transactions = Transaction::where('payable_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);

        // dd($transactions);

        // 解析每个交易的 meta 字段
        // 确保只在 meta 是字符串时进行解码
        foreach ($transactions as $transaction) {
            if (is_string($transaction->meta)) {
                $transaction->meta = json_decode($transaction->meta, true);
            }
        }

        return view('admin.user.edit', compact(['user', 'transactions', 'balance']));
    }

    // public function update(Request $request, string $id)
    // {
    //     dd($request->all());
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    //         'phone' => 'nullable',
    //         'email' => 'required|max:255|email',
    //         'role' => 'max:255',
    //         'status' => 'required',
    //     ]);

    //     $user = User::findOrFail($id);

    //     $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);

    //     // $user->banner = $imagePath;
    //     $user->image = empty($imagePath) ? $user->image : $imagePath;
    //     $user->name = $request->name;
    //     $user->phone = $request->phone;
    //     $user->email = $request->email;
    //     $user->role = $request->role;
    //     $user->status = $request->status;

    //     $user->save();

    //     toastr()->success('user updated successfully');

    //     return redirect()->route('admin.users.index');
    // }

public function update(Request $request, string $id)
    {
        // dd($request->all());

        // Validate the request
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone' => 'nullable',
            'email' => 'required|max:255|email',
            'role' => 'max:255',
            'status' => 'required',
        ]);

        // Find the user
        $user = User::findOrFail($id);

        // Update image if provided
        $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);

        // Update user fields
        $user->image = empty($imagePath) ? $user->image : $imagePath;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;

        // Save the user
        $user->save();

        // Display success message
        toastr()->success('User updated successfully');

        // Redirect to user index
        return redirect()->route('admin.users.index');
    }

    private function updateImage($request, $key, $directory, $currentImagePath)
    {
        if ($request->hasFile($key)) {
            $file = $request->file($key);
            $path = $file->store($directory, 'public');
            return $path;
        }
        return $currentImagePath;
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $this->deleteImage($user->image);
        $user->delete();

        // toastr()->success('user deleted successfully');

        return response(['status' => 'success', 'message' => 'user deleted successfully']);
    }

    public function deposit(Request $request, $id)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
        ]);

        $user = User::findOrFail($id);

        // 获取用户的钱包
        $wallet = $user->wallet;

        // 生成一个 UUID
        $uuid = uniqid();

        // 创建一个新的 Expense（支出）交易记录
        $transaction = $user->deposit($request->amount, [
            'payable_id' => $user->id,
            'payable_type' => get_class($user),
            'wallet_id' => $wallet->id, // 获取钱包的 ID
            'uuid' => $uuid,
            'meta' => $request->meta,
            'confirmed' => true,
        ]);

        toastr()->success('充值成功');

        return redirect()->route('admin.users.edit', $id);
    }

    public function forceWithdraw(Request $request, $id)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            // 'description' => 'required|max:255',
        ]);

        $user = User::findOrFail($id);

        // 获取用户的钱包
        $wallet = $user->wallet;

        // 生成一个 UUID
        $uuid = uniqid();

        // 创建一个新的 Expense（支出）交易记录
        $transaction = $user->forceWithdraw($request->amount, [
            'payable_id' => $user->id,
            'payable_type' => get_class($user),
            'wallet_id' => $wallet->id, // 获取钱包的 ID
            'uuid' => $uuid,
            'meta' => $request->meta,
            'confirmed' => true,
        ]);

        // dd($transaction->meta);

        toastr()->success('扣款成功');

        return redirect()->route('admin.users.edit', $id);
    }
}
