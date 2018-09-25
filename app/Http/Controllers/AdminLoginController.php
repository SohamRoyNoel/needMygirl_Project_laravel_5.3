<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('Admin.Login.adminLogin');
    }

    public function create()
    {
        session()->forget('nameAdmin');
        session()->forget('emailAdmin');
        session()->flush();
        return view('public.index');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        //return $email . " " . $password;

        $check = Admin::where('name', '=', $name)->where('email',"=",$email)->where('password', '=', $password)->get();

        if ($check){
            foreach ($check as $c){
                $namess = $c['name'];
                $emailss = $c['email'];
                $pri = $c['privilage'];
                $no = $c['no_user_access'];

                if ($pri === "ADMIN" && $no === "xx12BGH") {
                    session(['nameAdmin' => $namess]);
                    session(['emailAdmin' => $emailss]);
                    return view('Admin.adminIndex');
                }
            }
        }
            return redirect()->back();
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

    }
}
