<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('admin@admin.admin')->send(new DemoMail());
           
        dd("Письмо успешно отправлено.");
    }
}
