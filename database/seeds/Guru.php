<?php

use Illuminate\Database\Seeder;

class Guru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['nip'=>'10111',
            'nama'=>'Ihsan Nurul',
            'jabatan'=>'office boy',
            'alamat'=>'Bandung'],
            ['nip'=>'10112',
            'nama'=>'Chandra',
            'jabatan'=>'Unit Produksi',
            'alamat'=>'Bandung'],
            ['nip'=>'10113',
            'nama'=>'Ute Julia',
            'jabatan'=>'Unit Produksi',
            'alamat'=>'Bandung'],
            ['nip'=>'10114',
            'nama'=>'Firman',
            'jabatan'=>'Server',
            'alamat'=>'Bandung'],
            ['nip'=>'10115',
            'nama'=>'Iqra',
            'jabatan'=>'Unit Produksi',
            'alamat'=>'Bandung']
        ];
        DB::table('gurus')->insert($tambah);
    }
}
