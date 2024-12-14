<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Dronal Trump";
        $age = "75";

        $data = ['id'=>$id, 'name'=>$name, 'age'=>$age];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = Cookie::make(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

        // Return the response with the cookie
        return response()->json($data, 200)->withCookie($cookie);
    }


}
