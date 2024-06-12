<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementtestController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.managementtest.index');
    }
}
