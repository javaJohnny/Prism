<?php

namespace App\Http\Controllers;

use app\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('johnrae@shaw.ca')->send(new Mailtrap());
    }
}
