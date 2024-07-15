<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;

        // Set attributes
        $user->name = 'John Doe';
        $user->email = 'john.doe@example.com';
        $user->email_verified_at = now(); // or NULL if not verified
       
        
        // Save the user
        $user->save();
    }
}
