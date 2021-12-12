<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $fillable = ['name','contra','telefono','correo'];
    public function getRouteKeyName(){
   
    }
}
