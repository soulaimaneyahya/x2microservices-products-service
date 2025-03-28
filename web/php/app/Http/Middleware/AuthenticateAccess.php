<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;

class AuthenticateAccess
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
        $validSecrets = explode(',', config('services.api_gateway_secrets'));

        if (in_array($request->header('Authorization'), $validSecrets)) {
            return $next($request);
        }

        throw new AuthorizationException('Unauthorized: Invalid API gateway secret.');
    }
}
