<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;

    //fillable: permite realizar
    //insertar varias instancias al tiempo
    protected $fillable=['name','description','website','phone','user_id'];
}
