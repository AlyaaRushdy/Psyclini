<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Database\Seeders\AppointmentSeeder;
use Symfony\Component\Console\Input\Input;

class MyDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('test');
        $doctors = Doctor::Paginate(9);
        return view('html.doctors', compact('doctors'));
    }
    public function search(Request $request)
{
    $specialization = $request->input('speciality');
    $rating = $request->input('rating');
    $gender = $request->input('gender');
    $fees = $request->input('fees');
    
        $doctors = Doctor::where(function ($q) use ($rating, $specialization, $gender, $fees){
            

            $q->where('speciality' , 'LIKE' , '%'.$specialization.'%')
                ->Where('rating' , "LIKE" , $rating.'%')
                ->Where('gender' , "LIKE" , $gender);
            if ($fees == 'Less Than 150'){
                $q->Where('session_fees' , '<' , 150);
            }
            elseif ($fees == '150 Less Than 200') {
               
               $q ->WhereBetween('session_fees', [ 150, 200] );
            }
            elseif ($fees == 'From 200 To 300') {
               
               $q ->WhereBetween('session_fees', [ 200, 300] );
            }
            elseif ($fees == 'From 300 To 500') {
               
               $q ->WhereBetween('session_fees', [ 300, 500] );
            }
            elseif ($fees == 'Above 500') {
               
               $q ->where('session_fees', '>', 500 );
            }
        })->paginate(9);

        if ($doctors->count() == 0){
            return redirect()->route('doctors.index')->with('status2', 'Your Search Does Not Match With Our Doctors ' );
        }
        else{

            return view('html.doctors', compact('doctors'));    
        }

        // return  response()->json($doctors->count());
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function loginFailed(){
        return redirect()
                ->back()
                ->withInput()
                ->with('status2', 'Logain Failed, Please try again!');
}
    public function postLogin(Request $request)
    {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

        
    //     if(Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])){
           
    //         // dd('sff');
    //         return redirect()->intended('doctor.index');
    //     // return 'yes';   
    // }
    //     return $this->loginFailed();
    // }

    $request->validate([
        'email'=>'required',
        'password'=>'required'
     ]);

     $creds = $request->only('email','password');

     if( Auth::guard('doctor')->attempt($creds) ){
        //  dd('mm');
         return redirect()->route('doctor.index');
     }else{
         return redirect()->route('doctor.signin')->with('fail','Incorrect credentials');
     }
}
    
    public function show_profile(){
        return view('html.doctor page');
    }

    public function create_new(){
        dd(Auth::guard('doctor')->user());
        return view('doctor-dashboard.create post');
    }
    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()
            ->route('home')
            ->with('status','Admin has been logged out!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
public function doctor_index()
{
    return view('doctor-dashboard.index');
}
public function create_post()
{
    return view('doctor-dashboard.create post');
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        // $ssn =  $doctor->ssn;
        // $doctors = Doctor::where('ssn',$ssn)->get();
        // return response()->json($doctors);
        // $appointments = Appointment::with('doctor');
        return view('html.doctor Page', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
