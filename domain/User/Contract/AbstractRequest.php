<?php

namespace Domain\User\Contract;

use Illuminate\Foundation\Http\FormRequest;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Domain\Contracts\RequestInterface;


class AbstractRequest extends FormRequest implements RequestInterface
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function wantsJson()
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
    $errors = (new ValidationException($validator))->errors();

    throw new HttpResponseException(response()->json([
        'success' => false,
        'errors' => $errors,
    ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
   }
}