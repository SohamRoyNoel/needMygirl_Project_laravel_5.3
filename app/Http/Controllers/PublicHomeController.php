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
        $user_id = $id;
        $like_from = session('id');
        $ifExists = Like::where('like_from', $like_from)->where('user_id', $user_id)->get();
        foreach ($ifExists as $e){
            $ids = $e['id'];
            return redirect()->back();
        }
        $input['like'] = 1;
        $input['like_from'] = $like_from;
        $input['user_id'] = $user_id;

        Like::create($input);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }

}
