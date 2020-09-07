<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':{
                return [
                    'title' =>['required','max:50','unique:information'],
                    'parent_id' =>['nullable','integer'],
                    'status' =>['required','boolean'],
                    'sort' =>['required','integer'],
                    'path'=>['nullable','image','max:1024'],
                    'sub_title'=>['nullable','max:100'],
                    'auth'=>['nullable','max:30'],
                    'keywords'=>['nullable','max:100'],
                    'seo_title'=>['nullable','max:100'],
                    'meta'=>['nullable','max:200'],
                ];
            }

            case 'PUT':{
                return [
                    'title' =>['required','max:50'],
                    'parent_id' =>['nullable','integer'],
                    'status' =>['required','boolean'],
                    'sort' =>['required','integer'],
                    'path'=>['nullable','images','max:1024'],
                    'sub_title'=>['nullable','max:100'],
                    'auth'=>['nullable','max:30'],
                    'keywords'=>['nullable','max:100'],
                    'seo_title'=>['nullable','max:100'],
                    'meta'=>['nullable','max:200'],
                    'id' =>['required','integer']
                ];
            }

            case 'DELETE':{
                return [];
            }

            default:{
                return [];
            }

        }
    }

    public function messages()
    {
        return [
            'title.required'=>'请输入分类名称',
            'title.max'=>'分类名称最大长度为50位',
            'title.unique'=>'分类名称已存在',
            'parent_id.integer'=>'所属分类必须为整数',
            'status.required'=>'请选择状态',
            'status.boolean'=>'状态参数错误',
            'sort.required'=>'请选择排序',
            'sort.integer'=>'排序必须为整数',
            'id.required'=>'参数错误',
            'id.integer'=>'参数错误',
            'path.image'=>'上传的不是图片',
            'path.max'=>'上传的图片最大为1M',
            'sub_title.max'=>'副标题最大长度为100位',
            'auth.max'=>'作者最大长度为30位',
            'keywords.max'=>'关键字最大长度为100位',
            'seo_title.max'=>'seo最大长度为100位',
            'meta.max'=>'meta最大长度为200位',
        ];
    }
}
