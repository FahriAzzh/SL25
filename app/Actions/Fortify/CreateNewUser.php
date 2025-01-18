<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'telp' => ['required', 'integer', 'max:255'],
            'lomba' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'form' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'transfer' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'tel' => $input['tel'],
            'name' => $input['name'],
            'lomba' => $input['lomba'],
            'form' => isset($input['form']) ? file_get_contents($input['form']->getRealPath()) : null,
            'transfer' => isset($input['transfer']) ? file_get_contents($input['transfer']->getRealPath()) : null,
        ]);
    }
}
