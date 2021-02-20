<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merks extends Model
{
    protected $table = 'tbl_merks';
	
	protected $fillable = ['name'];
}
