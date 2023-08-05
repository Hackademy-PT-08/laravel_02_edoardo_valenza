<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Vista profilo
    public function profile () {

        return view('user.profile');

    }

    //Vista quadri dell'utente
    public function pictures () {

        $current_user_id = auth()->user()->id;

        $user_pictures = User::find($current_user_id)->pictures;

        return view('user.pictures', [

            'user_pictures' => $user_pictures

        ]);

    }
}
