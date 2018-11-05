<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Follower;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;


class RegistrationController extends Controller
{
    public function store(Request $request, SendEmail $email)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'password' => 'required',
        ]);

        if($data['password'] == request('password_confirmation')){

            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);

            if($user){
                auth()->login($user);
                $email->dispatch();
            }

            $profile = Profile::create([
                'user_id' => $user->id,
            ]);


            auth()->login($user);
        }else{
            return redirect()->back();
        }


        return redirect('/dashboard');
    }
}
