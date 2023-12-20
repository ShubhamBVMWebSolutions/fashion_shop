<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allSessionData = Session::all();
        if (isset($allSessionData['role_id'])) {
                if ($allSessionData['role_id']==1) {
                    return redirect()->route('adminDashboard');
                }else{
                    return redirect()->route('shop');
                }
        }else{
                    return $next($request);
        }
    }
}
