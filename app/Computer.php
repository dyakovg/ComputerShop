<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $table = 'computers';
    public function photo($small) {
    	if($this->photo) {
    		if($small)
    			return "<img src='/photos/".$this->photo."' height=150px>";
    		else return "<img src='/photos/".$this->photo."'>";
    	} else return "";
    }
}
