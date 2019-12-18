<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    // protected $table = 'studnets';
    // protected $fillable = ['name','DateOfBirth','address','Email','PhoneNumber'];

    public function studentcard()
    {

        return $this->hasOne(StudentCard::class);
    }

    public function loans()
    {

        return $this->belongsToMany(Loan::class,'loan_student');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class); 

    }
}
