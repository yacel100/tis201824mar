<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class ProyCreateRequest extends Request
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
            // 'titulo' => 'required',
            // 'autor' => 'required',
            // 'tutor' => 'required',
            // 'namemodal' => 'required',
            // 'namecarre' => 'required',
            // 'nameare' => 'required',
            // 'path' => 'required',
            

        ];
    }
}
