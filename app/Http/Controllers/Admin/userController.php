<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('Admin.user', [
            'title' => 'Daftar User',
        ]);
    }
}
