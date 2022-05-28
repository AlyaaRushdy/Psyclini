<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Secretary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public $table = 'posts';
    public $fillable = [ 
        'id',
        'title',
        'body' , 
        'status',
        'speciality'
    ];
    public $hidden = ['pivot'];

    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    // public function doctors()
    // {
    //     return $this->belongsToMany(Doctor::class, 'doctor_post', 'post_id' , 'doctor_id' , 'id' , 'id');
    // }
    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function secretary()
    {
        return $this->belongsTo(Secretary::class, 'secretary_ssn' , 'ssn');
    }
    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}