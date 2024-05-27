<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bavix\Wallet\Exceptions\InsufficientFunds;


class StoreController extends Controller
{
    public function index(Request $request)
    {
        $query = Store::query();

        if ($request->has('search')) {
            $query->where('store_name', 'like', '%' . $request->input('search') . '%');
        }
    // 
        $stores = $query->paginate(12);

        // $stores = Store::paginate(12);
    
        return view('front-stores', compact('stores'));
    }

    public function imageGrid()
    {
        return view('frontend.image-grid');
    }

    public function payment($id)
    {
        // 查找商品
        $store = Store::find($id);

        // 获取当前用户
        $user = auth()->user();

        // 检查用户是否已登录
        if (!$user) {
            return redirect()->route('login')->with('error', '请先登录。');
        }

        try {
            // 检查用户余额是否足够并进行支付
            $user->pay($store);

            // 支付成功，返回支付页面
            return redirect()->route('user.dashboard')->with('success', '支付成功！');
        } catch (InsufficientFunds $e) {
            // 处理余额不足的情况
            return back()->with('error', '余额不足，无法完成支付。');
        } catch (\Exception $e) {
            // 处理其他错误
            return back()->with('error', '支付过程中出现错误，请稍后再试。');
        }
    }
}
