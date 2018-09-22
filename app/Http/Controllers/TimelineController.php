<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use App\Usergallery;
use Illuminate\Http\Request;
use function Sodium\compare;

class TimelineController extends Controller
{

    public function index()
    {
        $em = session('email');
        $cat = Category::pluck('name', 'id')->all();
        // return $user;
        $user = User::where('email', '=', $em)->get();
        $u_id = session('id');
        $gallery = Usergallery::where('user_id', '=', $u_id)->get();
        return view('public.publicHome.timeline', compact('user', 'cat', 'gallery'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('user_upload', $name);
        $input['user_id'] = session('id');
        $input['path'] = $name;
        Usergallery::create($input);

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
        $userUP = User::findOrFail($id);
        $input = $request->all();

        $userUP->update($input);

        $em = session('email');
        $cat = Category::pluck('name', 'id')->all();
        // return $user;
        $user = User::where('email', '=', $em)->get();
        $u_id = session('id');
        $gallery = Usergallery::where('user_id', '=', $u_id)->get();
        return view('public.publicHome.timeline', compact('user', 'cat', 'gallery'));

        // return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
