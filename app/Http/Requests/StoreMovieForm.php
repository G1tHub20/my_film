<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //falseから変更
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'movie_id' => 'required|integer',
            'rating' => 'required|integer|digits:1',
            'comment' => 'required|string|max:1000',
            'tag_id' => 'integer|max:10',
            // 'newTag' => 'string|max:20|unique:tags,tag' //配列で来るのでこのバリデーションはできない
            'newTag.*' => 'nullable|string|max:20|unique:tags,tag' //.*でいけると思います
            // https://qiita.com/map_corn/items/b3ad27bf3e1a5532c8c7
        ];
    }
}
