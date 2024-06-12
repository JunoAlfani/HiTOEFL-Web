<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.progress.index');
    }
}
