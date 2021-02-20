<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Sales Order';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.Transaction.SalesOrder.main', compact('page_title'));
	}
}
