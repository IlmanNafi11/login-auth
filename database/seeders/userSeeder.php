<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "ilmannafi",
            "email"=> "ilmannafi@gmail.com",
            "password"=> bcrypt("password"),
            "email_verified_at"=> now(),
            "remember_token" => Str::random(60),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
