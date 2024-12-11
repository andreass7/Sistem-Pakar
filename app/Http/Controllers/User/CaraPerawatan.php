<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaraPerawatan extends Controller
{
    public function index()
    {
        return view('User.CaraPerawatan');
    }
}
