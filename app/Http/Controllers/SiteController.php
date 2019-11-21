<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index ()
    {
    	return view ("principal");
    }

    public function contato ()
    {
    	return view ('contato');
    }

    public function informativo ()
    {
    	return view ('informativo');
    }
}
