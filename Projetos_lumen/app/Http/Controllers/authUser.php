<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use App\Models\user;
class authUser extends Controller
{
    public function autenticationUser()
    {
        $usuarios = user::all();
        return response()->json($usuarios);
    }
}
