<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $table = 'departemen';
    protected $guarded = [];

    public function sub_departemen()
  {
    return $this->hasMany('App\Models\SubDepartemen','id_subdepartemen','id');

  }

    public function laporan()
  {
    
    return $this->hasMany('App\Models\Laporan','id_laporan','id');
  }
}
