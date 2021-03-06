<?php

namespace App\Http\Requests;

class IndividualObjectiveRequest extends FormRequest
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
            'parent_key_result_id' => 'required',
            'objective.subject' => 'required',
            'objective.description' => 'required',
            'key_result.subject' => 'required',
            'key_result.description' => 'required',
            'key_result.target_value' => 'required|numeric',
            'key_result.target_unit' => 'required',
        ];
    }

    public function data()
    {
        $attrs = parent::data();
        $attrs['objective']['parent_key_result_id'] = $attrs['parent_key_result_id'];
        unset($attrs['parent_key_result_id']);

        return $attrs;
    }
}
