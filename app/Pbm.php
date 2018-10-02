<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pbm extends Model

{
    protected $fillable = ['title','type','merk','leverancier','levensduur','maxwasbeurten','description','imagePath'];
}
