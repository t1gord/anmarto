<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * @throws HttpResponseException
     */
    public function failedValidation(Validator $validator)
    {
        $data = ['error' => ['message' => $validator->errors(), 'type' => 'validator']];

        throw new HttpResponseException(response()->json($data, 422));
    }
}
