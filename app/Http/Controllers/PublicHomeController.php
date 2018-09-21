<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function index()
    {
        $find = User::all();
        return view('public.publicHome.home', compact('find'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
