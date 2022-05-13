<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'email' => ['required', 'email'],
            'topic' => ['nullable', 'string'],
            'message' => ['required', 'string']
        ];
    }
}
