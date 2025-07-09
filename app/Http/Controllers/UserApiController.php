<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserApi;

class UserApiController extends Controller
{
    public function show($id)
    {
        $user = UserApi::find($id);

        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }
    }
}
