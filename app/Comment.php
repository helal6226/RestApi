<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // protected $table = 'Comment';
        protected $fillable = ['book_id','author_id','user_id','content'];

    public function user()
    {
        return $this->belongsTo(User::class); 

    }

    public function book()
    {
        return $this->belongsTo(Book::class); 

    }

    public function author()
    {
        return $this->belongsTo(Author::class); 

    }
    // public function article()
    // {
    //     return $this->belongsTo(Article::class); 

    // }
}
