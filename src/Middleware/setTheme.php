<?php namespace Omt\CoreTheme\Middleware;

use Closure;
use Omt\CoreTheme\Facades\Theme;

class setTheme
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $themeName
     * @return mixed
     */
    public function handle($request, Closure $next, $themeName)
    {
        Theme::set($themeName);
        return $next($request);
    }
}
