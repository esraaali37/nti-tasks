<?php

namespace App\Http\Middleware;

use Closure;
use App\traits\ApiTrait;
use Illuminate\Http\Request;

class EncureAcceptKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        if($request->header('accept') !== 'application/json'){
            return ApiTrait::errorMessage(['accept'=> 'Missed Key In Header'],"Accept :application/json");
        }
        return $next($request);
    }
}
