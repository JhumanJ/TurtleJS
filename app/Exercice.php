<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    //Link to the table exercice
    protected $table = 'exercice';

    //Fillable fields
    protected $fillable = ['title','videoLink','text','hint','script'];

}
