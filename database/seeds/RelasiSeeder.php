<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Mengosongkan isi Tabel
        DB::table('mhs_hobis')->delete();
        DB::table('hobis')->delete();
        DB::table('walis')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('dosens')->delete();

        
        #Tambahkan data Dosen
        $dosen = Dosen::create(array('nama' => 'Yulianto', 'nipd' => '1234567890'));
        //
        $this->command->info('Data Dosen telah diisi!');


        #Tambahkan data Mahasiswa
        $novay = Mahasiswa::create(array('nama' => 'Noviyanto Rachmadi', 'nim' => '1012000011', 'id_dosen' => $dosen->id));
        $dije = Mahasiswa::create(array('nama' => 'Djaffar Rahmadan', 'nim' => '1012000017', 'id_dosen' => $dosen->id));
        $ayu = Mahasiswa::create(array('nama' => 'Puji Rahayu', 'nim' => '1012000067', 'id_dosen' => $dosen->id));
        //
        $this->command->info('Data Mahasiswa telah diisi!');


        #Tambahkan data Wali
        $aldo = Wali::create(array('nama' => 'Aldo', 'id_mahasiswa' => $novay->id));
        $nurhadi = Wali::create(array('nama' => 'Nurhadi', 'id_mahasiswa' => $dije->id));
        $dadang = Wali::create(array('nama' => 'Dadang', 'id_mahasiswa' => $ayu->id));
        //
        $this->command->info('Data Wali telah diisi!');


        #isi Tabel Hobi
        $mandi = Hobi::create(array('hobi' => 'Mandi Air'));
        $baca = Hobi::create(array('hobi' => 'Baca Buku'));

        #Hubungkan Mahasiswa dengan hobinya masing-masing
        $novay->hobi()->attach($mandi->id);
        $novay->hobi()->attach($baca->id);
        $dije->hobi()->attach($mandi->id);
        $ayu->hobi()->attach($baca->id);
        //
        $this->command->info('Data Mahasiswa Beserta Hobi telah diisi!');


    }
}
