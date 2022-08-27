<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function __invoke(Request $request)
    {
        Mail::to($request->email)->send(new ContactEmail());
        return redirect()->back()->with('message', 'Correo enviado (Mailtrap)');
    }

}
