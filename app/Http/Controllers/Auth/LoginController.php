<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {login as loginAuthenticateUsers;}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(\Illuminate\Http\Request  $request)
    {
        $apiResponse = Http::asForm()->post(config('api.url').'login',[
            'email'=>$request->email,
            'password'=>$request->password,
            ]);
        $token = json_decode($apiResponse->body())->success->token ?? null;
        if(200 == $apiResponse->status())
        {
            Session::put('api_token',$token);
            $user = json_decode($apiResponse->body())->user;
            Session::put('userFirstname',$user->firstname);
            return $this->loginAuthenticateUsers($request);
        }
        else{
            abort('403');
        }
    }
}
