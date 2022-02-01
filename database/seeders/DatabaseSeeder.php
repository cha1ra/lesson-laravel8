<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tweet;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'テストユーザ',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        Tweet::create([
            'message' => 'Seederからツイート作成した件'
        ]);

        Tweet::create([
            'message' => 'phpMyAdminからではない件'
        ]);
        
        Tweet::create([
            'message' => '便利な件'
        ]);
    }
}
