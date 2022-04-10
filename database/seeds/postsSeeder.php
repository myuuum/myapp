<?php

use Illuminate\Database\Seeder;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'date' => '2022-3-18',
                'body_comment' => 'コーディング',
                'body_time' => '2時間',
                'target_id' => 1,
                'user_id' => 1,
            ],
            [    
                'date' => '2022-3-21',
                'body_comment' => 'バグ修正',
                'body_time' => '1時間',
                'target_id' => 1,
                'user_id' => 1,
            ],
            [    
                'date' => '2022-3-23',
                'body_comment' => '仕様変更',
                'body_time' => '3時間',
                'target_id' => 1,
                'user_id' => 1,
            ],
            [    
                'date' => '2022-5-1',
                'body_comment' => '数学',
                'body_time' => '2時間',
                'target_id' => 2,
                'user_id' => 2,
            ],
            [    
                'date' => '2022-7-13',
                'body_comment' => 'ランニング',
                'body_time' => '2km',
                'target_id' => 3,
                'user_id' => 3,
            ]
            
        ]);
    }
}
