<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index(Request $request, int $id) {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();
        return view('pages.success');
    }
}
