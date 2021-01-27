<?php

namespace App\Http\Controllers;

// use App\Models\Contact;
use App\Mail\TestMail;
// use App\Mail\Mail;
use App\Mail\contact;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
// use Illuminate\Support\Facedes\Mail;

class ContactFormController extends Controller
{
    function testing()
    {
        echo "Hello";
    }

    public function createForm()
    {
        return view('contact_form');
        // return view('webdevelop-service');
    }

    public function ContactUsForm(Request $request)
    {

        // $add = new Contact;
        // $add->uname = $request->input('uname');
        // $add->email = $request->input('email');
        // $add->phone = $request->input('phone');
        // $add->wpnumber = $request->input('wpnumber');
        // $add->budget = $request->input('budget');
        // $add->description = $request->input('description');

        // Form validation
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        //     'wpnumber' => 'required',
        //     'budget'=>'required',
        //     'description' => 'required'
        //  ]);

        //  Store data in database
        // Contact::create($request->all());

        //  Send mail to admin

        // $details = [
        //     'admin' => 'Admin',
        //     'name' => 'Saad Mansuri',
        //     'phone' => '6353121872',
        // ];


        // Mail::to("saadmansuri249@gmail.com");
        // ->send(new TestMail($details))
        // return "Email is Send";


        Mail::send('contact',array(
            'name' => $request->get('uname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'wpnumber' => $request->get('wpnumber'),
            'budget' => $request->get('budget'),
            'description' => $request->get('description'),
            ),
                function($Message) use ($request){
                    $Message->from($request->email);
                    $Message->to('saadmansuri249@gmail.com', 'Admin')->subject($request->get('uname'));
            }
        );
        $request->session()->flash('status', 'We have received your message and would like to thank you for writing to us.');
        return redirect('contact');
        // return back()->with('status', 'We have received your message and would like to thank you for writing to us.');
    }
}
