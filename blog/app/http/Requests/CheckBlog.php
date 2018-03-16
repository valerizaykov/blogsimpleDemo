<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckBlog extends FormRequest
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
			'title' => 'required|unique:blogs,title,'.$this->id,
			'description' => 'required',	 
		];
    }
	public function messages()
	{
		return [
			'title.required' => 'The title field is required',
			'title.unique' => 'The title has already been taken:'.$this->id,
			//'password.required'  => 'A password is required',
		];
	}
}
