<?php

namespace Infocole;

// use Illuminate\Database\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    //	
    protected $connection = 'mongodb';

	protected $collection = 'books';


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'detail'

    ];
}
