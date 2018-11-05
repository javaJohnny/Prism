<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class SessionController extends Controller
{


    public function show()
    {
        return view('layouts.master');
    }

    public function store(Request $request)
    {
        if(! auth()->attempt(request(['email', 'password'])))
        {
            session()->flash('errorMessage', 'Invalid credentials');
            return redirect()->back();
        }
        session()->flash('message', 'You have successfully Logged In');
        return redirect ('/dashboard');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
