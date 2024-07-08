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
        'isAdmin' => true,
        'id' => 1
    ];

    return view('protfolio', compact('user'));
}

}
