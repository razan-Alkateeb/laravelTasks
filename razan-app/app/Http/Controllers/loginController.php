<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class loginController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();

        if ($user) {
            if ($password == $user->password) {

                return redirect('home');
            }
        }

        else{
            return redirect('login');
        }
    }

   

}
