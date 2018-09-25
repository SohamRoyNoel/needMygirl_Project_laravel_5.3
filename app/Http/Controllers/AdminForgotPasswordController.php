<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminForgotPasswordController extends Controller
{
    public function index()
    {
        return view('Admin.Login.forgotPassword');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $email = $request->email;
        $ps1 = $request->password;

        $finder = Admin::where('email', '=', $email)->pluck('id');
        if ($finder != "0"){
            $finds1 = Admin::findOrFail($finder);
            $input = $request->all();
            $finds1->update($input);
            return view('Admin.Login.adminLogin');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
