<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $guarded = [];

    public function departemen()
    {
      return $this->belongsTo('App\Models\Departemen','id_departemen','id');
    }

    public function sub_departemen()
    {
      return $this->belongsTo('App\Models\SubDepartemen','id_subdepartemen','id');
    }

}
