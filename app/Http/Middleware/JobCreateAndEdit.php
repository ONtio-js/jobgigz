<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JobCreateAndEdit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('details.companyId')){
            return back()->with('message',' Register company account to post job');
        }else if(session()->get('details.verify') == null){
            return back()->with('message',' Account not verified, Proceed to your registered email');
        }
        return $next($request);
    }
}
