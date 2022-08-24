<?php

namespace App\Http\Controllers\Atmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('atmin.users.index', compact('users'));
    }

    public function viewuser($id)
    {
        $users = User::find($id);
        return view('atmin.users.view', compact('users'));
    }
}
