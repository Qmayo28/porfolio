<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        
        //send email
        
        Mail::to('ayopogi28@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        // return $request->all();
        return['success' => true];
        
    }
}
