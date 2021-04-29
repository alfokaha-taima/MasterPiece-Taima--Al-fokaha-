<?php

namespace App\Http\Controllers;
use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contact = new ContactUs();
       $contacts = $contact->all();
       return view('dashboard.contactUs', compact('contacts'));
   }

   public function create(){
       return view('Public.contact');
   }

   public function store(Request $request){
       $request->validate([
            'name' => 'required',
           'email'  => 'required | email',
           'message' => 'required | min:8 | max:50'
       ]);

       $contact = new ContactUs();
       $contact->name  = $request['name'];
       $contact->email = $request['email'];
       $contact->message = $request['message'];

       $contact->save();

       return redirect('/contact_Us')->with("message","Message sent successfully!");
   }
}
