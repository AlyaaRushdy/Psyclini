<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Secretary extends Authenticatable
{
    use HasFactory, Notifiable;
    public $table = 'secretaries';
    public $guard = 'secretary';
    public $fillable = [ 
        'ssn',
        'name', 
        'email',
        'birth_date',
        'img'
    ];
    public $timestamps = false;
     /**
      * The roles that belong to the Secretary
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */

     public function comments()
     {
         return $this->hasMany(Comment::class);
     }
}
