<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateRequest extends FormRequest
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
        'name' => 'required|string|max:191',
        'email' => 'required|email|max:191|unique:admins',
        'mobile' => 'required|string|max:15',
        'password' => 'required|string|min:8|confirmed',
        'admin_id' => 'required'
        ];
    }
}
