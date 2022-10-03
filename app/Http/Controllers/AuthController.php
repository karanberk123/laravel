<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
     /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function signin()
    {
        return $this->showView('signin');
    }
     /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function signout()
    {
        session()->flush();
        return redirect('/');
    }
     /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return $this->showView('register');
    }
     /**
     * Store a newly created resource in storage.
     *
     */
    public function registerAjax(Request $request)
    {
       [$result, $message] =  Auth::register($request->email , $request->username,$request->password, $request->confirmpassword);
      
        return Response()->json(array('result' => $result, 'message' => $message));
    }
     /**
     * Store a newly created resource in storage.
     *
     */
    public function signinAjax(Request $request)
    {
       [$result, $message] =  Auth::login($request->username,$request->password);
      
        return Response()->json(array('result' => $result, 'message' => $message));
    }
}
