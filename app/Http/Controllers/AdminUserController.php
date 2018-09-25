<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.User.allUser', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return $id;
        return view('admin.User.allUser');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
//        return $id;
        User::destroy($id);
        return redirect()->back();
    }
}
