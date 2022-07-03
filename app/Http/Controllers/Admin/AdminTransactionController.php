<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        foreach ($transactions as $key => $transaction) {
            $transaction->user = User::find($transaction->user_id);
        }
        return view('admin.transactions.index')->with(['transactions'=>$transactions]);
    }
}
