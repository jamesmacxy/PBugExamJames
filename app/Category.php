<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expense;

class Category extends Model
{
    //
    protected $fillable = [

    	'name',
    	'description'

    ];

    public function expenses(){

    	return $this->hasMany('App\Expense');

    }
}
