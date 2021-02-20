<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class ClothesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $page_title = 'Type of CLothes';
		// $page_description = '| Type of Clothes in your store';
		
		$data = Clothes::all();

		// dd($Data);

        return view('pages.clothes.main', compact('data'));
	}
	
	public function store(Request $req)
    {
		$this->validate($req, [
			'img_front'	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'img_back' 	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		$nameimage = time();

		//FRONT
		$file_front = $req->file('img_front');
		$filename_front = $nameimage."_front.".$file_front->getClientOriginalExtension();
		$tujuan_upload = public_path("media/upload/shirt/");
		$file_front->move($tujuan_upload,$filename_front);

		//BACK
		$file_back = $req->file('img_back');
		$filename_back = $nameimage."_back.".$file_back->getClientOriginalExtension();
		$tujuan_upload_2 = public_path("media/upload/shirt/");
		$file_back->move($tujuan_upload_2,$filename_back);

		Clothes::create([
			'name' 		=> $req->name_type,
			'image' 	=> $nameimage,
		]);
 
		return redirect(route('clothes'));
	}

	public function update(Request $req, $id)
    {
		$data = Clothes::find($id);

		if(empty($req->file('img_front')) || empty($req->file('img_back'))) {
			$data->name 	= $req->name_type;
			$data->image 	= $data->image;
			$data->save();
		} else {
			#Delete File Old
			\File::delete(public_path("media/upload/shirt/".$data->image."_front.png"));
			\File::delete(public_path("media/upload/shirt/".$data->image."_back.png"));

			#Upload File Baru
			$this->validate($req, [
				'img_front'	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
				'img_back' 	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			]);

			$nameimage = time();

			//FRONT
			$file_front = $req->file('img_front');
			$filename_front = $nameimage."_front.".$file_front->getClientOriginalExtension();
			$tujuan_upload = public_path("media/upload/shirt/");
			$file_front->move($tujuan_upload,$filename_front);

			//BACK
			$file_back = $req->file('img_back');
			$filename_back = $nameimage."_back.".$file_back->getClientOriginalExtension();
			$tujuan_upload_2 = public_path("media/upload/shirt/");
			$file_back->move($tujuan_upload_2,$filename_back);

			$data->name 	= $req->name_type;
			$data->image 	= $nameimage;
			$data->save();
		}
		

		return redirect(route('clothes'));
	}

	public function destroy($id)
    {
		$data = Clothes::find($id);

		\File::delete(public_path("media/upload/shirt/".$data->image."_front.png"));
		\File::delete(public_path("media/upload/shirt/".$data->image."_back.png"));

		$data->delete();

		return redirect(route('clothes'));
	}
}
