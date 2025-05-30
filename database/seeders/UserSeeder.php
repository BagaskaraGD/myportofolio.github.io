<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'bagaskaragd@gmail.com')->first()) {
            User::create([
                'name' => 'Bagaskara Gita Dewanta',
                'email' => 'bagaskaragd@gmail.com',
                'password' => Hash::make('eko12345'),
                'email_verified_at' => Carbon::now()
            ]);
        }
    }
}
