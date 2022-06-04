<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();

        return view('admin.users',['users' => $users]);
    }
}
