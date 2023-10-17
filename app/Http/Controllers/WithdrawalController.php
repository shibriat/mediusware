<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
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
       $withdrawals = Transaction::where('transaction_type', 'Withdrawal')->get();
       return view('withdrawal_transactions', compact('withdrawals'));
    }
     public function create()
    {
        return view('withdrawal');
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $validatedData = $request->validate([
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
        ]);

        $user = User::find($user_id);
        $accountType = $user->account_type;

        $withdrawalFee = 0.025;
        $currentDate = now();

        if ($accountType === 'Individual') {
            $totalWithdrawnThisMonth = Transaction::where('user_id', $user_id)
                ->where('transaction_type', 'Withdrawal')
                ->where('date', '>=', $currentDate->firstOfMonth())
                ->sum('amount');

            if ($currentDate->isFriday() || $validatedData['amount'] <= 1000 || $totalWithdrawnThisMonth <= 5000) {
                $withdrawalFee = 0.00;
            } else {
                $withdrawalFee = 0.015;
            }
        } else {
            $totalWithdrawn = Transaction::where('user_id', $user_id)
                ->where('transaction_type', 'Withdrawal')
                ->sum('amount');

            if ($totalWithdrawn >= 50000) {
                $withdrawalFee = 0.015;
            }
        }

        $withdrawalAmount = $validatedData['amount'] + ($validatedData['amount'] * $withdrawalFee);

        if ($user->balance >= $withdrawalAmount) {
            $transaction = new Transaction();
            $transaction->user_id = $user_id;
            $transaction->transaction_type = 'Withdrawal';
            $transaction->amount = $validatedData['amount'];
            $transaction->fee = $withdrawalFee;
            $transaction->date = $validatedData['date'];

            $user->balance -= $withdrawalAmount;

            $transaction->save();
            $user->save();

            return redirect()->route('deposit')->with('success', 'Withdrawal transaction created successfully');
        } else {
            return redirect()->route('deposit')->with('error', 'Insufficient balance for withdrawal');
        }
    }

}
