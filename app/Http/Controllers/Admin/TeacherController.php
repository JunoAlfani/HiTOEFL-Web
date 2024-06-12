<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['teacher'] = Teacher::all();

        return view('dashboard.teachers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('dashboard.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {


        $request->validate([
            'topic'    => 'required',
            'teacher'  => 'required',
            'email'    => 'required|email|',
            'category' => 'required',
            'img'      => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $input = $request->all();

        if ($img = $request->file('img')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        Teacher::create($input);

        return redirect()->route('dashboard.teachers.getIndex')->with('success', 'Teacher Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit( $id)
    {
        $data = Teacher::find($id);
        return view('dashboard.teachers.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate( Request $request, $id)
    {
        $data = Teacher::find($id);
        $data->topic = $request->input('topic');
        $data->teacher = $request->input('teacher');
        $data->email = $request->input('email');
        $data->category = $request->input('category');

        $input = $request->all();

            if ($img = $request->file('img')) {
                $destinationPath = 'global/img/';
                $profileImage = date('YmdHis') . "." . $img->getClientOriginalExtension();
                $img->move($destinationPath, $profileImage);
                $input['img'] = "$profileImage";
            }

        $data->update($input);

        return redirect()->route('dashboard.teachers.getIndex')->with('success', 'Teacher Edited Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        $data = Teacher::find($id);
        $data->delete();
        return back()->with('toast_warning', 'Teacher Deleted Successfully!');
    }
}
