<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
             'topic'=>'required|string',
            'message' => 'required|string',
           
        ]);/**Checks that:

All fields are filled
Email is valid
Data format is correct

 Prevents invalid or empty data */

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
             'topic'   => $request->topic,
            'message' => $request->message,

        ]);/**Uses the Contact model to:

Save data into the database */

        return back()->with('success', 'Message sent successfully');
    }/**After saving:

Redirects user back
Shows success message */

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('message', compact('contacts'));
    }
}/** This is used to display all messages*/