<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMainController extends Controller
{    
	public function index(){
		// return view('admin/layouts/master');
		// return view('content');
		return view('Admin/layouts/user');
	}

}
