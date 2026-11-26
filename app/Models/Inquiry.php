<?php

namespace App\Models;//his file belongs to the Models folder

use Illuminate\Database\Eloquent\Factories\HasFactory;//lets you interact with the database
use Illuminate\Database\Eloquent\Model;//used for testing (not very important here)

class Inquiry extends Model
{
    use HasFactory;

    protected $table = 'inquiries';

    protected $fillable = [
        'full_name',
        'email',
        'service',
        'project_details',
    ];
}// These are the fields that can be saved in the database: