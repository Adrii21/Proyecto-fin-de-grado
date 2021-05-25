<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMissingCallRequest;
use App\Http\Requests\UpdateMissingCallRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('formulario', new Form );
    }

    public function store(CreateMissingCallRequest $request)
    {
        $request->createCall();

        return redirect()->route('home');
    }

    public function edit(Form $form)
    {
        return view('formedit', compact('form'));
    }

    public function update(UpdateMissingCallRequest $request, Form $form)
    {
        $request->updateCall($form);

        return redirect()->route('home');
    }
}
