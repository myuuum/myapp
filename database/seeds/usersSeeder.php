<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Aさん',
                'age' => 21,
                'sex' => '男',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('test1'),
            ],
            [
                'name' => 'Bくん',
                'age' => 15,
                'sex' => '男',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('test2'),
            ],
            [
                'name' => 'Cさん',
                'age' => 25,
                'sex' => '女',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('test3'),
            ],
        ]);
    }
}
