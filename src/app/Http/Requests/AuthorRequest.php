<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     // 2-4:バリデーション
     // authorizeメソッドは、フォームリクエストの使用許可、不許可を返すメソッドです。trueを返せば許可、falseを返せば不許可となります。利用者の権限やページによってauthorizeのtrueとfalseを使い分けます。通常はtrueにしておきます。
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
            // 2-4:バリデーションルールを設定
            'name' => 'required',
            'age' => 'integer|min:0|max:150',
            'nationality' => 'required'
        ];
    }
    public function messages()
    {
        return [
        'name.required' => '名前を入力してください',
        'age.integer' => '数値を入力してください',
        'age.min' => '0以上の数値を入力してください',
        'age.max' => '150以下の数値を入力してください',
        'nationality.required' => '国籍を入力してください',
        ];
    }

    // 2-4:フォームリクエストでのリダイレクト先指定
    protected function getRedirectUrl()
    {
        return 'verror';
    }

}
