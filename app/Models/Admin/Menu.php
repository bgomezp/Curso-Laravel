<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table ='menu';
    protected $fillable = ['nombre','url','icono']; //cmapos que sepueden agreagr masivamnete
    protected $guarded = ['id']; // campos que no sepuedne modificar 
    protected $timestamp = true; //indica si usa los campos por defctopaar fechas o no?
}
