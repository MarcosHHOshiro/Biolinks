<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

/**
 * Handle Login Request
 *
 * @property-read string $email
 * @property-read string $password
 */
class MakeLoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    public function tryToLogin(): bool
    {

        if ($user = User::query()->where('email', '=', $this->email)->first()) {

            if (Hash::check($this->password, $user->password)) {
                auth()->guard()->login($user);
                return true;
            }
        }

        return false;

    }
}
