<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $transactions = Transaction::where('user_id', $user_id)->get();
        return view('transaction', compact('transactions'));
    }
}
