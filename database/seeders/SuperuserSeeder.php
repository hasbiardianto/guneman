<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperuserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'hasbiardi',
            'name' => 'Hasbi',
            'email' => 'hasbi@guneman.com',
            'password' => 'Ardianto*123',
            'role' => 'admin', // Assign 'superuser' role
        ]);
    }
}
