<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Secretary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreSecretaryRequest;
use App\Http\Requests\UpdateSecretaryRequest;
use App\Models\Contact;
use App\Models\Post;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ADMIN index');
    }
    public function admin_create()
    {
        return view('admin.ADMIN CreateDoctorsAccount');
    }
    public function admin_contact()
    {
        $contacts = Contact::all();
        return view('admin.ADMIN contact us responses', compact('contacts'));
    }

    public function admin_approve_requests()
    {
        return view('admin.ADMIN approve doctors requests');
    }
    public function modify_appoinment()
    {
        return view('admin.ADMIN Modify Appointments');
    }
    public function posts()
    {
        $posts = Post::with('patient', 'doctor')->get();
        return view('admin.ADMIN posts', compact('posts') );
    }
    public function show_posts()
    {
        dd('kk');
        $posts = Post::with('patient', 'doctor')->get();
        dd($posts);
        return view('admin.ADMIN posts', compact('doctor' , 'patient'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function check(StoreSecretaryRequest $request){
        //Validate Inputs
        // $request->validate([
        //     'email'=>'required|email|exists:secretaries,email',
        //     'password'=>'required|min:5|max:30'
        // ],[
        //     'email.exists'=>'This email is not exists in secretries table',
            
        // ]);

        $creds = $request->only('email','password');
        
        if( Auth::guard('secretary')->attempt($creds) ){

            return redirect()->route('secretary.index');
        }else{
            return redirect()->route('secretary.login')->with('fail','Incorrect Credentials');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecretaryRequest  $request
     * @return \Illuminate\Http\Resp
     * 
     * onse
     */
    public function store(Request $request)
    {

        
        $data = $request->validate([
            'name' => 'required',
            'ssn' => 'required|min:11|unique:doctors,ssn|numeric',
            'phone' => 'required|unique:doctors,phone|numeric',
            'birth_date' => 'required|before:today',
            'email'=> 'required|email|unique:doctors,email',
            'password' => 'required|min:5'
        ],[
            'password.min' => '55555555',
            'birth_date.before' => 'aaaaaaaa'
        ]
        );
        
        $sec= new Doctor();

    
        if ( $request->hasFile('pic')){
            $image = $request->file('pic');
            $path = 'images/doc';
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$ext;
            $image->move($path , $imageName);
            $sec->img = $imageName; 
        }
        
         $sec->ssn = $request->input('ssn');   
         $sec->speciality = $request->input('cate');   
         $sec->name = $request->input('name');   
         $sec->email = $request->input('email');   
         $sec->password = Hash::make($request->input('password'));   
         $sec->phone = $request->input('phone');   
         $sec->birth_date = $request->input('birth_date');   
         $sec->session_fees = $request->input('session_fees'); 
         $sec->experince_years = $request->input('experience');
         $sec->education = $request->input('education');               
         $sec->rating = null;               
         $sec->gender = null;               
         $done = $sec->save();       
         if($done)
         {
             
             return redirect()->route('secretary.createDRAccount')->with('status2', 'doctor Added Successfully');
         }
         else
         {
            
            return redirect()->back()->with('fail', 'Error');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function show(Secretary $secretary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretary $secretary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecretaryRequest  $request
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecretaryRequest $request, Secretary $secretary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image)
        {
            unlink('images/'. $post->image);
        }
        $post->delete();
        return redirect()->route('secretary.show.posts')->with('status1', 'The Post Was Deleted Successfully');
    }
}
