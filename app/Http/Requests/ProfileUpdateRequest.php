<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'country' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'presentation' => ['string', 'max:255'],
            'artistic_process' => ['string', 'min:5', 'max:255'],
            'picture' => ['nullable', 'image'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
