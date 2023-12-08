<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
        // return false;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string'], // 文字列
            'price' => ['required', 'inteder', 'min:0', 'max:10000'], // 整数 最小値:0 最大値:10万
        ];
    }
}
