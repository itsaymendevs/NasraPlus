<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeMiddleware
{
    public function handle(Request $request, Closure $next) : Response
    {

        if (! empty(session('employeeId')))
            return $next($request);

        return redirect()->route('dashboard.login');

    } // end function

}
