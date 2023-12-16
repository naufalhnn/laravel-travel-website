<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TravelPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'about' => 'required|string',
            'featured_event' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'foods' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'duration' => 'required|string|max:10',
            'type' => 'in:FAMILY TRIP,OPEN TRIP,SOLO TRIP|string',
            'price' => 'required|integer',
        ];
    }
}
