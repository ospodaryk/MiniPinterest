<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Authorisation;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function start()
    {
        return view('firstpage');
    }
    public function home()
    {
        return view('home');
    }
    public function create()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:1|max:50',
            'picc' => 'required'
        ]);
        $review = new Contact();
        $review->title = $request->input('title');
        $review->file = $request->file('picc');

        $a = "storage/images/";
        $a .= $request->file('picc')->getClientOriginalName();
        $review->path = $a;
        $review->name = $request->file('picc')->getClientOriginalName();
        $request->file('picc')->storeAs('public/images/', $request->file('picc')->getClientOriginalName());

        $review->save();
        if ($review->save() === true) {
            return redirect()->route('success_send');

        } else {
            return redirect()->route('upload');
        }
    }

    public function success_send()
    {
        return view('success_send');
    }

    public function user()
    {
        $reviews = new Contact();
        return view('user', ['reviews' => $reviews->all()]);
    }

    public function search(Request $request)
    {
        $f = $request->validate([
            'searchtext' => 'required|min:1|max:50'
        ]);
        $reviews = new Contact();
        return view('search', ['reviews' => $reviews->all()]);
    }

    public function data()
    {
        $reviews = new Contact();
        return view('data', ['reviews' => $reviews->all()]);
    }

    public function autho1()
    {
        $reviews = new Contact();
        return view('auto1');
    }
    public function sucauth()
    {
        return view('sucauth');
    }
    public function autho2(Request $request)
    {
        $valid = $request->validate([
            'name'=>'required|min:1|max:50',
            'login' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:50'
        ]);
        $check = new Authorisation();
        return view('auto2', ['reviews' => $check->all()]);
    }
    public function autho_2(Request $request)
    {
        $valid = $request->validate([
            'name'=>'required|min:1|max:50',
            'login' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:50'
        ]);
    }

    public function sig1()
    {
        return view('sign_1');
    }

    public function sig2(Request $request)
    {
        $valid = $request->validate([
            'siglogin'=>'required|min:1|max:50',
            'sigpassword' => 'required|min:5|max:50',
        ]);
        $check = new Authorisation();
        return view('sign_2', ['reviews' => $check->all()]);
    }

}
