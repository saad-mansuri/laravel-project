<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webuserdata;
use App\Models\Mobuserdata;
use App\Models\Iosuserdata;
use App\Models\Windowuserdata;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    //
    public function listwebdevelop()
    {
        return view('webdevelop-service');
    }

    public function listmobdevelop()
    {
        return view('mobile-app-service');
    }

    public function listiosdevelop()
    {
        return view('ios-app-service');
    }

    public function listwindowdevelop()
    {
        return view('window-app-services');
    }


    public function webdevelop(Request $request)
    {
        $add = new Webuserdata;
        $add->uname = $request->input('username');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->wpnumber = $request->input('wpnumber');
        $add->budget = $request->input('budget');
        $add->description = $request->input('description');
        $add->save();

        Mail::send('mail',array(
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'wpnumber' => $request->get('wpnumber'),
            'budget' => $request->get('budget'),
            'description' => $request->get('description'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('saadmansuri249@gmail.com', 'Admin')->subject($request->get('budget'));
        });

        $request->session()->flash('status', 'Project Submited Successfully... Our Admin will contact with you soon.');
        return redirect('webdevelop');
    }


    public function mobdevelop(Request $request)
    {
        $add = new Mobuserdata;
        $add->uname = $request->input('username');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->wpnumber = $request->input('wpnumber');
        $add->budget = $request->input('budget');
        $add->description = $request->input('description');
        $add->save();

        Mail::send('mail',array(
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'wpnumber' => $request->get('wpnumber'),
            'budget' => $request->get('budget'),
            'description' => $request->get('description'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('saadmansuri249@gmail.com', 'Admin')->subject($request->get('budget'));
        });

        $request->session()->flash('status', 'Project Submited Successfully... Our Admin will contact with you soon.');
        return redirect('mobdevelop');
    }


    public function iosdevelop(Request $request)
    {
        $add = new Iosuserdata;
        $add->uname = $request->input('username');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->wpnumber = $request->input('wpnumber');
        $add->budget = $request->input('budget');
        $add->description = $request->input('description');
        $add->save();

        Mail::send('mail',array(
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'wpnumber' => $request->get('wpnumber'),
            'budget' => $request->get('budget'),
            'description' => $request->get('description'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('saadmansuri249@gmail.com', 'Admin')->subject($request->get('budget'));
        });

        $request->session()->flash('status', 'Project Submited Successfully... Our Admin will contact with you soon.');
        return redirect('iosdevelop');
    }

    public function windowdevelop(Request $request)
    {
        $add = new Windowuserdata;
        $add->uname = $request->input('username');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->wpnumber = $request->input('wpnumber');
        $add->budget = $request->input('budget');
        $add->description = $request->input('description');
        $add->save();

        Mail::send('mail',array(
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'wpnumber' => $request->get('wpnumber'),
            'budget' => $request->get('budget'),
            'description' => $request->get('description'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('saadmansuri249@gmail.com', 'Admin')->subject($request->get('budget'));
        });

        $request->session()->flash('status', 'Project Submited Successfully... Our Admin will contact with you soon.');
        return redirect('windowdevelop');
    }


}
