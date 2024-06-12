<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class BookclassController extends Controller
{
    public function getIndex()
    {
        $data['teacher'] = Teacher::all();

        return view('dashboard.bookclass.index', $data);
    }
}
