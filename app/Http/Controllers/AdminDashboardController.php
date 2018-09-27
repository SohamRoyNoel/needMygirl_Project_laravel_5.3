<?php

namespace App\Http\Controllers;


use App\Category;
use App\Question;
use App\Reply;
use App\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $userC = User::count();
        $interestC = Category::count();
        $questionC = Question::count();
        $replyC = Reply::count();
        $userF = User::where('sex', 'Female')->count();
        $userM = User::where('sex', 'Male')->count();
        return view('Admin.adminIndex', compact('userC', 'userM', 'userF', 'interestC', 'questionC', 'replyC'));
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
