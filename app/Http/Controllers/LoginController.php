<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
    	
    	if(Auth::attempt([

    		'student_num' => $request->student_num,
    		'password' => $request->password
    		]))
    	{
    		$user = User::where('student_num', $request->student_num)->first();
    		if($user->is_admin())
    		{
    			return redirect()->route('dashboard');
    		}

    		return redirect()->route('home');
    	}

    	return redirect()->back();
    }
}
