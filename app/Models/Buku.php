<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";
    public $timestamps = false;
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'id_buku',
        'judul',
        'kategori',
        'penerbit',
        'pengarang',
        'jumlah',
        'status',
    ];
}
