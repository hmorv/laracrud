<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    protected $fillable = ['color', 'caras', 'carga'];
}
