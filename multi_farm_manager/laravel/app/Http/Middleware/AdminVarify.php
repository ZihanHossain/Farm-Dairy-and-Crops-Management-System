<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminVarify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('type'))
        {
            if($request->session()->get('type') == 'manager')
            {
                return $next($request);
            }
            else
            {
                abort(403);
            }
        }
        else
        {
            $request->session()->flash('msg', 'Invalid Request');
            return redirect('/login');
        }
    }
}
