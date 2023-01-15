<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DisposableEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($failMessage = null)
    {
        $this->failMessage = $failMessage;
        $this->disposableEmailDomain = [
            'mailinator.com', 
            'yopmail.com', 
            'falltrack.net', 
            'tmmbt.com', 
            'explodemail.com'
        ];
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
        $domain = NULL;
        $emailArr = explode('@', $value);
        if (!empty($emailArr) && count($emailArr) >= 1) {
            $domain = $emailArr[1];
        }
        return !in_array($domain, $this->disposableEmailDomain);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->failMessage ?? 'Email not acceptable.';
    }
}
