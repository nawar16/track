<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 60;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name', 'MyValue', $minutes));
        return $response;
        $cookie = cookie('name', 'value', $minutes);
        return response('Hello World')->cookie($cookie);
    }
    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
        $value = $request->cookie('name');
    }
}
