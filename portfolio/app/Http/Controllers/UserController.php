<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // In your controller
public function show()
{
    $user = [
        'name' => 'John Doe',
        'isAdmin' => true
    ];

    return view('home', compact('user'));
}

}
