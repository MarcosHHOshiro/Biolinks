<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /**
         * @var \App\Models\User $user
         */
        $user = auth()->user();
        dump(
            $user->links()
                ->where('name', '=', 'YouTube')
                ->get()
        );

        return view('dashboard');
    }
}
