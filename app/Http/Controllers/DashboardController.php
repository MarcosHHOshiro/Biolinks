<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /**
         * @var \App\Models\User $user
         */
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()->orderBy('sort')->get(),
        ]);
    }
}
