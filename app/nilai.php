<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table ='nilai';
    protected $fillable = ['npm','mahasiswa_id','makul_id','sks','nilai'];
    public    $timestamps   = false;

    public function mahasiswa()
    {
            return $this->belongsTo(mahasiswa::class, 'mahasiswa_id','id');
    }

    public function makul()
    {
            return $this->belongsTo(makul::class, 'makul_id','id');
    }
}
