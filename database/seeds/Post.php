<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['title'=>'Tips Cepat Coding',
            'content'=>'Lorem Ipsum'],
            ['title'=>'Ihsan join JKT48',
            'content'=>'Lorem Ipsum'],
            ['title'=>'One Punch Man Season 2',
            'content'=>'Lorem Ipsum']
        ];
        DB::table('posts')->insert($tambah);
    }
}
