<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipe extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,webp,svg|max:2028',
            'time_required' => 'required',
            'servings' => 'required',

        ];
    }

    public function data()
    {
        return [
            'ingredients' => $this->input('ingredient'),
            'directions' => $this->input('direction'),
            'tags' => $this->input('tag'),
        ];
    }
}
