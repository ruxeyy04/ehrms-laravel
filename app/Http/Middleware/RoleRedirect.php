<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->role) {
            switch ($user->role->role_name) {
                case 'Employee':
                    return redirect()->route('employee.dashboard');
                case 'HR Manager':
                    return redirect()->route('hr.dashboard');
                case 'System Admin':
                    return redirect()->route('admin.dashboard');
                case 'Reporting Manager':
                    return redirect()->route('principal.dashboard');
                case 'PSDS':
                    return redirect()->route('psds.dashboard');
                default:
                    abort(403);
            }
        }

        return redirect()->route('auth.login');
    }
}
