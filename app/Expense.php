<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    public $fillable = [

    	'amount',
    	'category_id',
    	'description',
    	'entry_date'

    ];

    public function getAmountAttribute($value){

        return number_format($value, 2);
    }

    public function setAmountAttribute($value){

        $this->attributes['amount'] = (float)str_replace(',', '', $value);
    }

    public function category(){

    	return $this->belongsTo('App\Category');
    }
}
