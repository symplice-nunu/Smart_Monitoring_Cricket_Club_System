<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Manager extends Model

{

    use HasFactory;

  

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */protected $table = 'managers';

    protected $fillable = [
        'FirstName','LastName','Gender','Email','Country','Phone','Address'

    ];

}

