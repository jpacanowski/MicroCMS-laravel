<?php

namespace App\Http\Requests;

use App\Enums\PostStatus;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        return match($this->method()) {
            'POST' => $this->store(),
            'PUT' => $this->update(),
            'DELETE' => $this->destroy()
        };
    }

    protected function store(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
            'status' => [Rule::enum(PostStatus::class)],
            'category_id' => 'required|integer'
        ];
    }

    protected function update(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
            'status' => [Rule::enum(PostStatus::class)],
            'category_id' => 'required|integer'
        ];
    }

    protected function destroy(): array
    {
        return [
            'id' => 'required|integer|exists:posts,id'
        ];
    }
}
