<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table = 'hobis';
    protected $fillable = ['hobi'];

    // Relasi Many-to-Many
    // ===================
    // Buat function bernama mahasiswa(), dimana model 'Hobi'
    // memiliki relasi Many-to-Many (belongsToMany) terhadap model
    // 'Mahasiswa' yang terhubung oleh tabel 'mhs_hobis'
    // masing-masing sebagai 'id_hobi' dan 'id_mahasiswa'

    public function mahasiswa(){
        return $this->belongsToMany('App\Mahasiswa', 'mhs_hobis', 'id_hobi', 'id_mahasiswa');
    }
}
