<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leverancier extends Model

{
    protected $fillable = ['naam','adres','email','telefoon','btw','description'];
}
