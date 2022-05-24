<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;


    
        public $fillable = [ 
            'id',
            'ssn',
            'name',
            'email' , 
            'password',
            'birth_date',
            'img',
            'phone',
            'rating',
            'speciality'
        ];
    public $hidden = [
        'password',
        'remember_token',
        'pivot'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public $hidden = ['pivot'];

    public $timestamps = false;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
  
   /**
    * Get all of the comments for the Doctor
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function articles()
   {
       return $this->hasMany(Article::class, 'doctor_id', 'id');
   }
   /**
    * The roles that belong to the Doctor
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function patients()
   {
       return $this->belongsToMany(Patient::class, 'doctor_patient', 'doctor_id', 'patient_id', 'id' , 'id');
   }
   /**
    * Get all of the comments for the Doctor
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
   public function getRouteKeyName(){
       return 'name';
   }
}