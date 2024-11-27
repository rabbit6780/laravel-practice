<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tweet;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Tweet::create([
                'user_id'   => $i,
                'text'      => '테스트투고' . $i,
                'created_at'=> now(),
                'updated_at'=> now()
            ]);
        }
    }
}
