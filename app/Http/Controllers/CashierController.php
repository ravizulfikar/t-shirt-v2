<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Kasir';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.Transaction.Kasir.main', compact('page_title'));
	}
}
