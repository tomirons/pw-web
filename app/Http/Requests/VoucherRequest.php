<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VoucherRequest extends Request
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
            'code' => 'required',
            'item_name' => 'required',
            'item_id' => 'required|numeric|min:1',
            'item_count' => 'required|numeric|min:1',
            'item_proc_type' => 'required|numeric|min:0',
        ];
    }
}
