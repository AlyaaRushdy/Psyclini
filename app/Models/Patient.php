<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'patient';
    public $fillable = [ 
        'id',
        'phone',
        'name',
        'email' , 
        'password',
        'birth_date',
        'img',
        'sex'
    ];
    //comment
    public $hidden = ['pivot'];
    /**
     * The roles that belong to the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tests()
    {
        return $this->belongsToMany(Test::class, 'patient_test');
    }
    /**
     * The roles that belong to the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_patient', 'patient_id', 'doctor_id', 'id' , 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }



}
