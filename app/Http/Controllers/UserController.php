<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
 
        $name = $user->name;

        return $name;
    }

    public function setMutaturValue()
    {
        $user = User::find(1);
 
        $user->name = 'Sally';

        return "Done";
    }

    public function casting()
    {
        $user = User::find(1);

        if ($user->name) {
            return $user->name;
        }
    }
}
