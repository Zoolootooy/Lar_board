<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //true - everybody
        //false - only authorised users
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
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:15|max:1500',
            'country_id' => 'required',
            'phone' => 'required|regex:/[0-9,(,),\+,-]+[^_]$/',
            'email' => 'required',
            'end_date' => 'required|date|after:tomorrow',
            'photo' => 'nullable|mimes:jpeg,bpm,png,jpg'
        ];
    }
}
