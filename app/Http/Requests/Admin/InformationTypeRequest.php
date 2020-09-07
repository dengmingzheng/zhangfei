<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InformationTypeRequest extends FormRequest
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
                    'name' =>['required','max:100','unique:information_types'],
                    'parent_id' =>['nullable','integer'],
                    'status' =>['required','boolean'],
                    'sort' =>['required','integer']
                ];
            }

            case 'PUT':{
                return [
                    'name' =>['required','max:100'],
                    'parent_id' =>['nullable','integer'],
                    'status' =>['required','boolean'],
                    'sort' =>['required','integer'],
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
            'name.required'=>'请输入分类名称',
            'name.max'=>'分类名称最大长度为100位',
            'name.unique'=>'分类名称已存在',
            'parent_id.integer'=>'所属分类必须为整数',
            'status.required'=>'请选择状态',
            'status.boolean'=>'状态参数错误',
            'sort.required'=>'请选择排序',
            'sort.integer'=>'排序必须为整数',
            'id.required'=>'参数错误',
            'id.integer'=>'参数错误',
        ];
    }
}
