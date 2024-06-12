<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BanksoalController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.banksoal.index');
    }
}
