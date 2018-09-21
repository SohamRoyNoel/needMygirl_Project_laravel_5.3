<?php

namespace App\Http\Controllers;

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
