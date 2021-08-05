<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;

class UserAccessRole
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
    try{
        $userRole = auth()->user()->role;
        $currentRoute = Route::currentRouteName();
        if(in_array($currentUser, $this->userAccessRole()[$userRole])){

            return $next($request);
        }else{
            abort(403, 'restricted');
        }
    }catch(\Throwable $th){
        abort(403, 'restricted');

    }
    }

    public function userAccessRole(){
        return [
            'manager' => ['dashboard'],
            'admin' => ['dashboard']
        ];
    }
}
