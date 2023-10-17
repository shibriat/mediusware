<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $deposits = Transaction::where('transaction_type', 'Deposit')->get();
        return view('deposit_transactions', compact('deposits'));
    }

    public function create()
    {
        return view('deposit');
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $validatedData = $request->validate([
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
        ]);

        $depositAmount = $validatedData['amount'];

        $transaction = new Transaction();
        $transaction->user_id = $user_id;
        $transaction->transaction_type = 'Deposit';
        $transaction->amount = $depositAmount;
        $transaction->fee = 0.00;
        $transaction->date = $validatedData['date'];

        $transaction->save();

        $user = User::find($user_id);
        $user->balance += $depositAmount;
        $user->save();

        return redirect()->route('deposit')->with('success', 'Deposit transaction created successfully');
    }

}
