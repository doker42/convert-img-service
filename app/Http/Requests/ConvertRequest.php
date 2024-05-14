<?php

namespace App\Http\Requests;

use App\Enums\ImgExtensionEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class ConvertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public function rules(): array
    {
        return [
            'file'         => ['required','file'],
            'extension'    => ['required', Rule::in(ImgExtensionEnum::getValues())],
            'resolution'   => ['required','array', 'min:2', 'max:2'],
            'resolution.*' => ['int'],
        ];
    }


    /**
     * @param Validator $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => __('Failed convert file.'),
            'validation_errors' => $validator->errors()
        ], 422));
    }
}
