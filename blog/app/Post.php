<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // //Table Name
    // protected $table = 'posts';
    // //Primary Key
    // public $primaryKey = 'id';
    // //Timestamps
    // public $timestamps = true;

    /* In case you want to directly request using Post::
    * #1 see Postscontroller.php fields we are ok to directly write
    * what we want to write in database with fields we want to touch
    * protected $fillable = ['title','body'];
    * fields in the database we dont want to touch when querying
    * protected $guarded = ['user_id','user_pwd'];
    */
    public function comments(){
        //second parameter of hasMany() in this case asdf is the name of the row in the table in the database
        return $this->hasMany(Comments::class,'asdf');
    }

    public function addComment($commentbody){
        Comments::create([
            'body'=>$commentbody,
            'asdf'=>$this->id,
        ]);
    }
}
