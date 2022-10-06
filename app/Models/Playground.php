<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Playground extends Model

{

    use HasFactory;
    protected $fillable = [
        
        'Name','Email','DateTimeStart','DateTimeEnd','Status', 'StatusOn', 'StatusOff'
        
    ];

}
