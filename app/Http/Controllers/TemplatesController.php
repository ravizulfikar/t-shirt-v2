<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Templates;

class TemplatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $page_title = 'Type of CLothes';
		// $page_description = '| Type of Clothes in your store';
		$data = Templates::all();

        return view('pages.templates.main', compact('data'));
	}
	
	public function store(Request $req)
    {
		$this->validate($req, [
			'img_templ'	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		$nameimage = time();

		//Image Template
		$file_templ = $req->file('img_templ');
		$filename_templ = $nameimage.".".$file_templ->getClientOriginalExtension();
		$tujuan_upload = public_path("media/upload/template/");
		$file_templ->move($tujuan_upload,$filename_templ);

		//BACK
		// $file_back = $req->file('img_back');
		// $filename_back = $nameimage."_back.".$file_back->getClientOriginalExtension();
		// $tujuan_upload_2 = public_path("media/upload/shirt/");
		// $file_back->move($tujuan_upload_2,$filename_back);

		Templates::create([
			'name' 		=> $req->name_templ,
			'image' 	=> $filename_templ,
		]);
 
		return redirect(route('templates'));
	}

	public function update(Request $req, $id)
    {
		$data = Templates::find($id);


		if (empty($req->file('img_templ'))) {
			$data->name 	= $req->name_templ;
			$data->image 	= $data->image;
			$data->save();
		} else {
			#Delete File Old
			\File::delete(public_path("media/upload/template/".$data->image));

			#Upload File Baru
			$this->validate($req, [
				'img_templ'	=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			]);

			$nameimage = time();
			//Image Template
			$file_templ = $req->file('img_templ');
			$filename_templ = $nameimage.".".$file_templ->getClientOriginalExtension();
			$tujuan_upload = public_path("media/upload/template/");
			$file_templ->move($tujuan_upload,$filename_templ);

			$data->name 	= $req->name_templ;
			$data->image 	= $filename_templ;
			$data->save();

		}

		return redirect(route('templates'));
	}

	public function destroy($id)
    {
		$data = Templates::find($id);

		\File::delete(public_path("media/upload/template/".$data->image));

		$data->delete();

		return redirect(route('templates'));
	}
}
