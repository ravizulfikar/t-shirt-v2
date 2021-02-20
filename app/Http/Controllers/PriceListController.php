<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Price List';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.MasterData.PriceList.main', compact('page_title'));
	}
}
