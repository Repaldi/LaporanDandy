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
      return $this->belongsTo(Departemen::class);
    }
}
