<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
        $id = $this->request->get('id');
        return [

            'name' => 'required|min:2|max:30|required',
            'email' => 'required|unique:customers,email,' . $id . ',id',
            'dob' => 'required'
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'khong duoc de trong',
            'name.min' => 'Name size must be between 2 and 3    0!',
            'name.max' => 'Name size must be between 2 and 30!',
            'email.required' => 'We need to know your email!',
            'email.unique' => 'Email already exists!',
            'dob.required' => 'We need to know your birthday!'
        ];
    }
}
