<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SystemAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->role) {
            switch ($user->role->role_name) {
                case 'Employee':
                    return redirect()->route('employee.dashboard');
                case 'PSDS':
                    return redirect()->route('psds.dashboard');
                case 'HR Manager':
                    return redirect()->route('hr.dashboard');
                case 'System Admin':
                    return $next($request);
                case 'Reporting Manager':
                    return redirect()->route('principal.dashboard');
                default:
                    abort(403);
            }
        }

        return redirect()->route('auth.login');
    }
}
