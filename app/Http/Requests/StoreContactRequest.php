<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'organization' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'content' => 'required',
        ];
    }

    /**
     *
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'organization.required' => '단체명을 입력해 주세요',
            'name.required' => '담당자명을 입력해 주세요',
            'email.required' => 'Email을 입력해 주세요',
            'email.email' => 'Email 형식에 맞게 입력해 주세요',
            'contact.required' => '연락처를 입력해 주세요',
            'content.required' => '문의내용을 입력해 주세요',
        ];
    }
}
