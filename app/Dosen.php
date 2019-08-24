<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    #Tentukan nama table terkait
    protected $table = 'dosens';

    #MASS ASSIGMENT
    #Untuk membatasi attribute(field) yang boleh diisi
    protected $fillable = ['nama','nipd'];

    // Relasi One-to-Many
    // ==================
    // Buat function bernama mahasiswa(), dimana model
    // 'Dosen' memiliki banyak data
    // terhadap model 'Mahasiswa' melalui 'id_dosen'

    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa','id_dosen');
    }



}
