<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Promotion;
use App\Models\Demotion;


class SuperAdminAdminController extends Controller
{
    public function index(Request $request)
    {
        // Default sorting column and order
        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'asc');

        // Get all users who are admins with pagination
        $admins = User::where('isAdmin', true)
            ->orderBy($sort, $order)
            ->paginate(10); // Adjust the number of items per page as needed (e.g., 10 items per page)

        return view('super-admins.manage-admins.index', compact('admins', 'sort', 'order'));
    }

    public function edit(User $admin)
    {
        // Add your edit logic here
        return view('super-admins.manage-admins.edit', compact('admin'));
    }

    public function destroy(User $admin)
    {
        // Add your delete logic here (e.g., delete the admin from the database)
        $admin->delete();

        return redirect()->route('super-admins.manage-admins.index')
            ->with('success', 'Admin has been deleted successfully');
    }

    public function create(Request $request)
{
    // Default sorting column and order
    $sort = $request->input('sort', 'id');
    $order = $request->input('order', 'asc');

    // Get a list of users who are not admins with pagination
    $users = User::where('isAdmin', false)
        ->orderBy($sort, $order)
        ->paginate(10); // Adjust the number of items per page as needed (e.g., 10 items per page)

    return view('super-admins.manage-admins.create', compact('users', 'sort', 'order'));
}


    public function promoteUsers(Request $request)
    {
    // Validate the form data here
    $request->validate([
        'promote_users' => 'required|array',
        'promote_users.*' => 'exists:users,id', // Check if the user IDs exist in the users table
    ]);

    // Retrieve an array of user IDs to promote
    $userIds = $request->input('promote_users');

    // Update users' "isAdmin" attribute to true
    User::whereIn('id', $userIds)->update(['isAdmin' => true]);

    // Create promotion records for promoted users
    foreach ($userIds as $userId) {
        Promotion::create([
            'user_id' => $userId,
            'promoted_at' => now(), // Timestamp for when the user was promoted
        ]);
    }

    // Redirect back with a success message or perform any other actions
    return redirect()->route('super-admins.manage-admins.index')
        ->with('success', 'Users have been promoted to admins successfully.');
    }

    public function demoteAdmin($id)
    {
        // Find the admin by ID
        $admin = User::findOrFail($id);
    
        // Demote the admin by setting 'isAdmin' to false
        $admin->update(['isAdmin' => false]);
    
        // Create a demotion record with the "demoted_at" timestamp
        Demotion::create([
            'user_id' => $id,
            'demoted_at' => now(), // Timestamp for when the admin was demoted
        ]);
    
        return redirect()->route('super-admins.manage-admins.index')
            ->with('success', 'Admin demoted successfully.');
    }
    
}

