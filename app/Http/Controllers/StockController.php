<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
	//
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Stock';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.MasterData.Stock.main', compact('page_title'));
	}
}
