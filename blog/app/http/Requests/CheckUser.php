<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
		//$user = users::find($this->route('/store'));
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
			'username' => 'required|unique:users|max:50',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',
		];
    }
	public function messages()
	{
		return [
			'username.required' => 'A username is required(vz)',
			'password.required'  => 'A password is required',
		];
	}
}
