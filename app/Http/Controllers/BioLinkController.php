<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BioLinkController extends Controller
{
    public function __invoke(User $user)
    {

        // $user = User::where('handler', $handler)->firstOrFail();

        return view('bio-links', compact('user'));
    }
}
