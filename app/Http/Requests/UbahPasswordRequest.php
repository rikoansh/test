<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UbahPasswordRequest extends Request
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
           'password_lama'=>'required',
           'password'=>'confirmed', 
           ];
            
    }
    public function forbiddenResponse()
    {
        return response()->view('errors.503');
    }
}
