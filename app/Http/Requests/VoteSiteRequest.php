<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VoteSiteRequest extends Request
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
            'name' => 'required',
            'link' => 'required|url',
            'type' => 'required',
            'reward_amount' => 'required|numeric|min:1',
            'hour_limit' => 'required|numeric|min:1'
        ];
    }
}
