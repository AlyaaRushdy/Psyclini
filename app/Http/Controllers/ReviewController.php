<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Review;
use App\Models\AppointmentDoctor;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDoctorRequest;

class ReviewController extends Controller
{
    //
	    public function store(StoreDoctorRequest $request  )
    {
		$r=Auth::guard('patient')->user()->id;
		
		$a=$request->input('did');
	
		$rev=$request->input('rev');
		$star=$request->input('star');
		
		$r1=Review::where('patient_id',$r)->where('doctor_id',$a)->first();
		
		$r2=AppointmentDoctor::where('patient_id',$r)->where('doctor_id',$a)->first();
		
		$doc=Doctor::where('id',$a)->first();
		
		
		if($r2==NULL)
			return back()->with('status2', 'You must take an appointment first');
		elseif($r1==Null)
		{$review = new Review();
			$review->review=$rev;
			$review->star=$star;
			$review->patient_id=$r;
			$review->doctor_id=$a;
		    $review->save();
			
			$docu=Doctor::where('id',$a)->first();
			$rat=$docu->rating;
			$s=$docu->ratting_times+1;	
			$docu->rating=$rat+$star;
			$docu->stars=$rat/$s;
			$docu->save();
		
			return back()->with('status2', 'Your review Was added');
		}
		else
		{   
			$i=$r1->id;
		    $review1=Review::where('id',$i)->first();
			$review1->review=$rev;
			$review1->star=$star;
			$review1->save();
			
			$b=$r1->star;
			$docu=Doctor::where('id',$a)->first()->id;
		
			$rat=$docu->rating;
			$s=$docu->ratting_times;
			$docu->rating=$rat+$star-$b+0.0;
			$docu->stars=$rat/$s;
			$docu->save();

			
        return  back()->with('status2', 'Your review Was updated');
		}
	
    }   
}
