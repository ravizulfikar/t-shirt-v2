<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Request';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.Request.main', compact('page_title'));
	}
}
