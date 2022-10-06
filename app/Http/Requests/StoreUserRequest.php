<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'phone'=>'required|string',
            'father_name'=>'required|string',
            'father_phone'=>'required|string',
            'interest'=>'required',
            'cnic'=>'digits:13',
            'gender'=>'required',
            'email'=>'required|email',
            'institute'=>'required',
            'city'=>'required',
            'education'=>'required',
            'role' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Name is required',
            'phone.required'=>'Phone is required',
            'father_name.required'=>'Father Name is required',
            'father_phone.required'=>'Father Phone is required',
            'interest.required'=>'Interest is required',
            'cnic.required'=>'CNIC is required',
            'gender.required'=>'Gender is required',
            'email.required'=>'Email is required',
            'institute.required'=>'Institute is required',
            'city.required'=>'City is required',
            'education.required'=>'Education is required',
            'role.required' => 'Role is required',
        ];
    }
}
