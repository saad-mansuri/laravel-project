<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use PHPUnit\Util\Test;

class MailController extends Controller
{
    public function sendmail(){
        $details = [
            'name' => 'henilshah',
            'phone' => '6353121872',
            'email' => 'rocksalman249@gmail.com',
            'wpnumber' => '6352148797',
            'budget' => '184000',
            'description' => 'vgkbhnkjml'
        ];

        Mail::to("saadmansuri249@gmail.com")->send(new TestMail($details));
        return "Email is Send";
    }
}
