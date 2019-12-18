<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $table = 'loan_student';
    protected $fillable = ['book_id','author_id','student_id','content'];
    
    public function books()
    {

        return $this->hasMany(Book::class);
    }

    public function articles()
    {

        return $this->hasMany(Article::class);
    }

    public function students()
    {

        return $this->belongsToMany(Student::class,'loan_student');
    }

}
