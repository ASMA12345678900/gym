<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function contact(Request $request){

        Contact::create($request->all());
        return redirect()->route('contact');

    }
}
