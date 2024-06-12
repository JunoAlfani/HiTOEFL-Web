<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getIndex()
    {
        return view('dashboard.exercise.index');
    }
}
