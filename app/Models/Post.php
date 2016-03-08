<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function postComments() {
        return $this->hasMany('App\Models\PostComment');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
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
