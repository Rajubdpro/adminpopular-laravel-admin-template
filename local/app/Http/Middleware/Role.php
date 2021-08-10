<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Helpers;
use Illuminate\Support\Facades\Auth;

class Role
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
        $role = Helpers::get_current_role_name(); 
        if($role == "Admin"){
            return $next($request);
        }
        
        return redirect()->back();
    }
}
