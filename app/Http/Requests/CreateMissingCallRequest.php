<?php

namespace App\Http\Requests;

use App\Models\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class CreateMissingCallRequest extends FormRequest
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
            'from_name' => 'string|required',
            'to_name' => 'string|required',
            'date' => 'date|required',
            'time' => 'required',
            'asunto' => 'string|required',
            'contact' => 'string|required',
            'tlf' => 'required|integer',
            'tlf2' => 'integer|required',
            'mail' => 'email|required',
            'mail2' => 'email|required',
            'observaciones' => 'nullable',

        ];
    }

    public function createCall()
    {
        DB::transaction(function () {
           Form::create([
               'from_name' => $this->from_name,
               'to_name' => $this->to_name,
               'date' => $this->date,
               'time' => $this->time,
               'asunto' => $this->asunto,
               'contact' => $this->contact,
               'tlf' => $this->tlf,
               'tlf2' => $this->tlf2,
               'mail' => $this->mail,
               'mail2' => $this->mail2,
               'observaciones' => $this->observaciones,
           ]);
        });
    }
}
