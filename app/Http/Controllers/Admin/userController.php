<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('Admin.user', [
            'title' => 'Daftar User',
            'users' => $users
        ]);
    }
}
