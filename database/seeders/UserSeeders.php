<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $user = new User;
            $user->user_name = "Suraj{$i}" . ($i + 1) . ($i + 2);
            $user->first_name = 'Suraj';
            $user->last_name = 'Gurung';
            $user->gender = 'Male';
            $user->email = "suraj@gmail{$i}" . ($i + 1) . ($i + 2);
            $user->phone_number = 982554;
            $user->address = 'rambazzar';
            $user->password = Hash::make('12345');
            $user->user_type = 'user';
            $user->use_image_url = "image/user{$i}";

            $user->save();
        }
    }
}
