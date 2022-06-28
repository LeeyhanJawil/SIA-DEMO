<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Leeyhan Jawil',
            'email' => 'leeyhanjawail@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('pass1234')
        ],
        [
            'name' => 'Zyra Jawil',
            'email' => 'zyrajawil@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('pass1234')
        ],
        [
            'name' => 'Lee Jawil',
            'email' => 'leejawil@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('pass1234')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
