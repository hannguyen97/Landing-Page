<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    Protected $table ='posts';
}
