<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Breakfast;
use Illuminate\Http\Request;

class BreakfastController extends Controller
{
    public function index()
    {
        return Inertia::render('Breakfast');
    }

    public function store(Request $request)
    {

        $$breakfast = $request->validate([

            'foodname' => ['required', 'max:255'],
            'aboutfood' => ['required', 'max:255'],
            'prize' => ['required', 'max:255'],
            'image' => ['required', 'max:255'],
        ]);

        $breakfast = new Breakfast;
        $breakfast->foodname = $request->foodname;
        $breakfast->aboutfood = $request->aboutfood;
        $breakfast->prize = $request->prize;
        $breakfast->image = $request->image;
        $breakfast->save();

        return redirect('/')->with('message', 'Your Menu Was Successfully Added');
    }
}
