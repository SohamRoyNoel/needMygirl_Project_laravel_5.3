<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{

    public function index()
    {
        $category = Category::pluck('name', 'id')->all();
        return view('public.registration.registration_user', compact('category'));
    }

    public function create()
    {
        session()->forget('name');
        session()->forget('email');
        return redirect('/');
    }


    public function store(Request $request)
    {
//        return $request->all();
        // User::create($request->all());

        $input = $request->all();

        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('user_faces', $name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        User::create($input);
        return redirect('/');
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
