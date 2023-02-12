<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($failMessage = null)
    {
        $this->failMessage = $failMessage;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9!#\?\^\[\]{}+=._-]{8,20}$/', $value) && preg_match('/(?=.*[A-Za-z])/', $value) && (preg_match('/(?=.*\d)/', $value) || !preg_match('/^[A-Za-z0-9]+$/', $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->failMessage ?? 'Insecure password.';
    }
}
