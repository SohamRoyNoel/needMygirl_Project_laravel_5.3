<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
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
        return view('public.publicHome.timeline', compact('user', 'cat'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

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
        return view('public.publicHome.timeline', compact('user', 'cat'));

        // return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
