<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    // protected $table = 'articles';
    // protected $fillable = ['title','creation_date','author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class,'author_id'); 


    }

    public function loan()
    {
        return $this->belongsTo(Loan::class,'loan_id'); 

    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class); 

    // }



}
