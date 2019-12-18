<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $table = 'books';
    protected $fillable = ['subject','title','creation_date','author_id','picture'];
    
    public function author()
    {
        return $this->belongsTo(Author::class); 


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
