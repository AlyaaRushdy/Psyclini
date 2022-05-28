<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Patient;
use App\Models\Secretary;
use App\Models\postPatient;
use App\Models\Appointment;
use App\Models\AppointmentDoctor;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Cache\Events\KeyWritten;
class AppointmentController extends Controller
{
    //
	public function search(Request $request)
{
    $phone = $request->input('phone');
  

        $patients = Patient::where(function ($q) use ($phone){
            
            $q->where('phone' , 'LIKE' ,$phone);
                
        })->paginate(6);
        // $doctors = Doctor::where('rating' , "LIKE" , '%'.$rating.'%')->paginate(6);
        return view('html.doctors', compact('patients'));
}
public function appup($app )
    {
     
	 
}
 public function reserve(StorePostRequest $request  )
    {
		
            $r=Auth::guard('patient')->user()->id; 
			$a=$request->input('did');
			
			$app=$request->input('app');
			$a1=Appointment::find($app)->day;
			$d=date("Y-m-d" , strtotime ("next $a1"));
			$t1=Appointment::find($app);
			$t=Appointment::find($app)->time;
			
			$m=$request->input('mas');
			
			$pp=AppointmentDoctor::where('patient_id',$r)->where('date',$d)->where('time',$t)->first();
			if( $pp != Null)
			{	
			 return back()->with('status2',  'The paient has at the same time apointment');
	}
			else
			{$var=new AppointmentDoctor();
				$var->date=$d;
				$var->time=$t;
				$var->message=$m;
				$var->patient_id=$r;
				$var->appointment_id=$app;
				$var->doctor_id=$a;
				$var->aoppintment_status=0;
				$var->save();
				$p=Appointment::updateOrCreate(['id'=>$app],['doctor_status'=>0],['patient_status'=>1]);				
				return back()->with('status2', 'The appointment has been reserved at');
				
			}
				
 

     
    }

public function Upcom()
    {
		$s=Auth::guard('patient')->user()->id;
		$d=date("Y.m.d");
		$appointment = AppointmentDoctor::where('patient_id',$s)->where('date','>=',$d)->orderBy('date','asc')->get();
		return view('html.upcoming appointments', compact('appointment'));
    }
	
	public function pHistory()
    {

        $s=Auth::guard('patient')->user()->id;
		$d=date("Y.m.d");
		$appointment = AppointmentDoctor::where('patient_id',$s)->where('date','<=',$d)->orderBy('date','asc')->get();
		return view('html.patient history', compact('appointment'));
    }


	

	
public function deleteApp($id)
    {
		
       $d=AppointmentDoctor::where('id',$id)->first()->appointment_id;
        $appointment = AppointmentDoctor::where('id',$id)->first();
		$appointment->delete();
		$appointment1=Appointment::where('id',$d)->first();
		$appointment1->doctor_status=1;
		$appointment1->patient_status=0;
		$appointment1->save();
		return back()->with('status2', 'The appointment has been canceled');
    }
	
}

		?>