<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('isAdmin', false)
                     ->where('isSuperAdmin', false)
                     ->paginate(10); // Paginate with 10 users per page

        return view('super-admins.manage-users.index', compact('users'));
    }
}
