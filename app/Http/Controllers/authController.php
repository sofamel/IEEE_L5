<?php

namespace App\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class authController extends Controller
{
//    public function __construct(Sentry $sentry)
//    {
//        $this->sentry = $sentry;
//    }

    public function Login()
    {
        return view('auth.login');
    }

    public function CheckLogin(Request $request)
    {
        try {
            $user= \Sentry::authenticate($request->only('email','password'), false);
            return redirect('admin/backend');
        } catch(\Exception $e) {
            return redirect('auth/login');
        }

    }

    public function logout() {
        \Sentry::logout();
        return redirect('auth/login');
    }
}
