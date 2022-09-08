<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Booked;
use Illuminate\Http\Request;

class BookedController extends Controller
{
    public function index()
    {
        return Inertia::render('Bookpage');
    }

    public function store(Request $request)
    {

        $booked = $request->validate([

            'fullname' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'time' => ['required', 'max:255'],
            'date' => ['required', 'max:255'],
            'person' => ['required', 'max:255'],
            'note' => ['required', 'max:255'],
        ]);

        $booked = new Booked;
        $booked->fullname = $request->fullname;
        $booked->phone = $request->phone;
        $booked->email = $request->email;
        $booked->time = $request->time;
        $booked->date = $request->date;
        $booked->person = $request->person;
        $booked->note = $request->note;
        $booked->save();

        return redirect('/')->with('message', 'Successful! We Will get back to you With an email');
    }


    public function create()
    {
        return Inertia::render('Bookmessage', [
            'booked' => Booked::paginate(4)
        ]);
    }

    public function destroy($id)
    {

        $booked = Booked::findorfail($id)->delete();
        return redirect()->back();
    }
}
