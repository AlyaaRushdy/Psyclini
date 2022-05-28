<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentDoctor extends Model
{
    use HasFactory;
	public $fillable = [ 
        'id',
        'time',
        'day',
		'aoppintment_status',
	

    ];
	public $table ='appointment_doctor';
}
