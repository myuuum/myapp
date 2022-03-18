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
            'id' => '2',
            'name' => 'Bさん',
            'age' => '30',
            'sex' => '女',
            ],
            [    
            'id' => '3',
            'name' => 'Cさん',
            'age' => '17',
            'sex' => '男',
            ]
        ]);
    }
}
