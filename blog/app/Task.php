<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //     protected $table="tasks";
    //     protected $fillable=[
    //         "body",
    //     "completed"
    // ];
    // public static function iscomplete(){
    //     return Task::where('completed',0)->get();
    // }
    public function scopeIncomplete($query){
        return $query->where('completed',0);
    }
}