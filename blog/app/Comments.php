<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['body','asdf'];

    public function post(){
        //first argument in belongsto is the place of the main class 
        //second is the field that is the relation in the class and the 
        //3rd argument is the parent id
        return $this->belongsTo(Post::class,'asdf','id');
    }
}
