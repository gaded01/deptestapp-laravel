<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_user = [
            [
                'email' => 'g@gmail.com',
                'role' => '1',
                'age' => '25'
            ]
        ];
        foreach($admin_user as $user){
            User::create($user);
        }
    }   
}
