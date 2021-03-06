<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Inventory';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.Inventory.main', compact('page_title'));
	}
}
