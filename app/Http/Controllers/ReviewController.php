<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDoctorRequest;

class ReviewController extends Controller
{
    //
	    public function store(StoreDoctorRequest $request ,Doctor $doctor )
    {
		$r=Auth::guard('patient')->user()->id;
		$a=$doctor->ssn;
		$rev=$request->input('rev');
		$star=$request->input('star');
		$r1=Review::where('patient_id',$r)->where('doctor_ssn',$a)->get();
		
		$r2=Appointment_Doctor::where('patient_id',$r)->where('doctor_ssn',$a)->get();
		if($r2==NULL)
			return redirect()->route('review')->with('status', 'You must take an appointment first');
		elseif($r1==Null)
		{$review = new Review();
			$review->review=$rev;
			$review->star=$star;
			$review->patient_id=$r;
			$review->doctor_ssn=$a;
		    $review=save();
			return redirect()->route('review')->with('status', 'Your review Was added');
		}
		else
		{   $review1 = new Review();
			$review1 = $r1;
			$review1->review=$rev;
			$review1->star=$star;
		    $review1=update();
        return redirect()->route('review')->with('status', 'Your review Was added');
		}
    }   
}
