<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Mail;
use App\Message;

use App\Mail\ContactMail;



class MessageController extends Controller
{
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Message::rules());
               
        if ($validation->fails()) {
           
           request()->session()->flash('message',"Echec de l'envoi du message");
           request()->session()->flash('class',"alert-danger");

           return redirect()->back();
        }

        else{
                // dd($request->all());

             $message = Message::create($request->all());

             Mail::to('seneboly@gmail.com')->send(new ContactMail($message));
             request()->session()->flash('message',"Votre message est bien envoyé");
             request()->session()->flash('class',"alert-success");
            return redirect()->back();

            
        }
        
    }
}


