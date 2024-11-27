<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'screen_name'   => 'test_user' . uniqid(),
                'name'          => 'TEST' . $i,
                'profile_image' => 'https://placehold.jp/50x50.png',
                'email'         => 'test' . uniqid() . '@test.com',
                'password'      => Hash::make('12345678'),
                'remember_token'=> Str::random(10),
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
    }
}
