<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDepartemenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO sub_departemen(id,id_departemen, nama_sub)
        values
        ('1','1','Aplikasi & Pengamanan IT (IT)'),
        ('2','1','Infrastruktur'),
        ('3','2','SDM'),
        ('4','2','SDM');");
    }
}
