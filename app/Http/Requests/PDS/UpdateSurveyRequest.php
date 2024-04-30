<?php

namespace App\Http\Requests\PDS;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'answer_1' => [
                'nullable',
                'boolean'
            ],
            'answer_2' => [
                'nullable',
                'boolean'
            ],
            'answer_2_detail' => [
                'nullable',
                'required_if:answer_2,1',
                'string'
            ],
            'answer_3' => [
                'nullable',
                'boolean'
            ],
            'answer_3_detail' => [
                'nullable',
                'required_if:answer_3,1',
                'string'
            ],
            'answer_4' => [
                'nullable',
                'boolean'
            ],
            'answer_4_detail' => [
                'nullable',
                'required_if:answer_4,1',
                'string'
            ],
            'answer_4_date_filed' => [
                'nullable',
                'required_if:answer_4,1',
                'date'
            ],
            'answer_4_status' => [
                'nullable',
                'required_if:answer_4,1',
                'string'
            ],
            'answer_5' => [
                'nullable',
                'boolean'
            ],
            'answer_5_detail' => [
                'nullable',
                'required_if:answer_5,1',
                'string'
            ],
            'answer_6' => [
                'nullable',
                'boolean'
            ],
            'answer_6_detail' => [
                'nullable',
                'required_if:answer_6,1',
                'string'
            ],
            'answer_7' => [
                'nullable',
                'boolean'
            ],
            'answer_7_detail' => [
                'nullable',
                'required_if:answer_7,1',
                'string'
            ],
            'answer_8' => [
                'nullable',
                'boolean'
            ],
            'answer_8_detail' => [
                'nullable',
                'required_if:answer_8,1',
                'string'
            ],
            'answer_9' => [
                'nullable',
                'boolean'
            ],
            'answer_9_detail' => [
                'nullable',
                'required_if:answer_9,1',
                'string'
            ],
            'answer_10' => [
                'nullable',
                'boolean'
            ],
            'answer_10_detail' => [
                'nullable',
                'required_if:answer_10,1',
                'string'
            ],
            'answer_11' => [
                'nullable',
                'boolean'
            ],
            'answer_11_id' => [
                'nullable',
                'required_if:answer_11,1',
                'string'
            ],
            'answer_12' => [
                'nullable',
                'boolean'
            ],
            'answer_12_id' => [
                'nullable',
                'required_if:answer_12,1',
                'string'
            ],
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'answer_1.required' => 'Please select an option for Answer 1.',
    //         'answer_1.boolean' => 'Invalid value for Answer 1.',
    //         'answer_1_detail.required_if' => 'Please provide details if Yes.',
    //     ];
    // }
}
