<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $breakfast = Menu::where('category', 'breakfast')->get();
        $lunch = Menu::where('category', 'lunch')->get();
        $dinner = Menu::where('category', 'dinner')->get();
        $drinks = Menu::where('category', 'drinks')->get();
        return Inertia::render('Home', compact('breakfast', 'lunch', 'dinner', 'drinks'));
    }

}
