<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $table = 'books';
    protected $fillable = ['subject','isbn','title','creation_date','author_id','picture'];
    
    public function analytics(){
        return $this->hasOne(BookAnalytics::class);
    }

    public function author()
    {
        return $this->belongsTo( User::class, 'author_id'); 


    }
    public function loan()
    {
        return $this->belongsTo(Loan::class); 

    }

    public function comments()
    {
        return $this->hasMany(Comment::class); 

    }

   
}
