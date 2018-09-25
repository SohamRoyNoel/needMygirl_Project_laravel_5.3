<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminaddController extends Controller
{
    public function index()
    {
        $allAdmin = Admin::all();
        return view('Admin.AdminCreater.createAdmin', compact('allAdmin'));
    }

    public function create()
    {
        $alladmin = Admin::all();
        return view('Admin.AdminCreater.viewAlladmin', compact('alladmin'));
    }

    public function store(Request $request)
    {
        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['password'] = $request->password;
        Admin::create($input);
        return redirect()->back();
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
        $input['password'] = bcrypt($request->password);
        $input['name'] = $request->name;
        $input['email'] = $request->email;
        Admin::findOrFail($id)->update($input);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->back();
    }
}
