<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Session;
use Carbon\Carbon;
use App\Model\Admin;
use App\Model\Vendor;

class LoginController extends Controller
{

    public function index($type)
    {
        return view('admin.auth.login')->with('type',$type);
    }
    public function adminLoginSubmit(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $email = $request->input('username');
        // dd($email);
        $input_password = $request->input('password');
        if($request->type == 'vendor'){
            $admin = Vendor::where('email', $email)->first();
        }else{
            $admin = Admin::where('email', $email)->first();
        }
           
        // dd($admin);
        if (!$admin || (!Hash::check($input_password, $admin->password))) {
            return redirect()->back()->with('message', 'Please check your credentials');
        } else {
            session(['user' => $admin, 'user_type' => $request->type, 'message' => 'Welcome to dashboard']);
            return redirect()->route('admin.dashboard')->with('message', 'Welcome to dashboard');
        }
    }
    public function logout($type){
        session()->flush();
        return redirect()->route('admin.login',$type);
    }
}
