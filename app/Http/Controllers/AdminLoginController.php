<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Http\Requests\AdminLoginRequest;
use App\Question;
use App\Reply;
use App\User;
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

    public function store(AdminLoginRequest $request)
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

                    // pulling for the chart on ADMIN Dashboard
                    $userC = User::count();
                    $interestC = Category::count();
                    $questionC = Question::count();
                    $replyC = Reply::count();
                    $userF = User::where('sex', 'Female')->count();
                    $userM = User::where('sex', 'Male')->count();
                    return view('Admin.adminIndex', compact('userC', 'userM', 'userF', 'interestC', 'questionC', 'replyC'));
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
