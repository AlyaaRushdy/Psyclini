<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
  
    public function store(Request $request)
    {
 
        // $this->validate($request, [
        //     'name' => 'required',
        //     'phone' => 'required'|'numeric',
        //     'email' => 'required'|'email',
        //     'message' => 'required',
        // ]);        
        // $validatorr = [
        //     'name.required' => 'You Must Enter Your name',
        //     'phone.required' => 'You Must Enter A Phone',
        //     'phone.numeric' => 'You Must Enter A Number',
        //     'email.required' => 'You Must Enter Your Email',
        //     'email.email' => 'You Must Enter The Right Format Of An Email',
        //     'message.required' => 'You Must Enter Your Message',
        // ];
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        if($contact->save())
        {
        return redirect()->route('home')->with('status2', 'Your Message Was Sent To Our Team');
        }
        else{

            return redirect()->route('home','#contact-us')->withInput();
        }
    }

}
