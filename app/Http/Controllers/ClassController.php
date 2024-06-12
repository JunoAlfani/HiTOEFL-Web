<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.class.index');
    }
}
