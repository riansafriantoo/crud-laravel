<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $fillable = ['nama','jenis_kelamin','nomor_hp','email_aktif','current_salary','foto_profil'];
}
