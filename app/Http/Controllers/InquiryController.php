<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        Inquiry::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
             'service' => $request->service,
            'project_details' => $request->project_details,
        ]);

        return redirect()->back()->with('success','Your inquiry has been sent successfully!');
    }


public function index()
{
    $inquiries = Inquiry::all();

    return view('admin.admindb', compact('inquiries'));
}
}