<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $calls = Form::query()
            ->orderByDesc('date')
            ->paginate(10);

        return view('admin', [
            'calls' => $calls,
        ]);
    }

    public function destroy($id)
    {
        $call = Form::where('id', $id)->firstOrFail();

        $call->delete();

        return redirect()->route('dashboard', [
            'id' => $id
        ]);
    }


}
