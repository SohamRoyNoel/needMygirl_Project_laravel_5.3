<?php

namespace App\Http\Controllers;

use App\Http\Requests\FAQquestionRequest;
use App\Question;
use App\Reply;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('public.question');
    }

    public function create()
    {
        $qus = Question::all();
        return view('public.question_FAQ', compact('qus'));
    }

    public function store(FAQquestionRequest $request)
    {
        // return $request->all();
        Question::create($request->all());
        return redirect('/');
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
