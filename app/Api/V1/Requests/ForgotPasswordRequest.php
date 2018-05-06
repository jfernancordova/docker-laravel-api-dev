<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    /**
     * @return mixed
     */
    public function rules()
    {
        return Config::get('boilerplate.forgot_password.validation_rules');
    }

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
