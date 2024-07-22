<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\HrUserinfo;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{

    public function login()
    {
        return  view('auth.signin');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = HrUserInfo::where(function ($query) use ($credentials) {
            $query->where('personal_email', $credentials['email'])
                ->orWhere('deped_email', $credentials['email']);
        })->first();

        if ($user && Auth::attempt(['personal_email' => $user->personal_email, 'password' => $credentials['password']], $request->has('remember'))) {
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
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors(['error' => 'These credentials do not match our records.']);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('auth.login'));
    }
}
