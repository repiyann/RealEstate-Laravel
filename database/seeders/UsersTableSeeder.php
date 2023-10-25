<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            // Admin
            [
                "name"      => "Admin",
                "username"  => "admin",
                "email"     => "admin@email.com",
                "password"  => Hash::make("111"),
                "role"      => "admin",
                "status"    => "active"
            ],

            // Agent
            [
                "name"      => "Agent",
                "username"  => "agent",
                "email"     => "agent@email.com",
                "password"  => Hash::make("111"),
                "role"      => "agent",
                "status"    => "active"
            ],
            
            // User
            [
                "name"      => "User",
                "username"  => "user",
                "email"     => "user@email.com",
                "password"  => Hash::make("111"),
                "role"      => "user",
                "status"    => "active"
            ]
        ]);
    }
}
