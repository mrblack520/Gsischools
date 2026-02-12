<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class RegisterUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('POST')) {
            return [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|max:255|unique:users,email',
                'date_of_birth' => 'required|date',
                'gender' => 'required|in:0,1,3',
                'password' => 'required',

                // // 2nd section
                // 'status' => 'required',
                // 'goals' => 'required',
                // 'languages' => 'required',
                // 'location' => 'required|exists:countries,id',
                // 'joinned_as' => 'required|in:0,1,3',

                // // terms and acceptance
                // 'community_updates' => 'required|boolean',
                // 'terms_accepted' => 'required|boolean',
            ];
        }

        if ($this->isMethod('PATCH')) {
            return [
                'first_name' => 'sometimes|string|max:255',
                'last_name' => 'sometimes|string|max:255',
                'email' => 'sometimes|max:255|unique:users,email',
                'date_of_birth' => 'sometimes|date',
                'gender' => 'sometimes|in:0,1,3',
                'password' => 'sometimes',

            //     // 2nd section
            //     'status' => 'sometimes',
            //     'goals' => 'sometimes',
            //     'languages' => 'sometimes',
            //     'location' => 'sometimes|exists:countries,id',
            //     'joinned_as' => 'sometimes|in:0,1,3',

            //     // terms and acceptance
            //     'community_updates' => 'sometimes|boolean',
            //     'terms_accepted' => 'sometimes|boolean',
            ];
        }
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => 'Validation failed.',
            'errors' => $validator->errors()
        ], 422));
    }
}
