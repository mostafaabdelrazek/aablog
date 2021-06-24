<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class pages extends Controller
{

    public function home(){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function postContact( Request $request){
        $this->validate($request , [
            'email' => 'required|email',
            'name'  => 'required|min:3|max:55',
            'message' => 'required|min:5|max:255',
            'phone' => 'nullable|min:7|max:15|'            
        ]);
    
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'bodymessage' => $request->message,
        ];

       

        Mail::send('emails.contact' , $data , function($message) use ($data){
            $message->from($data['email']);
            $message->to('admin@gmail.com');
            $message->subject($data['name']);
        });
        Session::flash('success' , 'you\'r contact in touch!');
       
       return redirect('/');
    }

}
