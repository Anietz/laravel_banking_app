<?php

namespace Domain\Contracts;

use Illuminate\Contracts\Validation\Validator;


interface RequestInterface
{
    public function authorize();

    public function wantsJson();

    public function failedValidation(Validator $validator);

}