<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyRequest extends FormRequest
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
            'content' => 'required|string|min:5',
            'user_id' => 'required|int',
            'comment_id' => 'required|int'
        ];
    }

    public function  attributes()
    {
        return [
            'comment_id' => 'comment',
            'user_id' => 'user'
        ];
    }
}
