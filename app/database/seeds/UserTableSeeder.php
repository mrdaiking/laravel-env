<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'cuong',
            'email' => 'kakakakaka525@gmail.com',
            'password' => bcrypt('123123123')
        ]);
    }
}
