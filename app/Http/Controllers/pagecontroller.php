<?php
 
 namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        
       $name=$request->input('name');
       $email=$request->input('email');
       $phone=$request->input('phone');
       $message=$request->input('message');

       $data=[];
       $data['name']=$name;
       $data['email']=$email;
       $data['phone']=$phone;
       $data['message']=$message;



        return view('submit', compact('data'));
    }
}
