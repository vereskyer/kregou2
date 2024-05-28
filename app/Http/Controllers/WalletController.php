<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function recharge(Request $request)
    {
        $user = Auth::user();
        $amount = $request->input('amount');

        $user->deposit($amount, ['description' => 'Wallet recharge']);

        return redirect()->back()->with('success', 'Wallet recharged successfully.');
    }
}