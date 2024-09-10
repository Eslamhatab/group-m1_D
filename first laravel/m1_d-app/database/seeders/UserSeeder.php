<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User Admin
        $user = User::create([
            'name'       => "m1_d",
            'email'      => "m1_d@gmail.com",
            'password'   => bcrypt('123456789'),
            'user_type'  => "admin",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);
        //User Customer
        $user = User::create([
            'name'       => "customer",
            'email'      => "customer@gmail.com",
            'password'   => bcrypt('123456789'),
            'user_type'  => "customer",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);
        //User Modarator
        $user = User::create([
            'name'       => "modorater",
            'email'      => "modorater@gmail.com",
            'password'   => bcrypt('123456789'),
            'user_type'  => "modorater",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => null,
        ]);
    }
}
