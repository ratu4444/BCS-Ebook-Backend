<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(){
        return view('custom-layouts.master');
    }
}
