<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function index()
    {
        // Calculate the total number of users
        $totalUsers = User::where('isAdmin', false)->count();

        // Calculate the total number of admins
        $totalAdmins = User::where('isAdmin', true)->count();

        // Calculate other counts needed for the chart
        $adminsCount = User::where('isAdmin', true)->count();
        $superAdminsCount = User::where('isSuperAdmin', true)->count();
        $regularUsersCount = User::where('isAdmin', false)->where('isSuperAdmin', false)->count();

        return view('super-admins.index', compact('totalUsers', 'totalAdmins', 'adminsCount', 'superAdminsCount', 'regularUsersCount'));
    }

    public function userDistributionChart()
    {
        $adminsCount = User::where('isAdmin', true)->count();
        $superAdminsCount = User::where('isSuperAdmin', true)->count();
        $regularUsersCount = User::where('isAdmin', false)->where('isSuperAdmin', false)->count();

        $chart = Charts::create('pie', 'chartjs')
            ->setTitle('User Distribution by Role')
            ->setLabels(['Admins', 'Super Admins', 'Regular Users'])
            ->setDataset('User Count', [$adminsCount, $superAdminsCount, $regularUsersCount])
            ->setResponsive(true);

        // Pass the chart variable to the 'super-admins.index' view
        return view('super-admins.index', compact('chart'));
    }
}
