<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * @return mixed
     */
    public function rules()
    {
        return Config::get('boilerplate.reset_password.validation_rules');
    }

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
