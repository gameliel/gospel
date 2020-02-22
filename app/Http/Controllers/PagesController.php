<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function getContact(){
        return view('contact');
    }

    public function getMinistries()
    {
        return view('ministries');
    }

    public function getSermons(){
        return view('sermons');
    }

    public function getSermon_single(){
        return view('sermon_single');
    }
    
}
