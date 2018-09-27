<?php

namespace App\Http\Controllers;

use App\Http\Requests\FAQReplyRequest;
use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(FAQReplyRequest $request)
    {
        Reply::create($request->all());
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
