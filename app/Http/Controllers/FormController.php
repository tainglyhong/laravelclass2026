<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'major' => 'required'
        ]);

        $name = $request->name;
        $email = $request->email;
        $major = $request->major;

        return view('form-result', compact(
            'name',
            'email',
            'major'
        ));
    }
}
