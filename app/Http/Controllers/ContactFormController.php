<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormNotification;
use Illuminate\Support\Facades\Session;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('home');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactForm::create($request->all());

        // Kirim email notifikasi
        Mail::to('malon@majulokalnusantara.com')->send(new ContactFormNotification($request->all()));

        // Tambahkan flash message
        Session::flash('success', 'Form submitted successfully! Email has been sent.');

        return redirect()->back()->with('success', 'The form was successfully submitted, we will reply soon');
    }
}
