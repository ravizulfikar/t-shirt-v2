<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colors;

class ColorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $page_title = 'Type of CLothes';
		// $page_description = '| Type of Clothes in your store';
		
		$data = Colors::all();

        return view('pages.colors.main', compact('data'));
	}
	
	public function store(Request $req)
    {
		Colors::create([
			'name' 		=> $req->name_colors,
			'color' 	=> $req->hexcode,
		]);
 
		return redirect(route('colors'));
	}

	public function update(Request $req, $id)
    {
		$data = Colors::find($id);

		$data->name 	= $req->name_colors;
		$data->color 	= $req->hexcode;
		$data->save();

		return redirect(route('colors'));
	}

	public function destroy($id)
    {
		$data = Colors::find($id);
		$data->delete();
		return redirect(route('colors'));
	}
}
