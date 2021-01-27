<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:32'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'The email must be a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be 8-32 characters',
            'password.max' => 'Password must be 8-32 characters',
        ];
    }
}
