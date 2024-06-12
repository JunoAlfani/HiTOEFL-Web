<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestpaymentController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.testpayment.index');
    }
}
