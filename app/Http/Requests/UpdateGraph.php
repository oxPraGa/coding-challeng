<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGraph extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:graphs',
            'name' => 'nullable|unique:graphs,name,'.$this->route('id').'|max:255',
            'description' => 'nullable|string',
        ];
    }

    public function all($keys = null){
        $data = parent::all($keys);
        $data['id'] = $this->route('id');
        return $data;
    }
}
