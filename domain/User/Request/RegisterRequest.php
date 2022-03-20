<?php

namespace Domain\User\Request;

use Domain\User\Contract\AbstractRequest;

class RegisterRequest extends AbstractRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'name'=>'required'
        ];
    }


}