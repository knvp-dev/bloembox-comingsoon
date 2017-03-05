<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class RegisterController extends Controller
{
    
	public function index(Request $request){
		return $user = User::create($request->all());
	}

}
