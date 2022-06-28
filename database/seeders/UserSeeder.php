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
            'name' => 'Arvin Jay Udtohan',
            'email' => 'arvinjayudtohan@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('arvin123')
        ],
        [
            'name' => 'Jeniva Larita',
            'email' => 'jenivalarita@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('jeniva123')
        ],
        [
            'name' => 'Ara Cosare',
            'email' => 'aracosare@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('ara123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
