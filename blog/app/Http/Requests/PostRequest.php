<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $post = $this->route()->parameter('post');

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'postImage' => 'image'
        ];

        if($post){
            $rules['slug'] = 'required|unique:posts,slug,'.$post->id;
        }
        if($this->status == 2){
            $rules = array_merge($rules, [
                'title' => 'required',
                'slug' => ['required',Rule::unique('posts')->ignore($post->id)],
                'status' => 'required|in:1,2',
                'extract' => 'required',
                'content' => 'required'
            ]);

            
        }
        return $rules;
    }
}
