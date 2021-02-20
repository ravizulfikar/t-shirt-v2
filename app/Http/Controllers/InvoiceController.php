<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Invoice';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.Transaction.Invoice.main', compact('page_title'));
	}
}
