<?php

namespace App\Http\Controllers;

use App\Question;
use App\Reply;
use Illuminate\Http\Request;

class AdminFAQController extends Controller
{
    public function index()
    {
        $qus = Question::all();
        return view('Admin.FAQ.qus_ans', compact('qus'));
    }

    public function create()
    {
        //
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
        //
    }

    public function destroy($id)
    {
        Question::destroy($id);
        Reply::destroy()->where('question_id', $id);
        return redirect()->back();
    }
}
