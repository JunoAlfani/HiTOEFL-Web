<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['userlist'] = User::all();

        return view('dashboard.userlist.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('dashboard.userlist.create');
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
            'username'    => 'required',
            'email'       => 'required|email|',
            'password'    => 'required',
            'is_admin'    => 'required',
        ]);

        $input = $request->all();

        User::create($input);

        return redirect()->route('dashboard.userlist.getIndex')->with('success', 'User Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $data = User::find($id);
        return view('dashboard.userlist.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        $data = User::find($id);
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $data->is_admin = $request->input('is_admin');

        $input = $request->all();

        $data->update($input);

        return redirect()->route('dashboard.userlist.getIndex')->with('success', 'User Edited Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back()->with('toast_warning', 'User Deleted Successfully!');
    }
}
