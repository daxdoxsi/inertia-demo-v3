<?php

namespace App\Http\Controllers\Dmm;

use App\Models\User;
use Inertia\Inertia;

class UserController
{
    public function show(User $user): \Inertia\Response
    {
        return Inertia::render('User/Show', [
            'user' => $user
        ]);
    }
}
