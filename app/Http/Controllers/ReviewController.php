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
			
			$rat=$doc->rating;
			$s=$doc->ratting_times+1;
			$docu=Doctor::updateOrCreate(['id'=>$a],['rating'=>$rat+$star],['stars'=>$rat/$s]);
			
		
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
			$rat=$doc->rating;
			$s=$doc->ratting_times;
			$docu=Doctor::updateOrCreate(['id'=>$a],['rating'=>$rat+$star-$b],['stars'=>$rat/$s]);
		
		

			
        return  back()->with('status2', 'Your review Was updated');
		}
	
    }   
}
