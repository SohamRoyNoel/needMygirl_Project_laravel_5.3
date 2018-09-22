<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('public.login.letsLogin');
    }

    public function create()
    {
        //
    }

    public function store(LoginRequest $request)
    {
        // return $request->all();
        $email = $request->email;
        $password = $request->password;

        //return $email . " " . $password;

        $check = User::where('email',"=",$email)->where('password', '=', $password)->get();

        if ($check){
            foreach ($check as $c){
                $name = $c['name'];
                $email = $c['email'];
                $photos = $c['photo_id'];
                $id = $c['id'];

                //return $photos;

                $photo = Photo::where('id', $photos)->pluck('path');

                // return $photo;

                session(['name'=>$name]);
                session(['email'=>$email]);
                session(['photo'=>$photo]);
                session(['id'=>$id]);
                return redirect('/loggedin/userHome');
            }
        } else {
            return redirect()->back();
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
