<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Cabang';
		// $page_description = '| Type of Clothes in your store';

        return view('admins.MasterData.Cabang.main', compact('page_title'));
	}
}
