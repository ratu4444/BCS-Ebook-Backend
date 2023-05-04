<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\Validated;
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

        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:admins,email',
            'phone' => 'required|integer|min:11',
            'password' => 'required|min:8'
         ]);



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

    public function adminActive($id){
//        $active = Admin::where('id', $id)
//            ->first();

        Admin::where('id', $id)
            ->first()
            ->update(['is_active' => 1]);

        return redirect()->back();

    }

    public function adminInactive($id){
        Admin::where('id', $id)
            ->first()
            ->update(['is_active' => 0]);

        return redirect()->back();


    }
}
