<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=User::create([
            'name' => "user",
            'email' => "user@mail.com",
            'password' => Hash::make('123456789')
        ]);
        $user->roles()->sync(2);

        $user2=User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('123456789')
        ]);
        $user2->roles()->sync(1);
    }
}
