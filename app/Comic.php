<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // con fillable imposto tutte le proprietà da popoare

    protected $fillable = [
        'title',
        'slug',
        'image',
        'type'
    ];


}
