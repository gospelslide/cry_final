<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DonationValidationRequest extends Request
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
            'item' => 'required',
            'quantity' => 'required|numeric|min:1',
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'pincode'  => 'required|numeric:6',
        ];
    }
}
