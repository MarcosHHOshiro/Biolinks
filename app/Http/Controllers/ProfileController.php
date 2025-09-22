<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /**
         * @var \App\Models\User $user
         */
        $user = auth()->user();

        if ($file = $request->photo) {
            // apaga a foto antiga se existir
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            $path = $file->store('photos', 'public');
            $user->photo = $path;
        }

        $user->name = $request->name;
        $user->description = $request->description;
        $user->handler = $request->handler;
        $user->save();

        // $user->fill($request->validated())->save();

        return back()
            ->with('message', 'Profile atualizado com sucesso.');
    }
}
