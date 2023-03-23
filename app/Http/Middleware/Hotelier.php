<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;
use Illuminate\Http\Request;

class Hotelier extends Middleware
{
    
    protected function redirect($request)
    {
        if (! $request->expectsJson()) {
            return route('hotelier_login');
        }
    }
}
