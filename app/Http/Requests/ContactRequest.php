<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:255|',
            'phone_number' => 'required',
            'email' => 'required|email',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'phone_number.required' => 'Phone Number is required',
            'email.required' => 'Email is required',
            'email.email' => 'The email must be a valid email address'
        ];
      
    }
}
