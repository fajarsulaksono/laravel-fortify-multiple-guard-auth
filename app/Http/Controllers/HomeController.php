<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->guard = '';
        $this->guard_type = '';

        foreach (array_keys(config('auth.guards')) as $guard) {

            if (auth()->guard($guard)->check()) {
                $this->guard = $guard;
            }
        }

        if ($this->guard == 'user_frontend') {
            $this->guard_type = 'frontend';
        } else if ($this->guard == 'user_backend') {
            $this->guard_type = 'backend';
        }
    }

    public function index()
    {

        return view('home');
    }

    public function frontendHome()
    {
        $guard_type = $this->guard_type;
        $guard = $this->guard;

        return view('home', compact('guard_type', 'guard'));
    }

    public function backendHome()
    {
        $guard_type = $this->guard_type;
        $guard = $this->guard;

        return view('home', compact('guard_type', 'guard'));
    }
}
