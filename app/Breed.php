<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public $timestams = false;
    protected $fillable = ['name'];

    public function cats()
    {
    	return $this->hasMany('Furbook\Cat', 'breed_id');
    }
}
