<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {

        $contact = $request->validate([

            'firstname' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'massage' => ['required', 'max:255'],
        ]);

        $contact = new Contact;
        $contact->firstname = $request->firstname;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->massage = $request->massage;
        $contact->save();

        return redirect('/')->with('message', 'Successful! We Will get back to you With an email');
    }


    public function create()
    {
        return Inertia::render('Message', [
            'contact' => Contact::paginate(4)
        ]);
    }

    public function destroy($id)
    {

        $contact = Contact::findorfail($id)->delete();
        return redirect()->back();
    }

}
