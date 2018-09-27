<?php

namespace App\Http\Controllers;

use App\Like;
use App\User;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function index()
    {
        $find = User::Paginate(2);
        return view('public.publicHome.home', compact('find'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $myuser = User::where('id','=', $id)->get();
        return view('public.publicHome.profile', compact('myuser'));
    }

    public function edit($id)
    {
//        $whom_to_like = $id;
//        $who_is_liking = session('id');
//        $liker_id = $whom_to_like . $who_is_liking;
//        $like = 1;
//        $input['likes'] = $like;
//        $input['liker_id'] = $liker_id;
//        $input['user_id'] = $who_is_liking;
//        $input['liked_to'] = $whom_to_like;
//
//        $Id = Like::where('user_id','=',$who_is_liking)->where('liker_id','=',$liker_id)->get();
//
//        if (!is_null($Id)){
//            Like::create($input);
//        }
//
//        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }

}
