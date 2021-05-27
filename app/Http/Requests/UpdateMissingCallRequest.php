<?php

namespace App\Http\Requests;

use App\Models\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMissingCallRequest extends FormRequest
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
            'from_name' => 'required',
            'to_name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'contact' => 'required',
            'tlf' => 'required',
            'tlf2' => 'nullable',
            'mail' => 'email',
            'mail2' => 'nullable',
            'observaciones' => 'required',
        ];
    }

    public function updateCall(Form $form)
    {
        $form->update([
            'from_name' => $this->from_name,
            'to_name' => $this->to_name,
            'date' => $this->date,
            'time' => $this->time,
            'contact' => $this->contact,
            'tlf' => $this->tlf,
            'tlf2' => $this->tlf2,
            'mail' => $this->mail,
            'mail2' => $this->mail2,
            'observaciones' => $this->observaciones,
        ]);
    }
}
