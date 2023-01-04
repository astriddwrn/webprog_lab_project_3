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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, 
        ['start_date' => date('01-01-1900')], 
        [
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'email' => ['unique:users'],
            'password' => ['required','min:8', 'alpha_num'],
            'password_confirm' => ['required','same:password'],
            'gender' => ['required'],
            'date_of_birth' => ['required', 'date', 'before: today', 'after:start_date'],
            'country' => ['required'],
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'gender' => $input['gender'],
            'date_of_birth' => $input['date_of_birth'],
            'country' => $input['country']
        ]);
    }
}
