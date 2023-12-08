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
            'price' => ['required', 'integer', 'min:0', 'max:100000'], // 整数 最小値:0 最大値:10万
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('messages.item_name'),
            'price' => __('messages.price'),
        ];
    }

    // エラーメッセージ
    public function messages() {
        return [
            // 'name.required' => '商品名を入力してください',
            // 'price.required' => '価格を入力してください',
            // 'price.integer' => '価格を数値で入力してください',
            // 'price.min' => '価格を数値で入力してください',
        ];
    }
}
