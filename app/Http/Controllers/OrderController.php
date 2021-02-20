<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function __construct()
    {
		$this->middleware('auth'); 
	}
	
    public function index()
    {
        $page_title = 'ORDER';
        $page_description = '| Money from here !!';

        return view('pages.order.main', compact('page_title', 'page_description'));
    }
}
