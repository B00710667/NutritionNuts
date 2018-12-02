<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // validates the form data

    $this->validate($request, [
    'email' => 'required|email',
    'password' => 'required|min:6'
]);
//Attempts to login the admin
//If Successful, redirects to the desired location
if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    return redirect()->intended(route('admin.dashboard'));
}
//If unsuccessful, redirects back to login form
return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
