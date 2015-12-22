<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShopItemRequest extends Request
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
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric|min:1',
            'item_id' => 'required|numeric|min:1',
            'count' => 'required|numeric|min:1',
            'max_count' => 'required|numeric|min:1',
            'protection_type' => 'numeric|min:0',
            'expire_date' => 'numeric',
            'discount' => 'numeric',
            'shareable' => 'required',
            'description' => 'required|min:20',
        ];
    }
}
