<?php

namespace App\Http\Requests\Admin\Security;

use Illuminate\Foundation\Http\FormRequest;

class PermissionUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return isAdmin();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:permissions,name,'. $this->permission->id.',id',
            'guard_name' => 'required|string'
        ];
    }

    public function prepareForValidation(): void
    {
        if (!$this->input('guard_name')) {
            $this->merge(['guard_name' => 'web']);
        }
    }
}
