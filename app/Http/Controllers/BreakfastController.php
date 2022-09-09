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

        $breakfast = $request->validate([

            'foodname' => ['required', 'max:255'],
            'aboutfood' => ['required', 'max:255'],
            'prize' => ['required', 'max:255'],
            'image' => ['required'],
        ]);

        $breakfast = new Breakfast;
        $breakfast->foodname = $request->foodname;
        $breakfast->aboutfood = $request->aboutfood;
        $breakfast->prize = $request->prize;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $breakfast['image'] = $filename;
        }
        $breakfast->save();
        return redirect('/breakfast-table');
    }

    public function create()
    {
        return Inertia::render('Adminbreakfast', [
            'breakfast' => Breakfast::paginate(4)
        ]);
    }

    public function destroy($id)
    {

        $breakfast = Breakfast::findorfail($id)->delete();
        return redirect()->back();
    }
}
