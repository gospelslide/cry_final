<?php
 
namespace App\Http\Middleware;
use Closure;
 
class VolunteerGuest
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
        if (!\Auth::check('volunteer')) {
            return redirect('/volunteer');
        }
 
        return $next($request);
    }
}