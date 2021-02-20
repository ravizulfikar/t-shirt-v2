<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merks;

class MerksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $page_title = 'Type of CLothes';
		// $page_description = '| Type of Clothes in your store';
		
		$data = Merks::all();

        return view('pages.merks.main', compact('data'));
	}
	
	public function store(Request $req)
    {
		Merks::create([
			'name' 		=> $req->name_merks,
		]);
 
		return redirect(route('merks'));
	}

	public function update(Request $req, $id)
    {
		$data = Merks::find($id);

		$data->name 	= $req->name_merks;
		$data->save();

		return redirect(route('merks'));
	}

	public function destroy($id)
    {
		$data = Merks::find($id);
		$data->delete();
		return redirect(route('merks'));
	}
}
