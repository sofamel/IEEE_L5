<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function pageComments() {
        return $this->hasMany('App\Models\PageComment');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getFilesAttribute($files)
    {
        return json_decode($files) ?: [];
    }

    public function setFilesAttribute($files)
    {
        $this->attributes['files'] = json_encode($files);
    }
}
