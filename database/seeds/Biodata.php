<?php

use Illuminate\Database\Seeder;

class Biodata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['nama'=>'Ihsan',
            'umur'=>'16',
            'alamat'=>'Bandung'],
            ['nama'=>'Iqra',
            'umur'=>'17',
            'alamat'=>'Bandung'],
            ['nama'=>'Aziz',
            'umur'=>'16',
            'alamat'=>'Bandung'],
            ['nama'=>'Faric',
            'umur'=>'16',
            'alamat'=>'Bandung'],
            ['nama'=>'Chandra',
            'umur'=>'15',
            'alamat'=>'Bandung']
        ];
        DB::table('biodata')->insert($tambah);
    }
}
