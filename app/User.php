<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_author', 'is_student'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function books()
    {

        return $this->hasMany(Book::class, 'author_id');
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
