<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        if($request->password != $request->password_confirmation){
            return redirect()->back()->with('error', 'Confirm password does not match with password field');
        }
        if($request->password == $request->password_confirmation){
            $user = new User();
            $user->student_id = $request->student_id;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('welcome')->with('success', 'Registration successful, Please login to continue');
        }
    }
}
