<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function sent(Request $request)
    {
        // dd($request);
        Alert::success('Email Sent', 'Successfully Sent');
        return back();
    }
}
