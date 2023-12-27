<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($code)
    {
        $user = User::where('code', $code)->first();
        return view('landing.dashboard', compact('user'));
    }
}
