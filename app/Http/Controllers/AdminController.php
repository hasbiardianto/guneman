<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdminRole');
    }

    public function dashboard()
    {
        // Logic for the admin dashboard
        return view('admin.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', [
            'title' => 'Users',
            'users' => $users, 
        ]);
    }

    public function destroyUser(User $user) 
    {
        $user->delete();
        return redirect()->route('show.users')->with('success', 'User deleted successfully!');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admin.category', [
            'title' => 'Kategori',
            'categories' => $categories,
        ]);
    }
}
