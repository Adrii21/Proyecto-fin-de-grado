<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMissingCallRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(CreateMissingCallRequest $request)
    {
        $request->createCall();

        return redirect()->route('home');
    }
}
