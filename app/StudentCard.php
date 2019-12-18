<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCard extends Model
{
    //

    // protected $table = 'student_cards';
    // protected $fillable = ['StudentNumber','Firstname','Degree','Barcode','student_id'];

    public function student()
    {

        return $this->belongsTo(Student::class);
    }
}
