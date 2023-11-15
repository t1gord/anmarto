<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class ProjectRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'limit' => 'numeric',
            'offset' => 'numeric',
        ];
    }
}
