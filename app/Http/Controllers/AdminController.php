<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $inquiries = Inquiry::latest()->get();/**Gets all inquiries from the database

latest() → newest first */

        return view('admin.admindb', compact('inquiries'));
    }/**Sends data to:

admin/admindb.blade.php
 So admin can see all requests */

    public function messages(): View
    {
        $inquiries = Inquiry::latest()->get();

        return view('message', compact('inquiries'));
    }/**Sends data to:

message.blade.php */
}