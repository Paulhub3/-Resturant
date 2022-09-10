<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Inertia\Inertia;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    public function store(Request $request)
    {

        $menu = $request->validate([

            'foodname' => ['required', 'max:255'],
            'aboutfood' => ['required', 'max:255'],
            'category' => ['required', 'max:255'],
            'prize' => ['required', 'max:255'],
            'image' => ['required'],
            'picture' => ['required'],
        ]);

        $menu = new Menu;
        $menu->foodname = $request->foodname;
        $menu->aboutfood = $request->aboutfood;
        $menu->category = $request->category;
        $menu->prize = $request->prize;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $menu['image'] = $filename;
        }
        $menu->save();
        return redirect('/menu-table')->with('message', 'You have successfully created a menu');
    }

    public function create()
    {
        return Inertia::render('Menupage', [
            'menu' => Menu::paginate(4)
        ]);
    }

    public function destroy($id)
    {

        $menu = Menu::findorfail($id)->delete();
        return redirect()->back();
    }
}
