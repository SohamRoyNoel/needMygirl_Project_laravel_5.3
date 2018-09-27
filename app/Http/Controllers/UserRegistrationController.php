<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\RegistrationRequest;
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
        session()->forget('photo');
        session()->forget('id');
        return redirect('/');
    }


    public function store(RegistrationRequest $request)
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
        $ids = User::findOrFail($id);

        $like = $ids['likes'];

        $input['likes'] = $like + 1;

        User::findOrFail($id)->update($input);

        return redirect()->back();
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
