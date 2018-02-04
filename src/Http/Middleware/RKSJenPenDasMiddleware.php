<?php namespace Bantenprov\RKSJePenDas\Http\Middleware;

use Closure;

/**
 * The RKSJePenDasMiddleware class.
 *
 * @package Bantenprov\RKSJePenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJePenDasMiddleware
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
        return $next($request);
    }
}
