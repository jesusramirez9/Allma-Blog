<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
    public function rules(){
        $testimonial = $this->route()->parameter('testimonial'); //null

        $rules = [
            'name'=>'required',
            //'slug'=>'required|unique:posts',
            'occupation'=>'required',
            'message'=>'required',
            'status'=>'required|in:1,2',
            'file'=>'image'
        ];

        if($testimonial){
            //$rules['slug'] = 'required|unique:posts,slug,'.$post->id;
        }

        return $rules;
    }
}
