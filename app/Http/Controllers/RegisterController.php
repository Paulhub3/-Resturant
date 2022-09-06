<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return Inertia::render('Register');
    }


    public function store(Request $request)
    {

        $users = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'unique:users,email', 'max:255', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        User::create($users);

        return redirect('/admin-control-login')->with('message', 'Your Account was Successfully Created');
    }

    public function create()
    {
        return Inertia::render('Dashboard');
    }

    public function update(Request $request)
    {
        $user = $request->validate([

            'picture' => ['required', 'max:255'],
        ]);

    }
}
