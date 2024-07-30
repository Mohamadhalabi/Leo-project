<?php

namespace App\Http\Requests\Backend\Currency;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return permission_can('create currency', 'admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        foreach (get_languages() as $lang){
            if ($lang->is_default){
                $rules['name_'.$lang->code] = 'required|min:3';
            }
        }
        $rules['value'] = 'required|numeric|min:0';
        $rules['code'] = 'required';
        $rules['status'] = '';
        return $rules;
    }
}
