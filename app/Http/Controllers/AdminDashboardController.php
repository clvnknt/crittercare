<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Require authentication for all methods
        $this->middleware('admin'); // Require admin role for all methods
    }

    public function index()
    {
        return view('admins.admin-dashboard'); // Replace this with the appropriate view path for the admin dashboard
    }
}
