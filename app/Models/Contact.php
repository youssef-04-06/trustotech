<?php

namespace App\Models;// This tells Laravel that this file belongs to the Models folder

use Illuminate\Database\Eloquent\Factories\HasFactory;//used for testing or creating fake data
use Illuminate\Database\Eloquent\Model;//base class that allows this file to interact with the database

class Contact extends Model//This creates a model named Contact that laravel links it directly to contact table
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'topic',
        'message',
    ];//This defines which fields can be inserted into the database
}