<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([
           'name' => 'required',
           'email' => 'required',
            'message' => 'required|max:225'
        ]);

        contact::create($request->all());
        return redirect()->route('contact')->with('success', 'Contact has been added successfully');
    }
}
