<?php

namespace App\Http\Controllers\Dmm;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UserController
{
    public function show(User $user): Response
    {
        return Inertia::render('User/Show', [
            'user' => $user,
        ]);
    }
}
