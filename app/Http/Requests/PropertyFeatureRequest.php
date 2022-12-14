<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFeatureRequest extends FormRequest
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
          'property_id'=>'required|exists:properties,id',
          'area'=>'required|min:0|numeric',
          'rooms'=>'required|min:0|numeric',
          'bedrooms'=>'required|min:0|numeric',
          'bathrooms'=>'required|min:0|numeric',
          'parking' => 'boolean',
          'swimming_pool' => 'boolean',
          'gym' => 'boolean',
          'central_heating' => 'boolean',
          'alarm' => 'boolean',
          'internet' => 'boolean',
          
          
          
        ];
    }
}
