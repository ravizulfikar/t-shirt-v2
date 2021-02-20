<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Product';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.MasterData.Product.main', compact('page_title'));
	}
}
