<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    private function loginFailed(){
        return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Logain Failed, Please try again!');
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
                'email' => 'required|unique:patients,email',
                'name' => 'required',
                'phone' => 'unique:patients,phone|numeric',
                'password' => 'required|min:5',
                'birth_date' => 'required|before:today'
            ];
            

        //custom validation error messages.
        $messages = [
            'email.unique' => 'This Email Is Already Exist.',
            'phone.numeric' => 'the phone must be a number',
            'phone.unique' => 'the phone must be unique',
            'password.min' => 'the password must be greater than 5 letters',
            'birth_date.before' => 'You Should Enter Your Real Birth Date'


        ];

        //validate the request.
        $request->validate($rules,$messages);
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'password' => 'required',
        ]);
        // $this->validator($request);
   
        // $credentials = $request->only('email', 'password');
        if(Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home');
        }
  
        return $this->loginFailed();
    }
    public function PostRegisteration(Request $request)
    {
  

        $patient = new Patient();
    if ($image = $request->file('patient-pic')){
        $path = 'images/patients';
        $ext = $image->getClientOriginalExtension();
        $imageName = time(). '.' .$ext;
        $image->move($path , $imageName);
        $patient->img = $imageName; 
    }
    
    
    $patient->name = $request->input('name');   
    $patient->email = $request->input('email');   
    $patient->phone = $request->input('phone');   
    $patient->birth_date = $request->input('dob');
    $patient->password = Hash::make($request->input('password'));
    $patient->save();
    
    if(Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->route('home');
        // dd('test');
    }
    else{
        $this->validator($request);
        $credentials = $request->only('email', 'password');
        return redirect()->back()->withInput($credentials);
        
    }

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
