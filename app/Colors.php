<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
	protected $table = 'tbl_colors';
	
	protected $fillable = ['name', 'color'];
}
