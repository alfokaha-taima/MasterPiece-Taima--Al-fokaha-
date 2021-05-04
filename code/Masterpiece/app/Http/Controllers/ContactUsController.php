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
           'message' => 'required | min:8 | max:400'
       ]);

       $contact = new ContactUs();
       $contact->name = $request['name'];
       $contact->email = $request['email'];
       $contact->message = $request['message'];
    //    print_r ($contact);die;
       $contact->save();
       $request->session()->flash('success','Your Message Sent Successfully');

       return redirect()->back();
    }

    public function delete($id){
        ContactUs::destroy($id);
       
        return back()->with('success', 'Message Deleted!');
    }
}
