<?php

use Illuminate\Database\Seeder;



class targetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('targets')->insert([
            [
                'target' => '成果物完成',
                'fixed_date' => '2022-4-18',
                'achievement' => 0,
                'user_id' => 1,
            ],
            [
                'target' => '中間テストで数学100点',
                'fixed_date' => '2022-6-1',
                'achievement' => 0,
                'user_id' => 2,
            ],
            [
                'target' => '5kg痩せる',
                'fixed_date' => '2022-5-1',
                'achievement' => 0,
                'user_id' => 3,
            ],
        ]);
    }
}
