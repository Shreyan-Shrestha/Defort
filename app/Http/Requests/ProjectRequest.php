<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image'=>['nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10048'],
            'projectname'=>['required|string|max:255'],
            'clientname'=>['nullable|string|max:255'],
            'status'=>['required|boolean'],
            'description'=>['required|string|max:3000'],
            'category'=>['required|string|max:30'],
            'location'=>['required|string|max:80'],
            'startdate'=>['nullable|date_format:d-m-Y'],
            'completeddate'=>['nullable|date_format:d-m-Y']

        ];
    }
}
