<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gejala;
use App\Models\User;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $DataAKun = User::where('role', 'user')->count();
        $DataGejala = gejala::count();
        return view('Admin.home', [
            'title' => 'Home Admin',
            'DataAKun' => $DataAKun,
            'DataGejala' => $DataGejala
        ]);
    }
}
