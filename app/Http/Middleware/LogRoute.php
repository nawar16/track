<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Support\Facades\Log;
use App\Log;

class LogRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $user_id = auth()->user() ? auth()->user()->id : 'GUEST';
        $ip = $request->ip();
        $api_1 = 'http://api.ipapi.com/'.$ip.'?access_key=d4d048dff062566f780e0f9166bef0e9';
        $location = file_get_contents($api_1);
        $point = explode(",", $location);
        $pp = explode("\"",json_encode($point));
        //dd($pp);
        $counrty = $pp[34];
        $city = $pp[46];
        if($counrty == "region_name\\")
        {
            $counrty = "unknown";
            $city = "unknown";
        }
        $log = [
            'url' => $request->getUri(),
            'user_id' => $user_id,
            'method' => $request->getMethod(),
            'request_body' => $request->all(),
            'device' => $request->header('User-Agent'),
            'ip' => $ip,
            'country' => $counrty,
            'city' => $city
        ];
        Log::create($log);
        return $response;
    }
}
