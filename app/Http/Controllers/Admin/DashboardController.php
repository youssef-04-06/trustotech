<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
class DashboardController extends Controller
{
   
        public function index()
{
    $inquiries = Inquiry::latest()->get();
    return view('admin.admindb', compact('inquiries'));
}
    
}