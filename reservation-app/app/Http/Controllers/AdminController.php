<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function user()
    {
        $data = User::all();

        return view('admin.user', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'User is successfully deleted.');
    }
}
