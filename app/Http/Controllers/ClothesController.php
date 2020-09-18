<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothesController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $page_title = 'Type of CLothes';
        $page_description = '| Type of Clothes in your store';

        return view('pages.clothes.main', compact('page_title', 'page_description'));
    }
}
