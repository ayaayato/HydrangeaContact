<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
         return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'category' => 'required',
            'body'  => 'required',
        ]);
        
        $inputs = $request->all();

        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function sent(Request $request)
    {
        $inputs = $request->all();
        if($request->action === 'back') {
            return redirect()->route('contact')->withInput($inputs);
        }

        $request->session()->regenerateToken();
        

        \Mail::to('on88.sakakibara.ayato@gmail.com')->send(new Contact($inputs));

            return view('contact.sent');
    }

}
