<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts() {
        $this->hasMany('App\Models\Post');
    }

    public function pages() {
        $this->hasMany('App\Models\Page');
    }
}
