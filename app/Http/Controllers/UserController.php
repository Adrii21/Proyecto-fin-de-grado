<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = Form::query()
            ->orderByDesc('date')
            ->paginate(15);

        return view('user.forms', [
            'calls' => $calls,
        ]);
    }

    public function show(User $user)
    {
        return view('user.index', compact('user'));
    }

    public function destroy($id)
    {
        $call = Form::where('id', $id)->firstOrFail();

        $call->forceDelete();

        return redirect()->route('admin', [
            'id' => $id
        ]);
    }

}
