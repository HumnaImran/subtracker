<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.Index');
        } elseif ($user->hasRole('enterprise') || $user->hasRole('individual')) {
            return redirect()->route('user.index');
        }

        // Default redirection if no roles match
        return redirect('/');
    }
}
