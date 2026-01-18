<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthForAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $username = config('app.admin_username'); 
        $password = config('app.admin_password');

        if (
            $request->getUser() !== $username ||
            $request->getPassword() !== $password
        ) {
            return response('Unauthorized', 401)
                ->header('WWW-Authenticate', 'Basic realm="Admin Area"');
        }

        return $next($request);
    }
}