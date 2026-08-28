<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => ['required', 'string', 'max:50'],
            'role' => ['required', 'string', 'max:25'],
            'platform' => ['required', 'string', 'max:25'],
            'description' => ['required', 'string'],
            'apply_at' => ['required', 'date'],
            'status' => ['required', 'in:Send CV,Viewed,Interview HRD,Interview User,Success,Failed'],
            'link' => ['required', 'string', 'max:128'],
        ];
    }
}
