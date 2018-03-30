<?php

namespace App\Http\Middleware;

use Closure;

class Acl
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
//        $actions = $request->route()->getAction();
//       dd($request);

        $user = $request->user();

//        $actions = $request->route()->getAction();
//        dd($actions);




        if(!$user){
           return redirect('login');

        }else
        {

            $actions = $request->route()->getAction();

            $roles = isset($actions['roles']) ? $actions['roles'] : null;

            if ($request->user()->hasAnyRoles($roles)) {
                return $next($request);

            }
        }
        return redirect('login');


    }
}
