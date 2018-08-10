<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
    	return view('users.create');
    }

    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required|max:50',
    		'email' => 'required|email|max:255|unique:users',
    		'password' => 'required|min:6|confirmed'
    	]);
    	
    	$user = User::create([
    		'name' => $request->name,
    		'email' =>$request->email,
    		'password' =>bcsqrt($request->password),
    	]);

    	session()->flash('success','欢迎，您将在这里开启一段新的旅途~');
    	return redirect()->route('users.show',[$user]);
    }
}
