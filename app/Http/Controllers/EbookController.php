<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use function GuzzleHttp\Promise\all;

class EbookController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function admin(){
        return view('admins.admin');
    }

    public function storeAdmin(Request $request){

        $admin = Admin::create([
           'name' => $request->name,
            'email' => $request->email,
            'number' => $request->phone,
            'password' => $request->password
        ]);
        return redirect()->route('adminShow');
    }

    public function adminShow(Request $request){
        $shows = Admin::all();
        return view('admins.adminShow', compact('shows'));
    }
}
