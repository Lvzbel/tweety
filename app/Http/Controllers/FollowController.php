<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowController extends Controller
{
    public function store(User $user)
    {
        auth()
            ->user()
            ->follow($user);

        return back();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}