<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;
    public $table = 'tests';
    public $fillable = [
        'id',
        'name',
        'speciality'
    ];
    public $hidden = ['pivot'];
    /**
     * The roles that belong to the Test
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_test');
    }
}
