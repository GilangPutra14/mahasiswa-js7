<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 

class mahasiswa extends Model
{
    protected $table="mahasiswa";
    public $timestamps= false;
    protected $primaryKey = 'Nim';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIm',
        'Nama',
        'Kelas',
        'Jurusan',
        'No_Handphone',
    ];
}
