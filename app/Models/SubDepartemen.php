<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDepartemen extends Model
{
    use HasFactory;
    
    protected $table = 'sub_departemen';
    protected $guarded = [];

    public function departemen()
    {
      return $this->belongsTo('App\Models\Departemen','id_departemen','id');
    }
    public function laporan()
    {
      
      return $this->hasMany('App\Models\Laporan','id_laporan','id');
    }
}
