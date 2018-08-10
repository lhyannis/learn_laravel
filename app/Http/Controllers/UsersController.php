<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    //注册页
    public function create()
    {
    	return view('users.create');
    }

	//个人信息页
    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }

    //注册处理
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
    		'password' =>bcrypt($request->password),
    	]);

    	Auth::login($user);//注册成功后自动登陆

    	session()->flash('success','欢迎，您将在这里开启一段新的旅途~');
    	return redirect()->route('users.show',[$user]);
    }
}
