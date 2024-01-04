<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'site_title' => 'required|string|min:3|max:255',
            'site_tagline' => 'max:255',
            'site_description' => 'max:255',
            'site_keywords' => 'max:255',
            'site_url' => 'required|url',
            'posts_per_page' => 'required|integer'
        ];
    }
}
