<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class ApplicationFeedbackRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'projects' => 'required|array',
            'budget' => 'required|string',
            'workingHours' => 'required|string',
            'name' => 'required|string',
            'contact' => 'required|string',
            'comment' => 'string',
        ];
    }
}
