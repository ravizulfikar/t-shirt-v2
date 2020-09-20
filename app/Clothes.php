<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
	protected $table = 'tbl_tshirt';
	
	protected $fillable = ['name', 'image'];
}
