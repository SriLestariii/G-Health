<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contactForm');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'content' => $input['content'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ghealth.psti@gmail.com')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Pesan berhasil dikirim!']);
    }

}
