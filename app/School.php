<?php

namespace Infocole;

// use Illuminate\Database\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class School extends Eloquent
{
    //
	protected $connection = 'mongodb';
	protected $collection = 'schools';

    protected $fillable = [
    	'photo', 'name', 'description', 'type', 'address', 'url'
    ];

}
