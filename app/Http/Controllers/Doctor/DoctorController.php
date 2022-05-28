<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Post;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\AppointmentDoctor;
use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePostRequest;

class DoctorController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:doctors,email',
             'hospital'=>'required',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $doctor = new Doctor();
          $doctor->name = $request->name;
          $doctor->email = $request->email;
          $doctor->hospital = $request->hospital;
          $doctor->password = Hash::make($request->password);
          $save = $doctor->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Doctor');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:doctors,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in doctors table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('doctor')->attempt($creds) ){
            return redirect()->route('doctor.index');
        }else{
            return redirect()->route('doctor.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('doctor')->logout();
        return redirect()->route('home');
    }

    public function create_post(StorePostRequest $request)
    {
        $post = new Post();

        if ($image = $request->file('post-pic')){
            $path = 'images/';
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$ext;
            $image->move($path , $imageName);
            $post->image = $imageName; 
        }

        $post->body = $request->input('comment');   
        $post->speciality = $request->input('cate');   
        $doctorId = Auth::guard('doctor')->user()->id ;
        $post->doctor_id = $doctorId;
        $post->save();
     return redirect()->back()->with('status', 'Your Post Was Sent');
     

    }
	public function index()
    {
		$s=Auth::guard('doctor')->user()->id;
		$d=date("Y.m.d");
		$appointment = AppointmentDoctor::where('doctor_id',$s)->where('date','>=',$d)->orderBy('date','asc')->get();
		return view('doctor-dashboard.index', compact('appointment'));
    }
	
public function dHistory()
    {

        $s=Auth::guard('doctor')->user()->id;
		$d=date("Y.m.d");
		$appointment = AppointmentDoctor::where('doctor_id',$s)->where('date','<=',$d)->orderBy('date','asc')->get();
		return view('doctor-dashboard.history appointments', compact('appointment'));
    }
public function dAvilable()
    {
		$s=Auth::guard('doctor')->user()->id;

		$appointment = Appointment::where('doctor_id',$s)->where('patient_status',0)->get();
		return view('doctor-dashboard.avillable appointments', compact('appointment'));
    }
public function AApp($id)
    {
		$appointment1=Appointment::where('id',$id)->first();
		$appointment1->doctor_status=1;
		$appointment1->save();
		return back()->with('status2', 'Availlable done');
    }
public function NAApp($id)
    {
		
		$appointment1=Appointment::where('id',$id)->first();
		$appointment1->doctor_status=0;
		$appointment1->save();
		return back()->with('status2', 'Not Availlable done');
    }	
}
