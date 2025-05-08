<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ChampionRequest extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'max:100', 'email'],
            'contact_number' => ['required', 'string'],
            'birthdate' => ['required', 'date'],

            'street' => ['required', 'string', 'max:255'],
            'region_id' => ['required', 'exists:regions,id'],
            'province_id' => ['required', Rule::exists('provinces', 'id')->where('region_id', $this->region_id)],
            'city_id' => ['required', Rule::exists('cities', 'id')->where('province_id', $this->province_id)],
            'barangay_id' => ['required', Rule::exists('barangays', 'id')->where('city_id', $this->city_id)],
            'postal_code' => ['required', 'digits:4'],

        ];
    }


    public function messages()
    {
        return [
            'province_id.exists' => 'The selected province does not belong to the chosen region.',
            'city_id.exists' => 'The selected city does not belong to the chosen province.',
            'barangay_id.exists' => 'The selected barangay does not belong to the chosen city.',
        ];
    }


    public function attributes()
    {
        return [
            'barangay_id' => 'barangay',
            'city_id' => 'city/municipality',
            'province_id' => 'province',
            'region_id' => 'region'
        ];
    }
}
