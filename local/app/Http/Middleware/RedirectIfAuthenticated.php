<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Helpers;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $role = Helpers::get_current_role_name(); 
          switch ($role) {
            case 'Admin':
               return redirect('/home');
               break;
            case 'User':
               return redirect('/customer-portal');
               break; 
      
            default:
               return redirect('/customer-portal'); 
               break;
          }
        }
        return $next($request);
      }
}
