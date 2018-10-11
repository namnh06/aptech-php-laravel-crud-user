<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserAPIController extends Controller
{
    //
    function index()
    {
        $users = User::all();
        return response(['message' => 'welcome to aptech php course', 'users' => $users]);
    }
}
