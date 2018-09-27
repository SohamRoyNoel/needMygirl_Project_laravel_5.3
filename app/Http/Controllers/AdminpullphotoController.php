<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Usergallery;
use Illuminate\Http\Request;

class AdminpullphotoController extends Controller
{
    public function index()
    {
        $photo = Usergallery::Paginate(3);
        return view('Admin.Gallery.gallery', compact('photo'));
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
