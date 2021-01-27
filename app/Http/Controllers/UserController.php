<?php

namespace App\Http\Controllers;

use App\Models\Webuserdata;
use App\Models\Mobuserdata;
use App\Models\Iosuserdata;
use App\Models\Windowuserdata;
use Illuminate\Http\Request;
// use App\Http\Controllers\UserController;

class UserController extends Controller
{
    //
    public function listwebdevelop()
    {
        return('webdevelop');
    }

    public function listmobdevelop()
    {
        return('mobdevelop');
    }

    public function listiosdevelop()
    {
        return('iosdevelop');
    }

    public function listwindowdevelop()
    {
        return('windowdevelop');
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
        // $file = $request->file('image');
        /* $add->end_date = $request->input('enddate');
        if ($request->hasFile('image')) {
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $add->image = $filename;
        } else {
            return $request;
            $add->image = '';
        } */
        // $add->image = $request->file('image')->store('uploads');
        // $add->description = $request->input('description');
        $add->save();
        $request->session()->flash('status', 'News Inserted Successfully');
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
        // $file = $request->file('image');
        /* $add->end_date = $request->input('enddate');
        if ($request->hasFile('image')) {
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $add->image = $filename;
        } else {
            return $request;
            $add->image = '';
        } */
        // $add->image = $request->file('image')->store('uploads');
        // $add->description = $request->input('description');
        $add->save();
        $request->session()->flash('status', 'News Inserted Successfully');
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
        // $file = $request->file('image');
        /* $add->end_date = $request->input('enddate');
        if ($request->hasFile('image')) {
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $add->image = $filename;
        } else {
            return $request;
            $add->image = '';
        } */
        // $add->image = $request->file('image')->store('uploads');
        // $add->description = $request->input('description');
        $add->save();
        $request->session()->flash('status', 'News Inserted Successfully');
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
        // $file = $request->file('image');
        /* $add->end_date = $request->input('enddate');
        if ($request->hasFile('image')) {
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $add->image = $filename;
        } else {
            return $request;
            $add->image = '';
        } */
        // $add->image = $request->file('image')->store('uploads');
        // $add->description = $request->input('description');
        $add->save();
        $request->session()->flash('status', 'News Inserted Successfully');
        return redirect('windowdevelop');
    }
}