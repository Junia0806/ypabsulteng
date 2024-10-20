<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProgram extends Model
{
    use HasFactory;

    // Nama tabel (opsional, jika berbeda dari konvensi Laravel)
    protected $table = 'sub_programs'; 

    // Primary key (opsional, jika berbeda dari 'id')
    protected $primaryKey = 'id'; 

    // Kolom-kolom yang boleh diisi secara massal
    protected $fillable = [
        'id_program',
        'nama_sub',
        'deskripsi_sub',
        'created_at',
        'updated_at',
    ];

    // Jika tidak menggunakan kolom 'created_at' dan 'updated_at'
    public $timestamps = true; // Set to false if you don't use timestamps

    // Relasi: SubProgram belongs to a Program
    public function program()
    {
        return $this->belongsTo(Program::class, 'id_program');
    }

    // Relasi: SubProgram has many Pictures
    public function picture()
    {
        return $this->hasMany(Picture::class, 'id_sub');
    }
}
