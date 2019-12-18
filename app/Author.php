<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

    // protected $table = 'authors';
     protected $fillable = ['name','Email','job','Num_Writings','book_id'];

    public function books()
    {

        return $this->hasMany(Book::class);
    }

    public function articles()
    {

        return $this->hasMany(Article::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class); 

    }

    public function loan()
    {
        return $this->hasMany(Loan::class, 'author_id', 'id');
    }
}
