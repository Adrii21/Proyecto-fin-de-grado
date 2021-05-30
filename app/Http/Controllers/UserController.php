<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $calls = Form::query()
            ->orderByDesc('date')
            ->paginate();

        return view('user.forms', [
            'calls' => $calls,
        ]);
    }

    public function show()
    {
        return view('user.index');
    }

    public function destroy($id)
    {
        $call = Form::where('id', $id)->firstOrFail();

        $call->forceDelete();

        return redirect()->route('user.forms', [
            'id' => $id
        ]);
    }


}
