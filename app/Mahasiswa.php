<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    #Tentukan nama table terkait
    protected $table = 'mahasiswas';

    #MASS ASSIGMENT
    #Untuk membatasi attribute(field) yang boleh diisi
    protected $fillable = ['nama','nim','id_dosen'];

    // Relasi One-to-Many
    // ==================
    // Buat function bernama dosen(), dimana model
    // 'Mahasiswa' dimiliki(BelongsTo) banyak data
    // terhadap model 'Dosen' melalui 'id_dosen'

    public function dosen(){
        return $this->belongsTo('App\Dosen','id_dosen');
    }
    public function wali(){
        return $this->hasOne('App\Wali','id_mahasiswa');
    }

     // Relasi Many-to-Many
    // ===================
    // Buat function bernama hobi(), dimana model 'Mahasiswa'
    // memiliki relasi Many-to-Many (belongsToMany) terhadap model
    // 'Hobi' yang terhubung oleh tabel 'mhs_hobis'
    // masing-masing sebagai 'id_hobi' dan 'id_mahasiswa'

    public function hobi(){
        return $this->belongsToMany('App\Hobi', 'mhs_hobis', 'id_mahasiswa', 'id_hobi');
    }
}

