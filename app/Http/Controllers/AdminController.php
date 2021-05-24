<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMissingCallRequest;
use App\Models\Form;

class AdminController extends Controller
{
    public function index()
    {
        $calls = Form::query()
            ->orderByDesc('date')
            ->paginate(15);

        return view('admin.index', [
            'calls' => $calls,
        ]);
    }

    public function destroy($id)
    {
        $call = Form::where('id', $id)->firstOrFail();

        $call->forceDelete();

        return redirect()->route('admin.index', [
            'id' => $id
        ]);
    }


}
