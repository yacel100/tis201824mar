<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class AreaUpdateRequest extends Request
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
            'nameare' => 'required',
            'namesubare'=>'required',
            // 'email' => 'required|unique:users',
            // 'password' => 'required',
        ];
    }
  }
