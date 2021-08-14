<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartemenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO departemen (id, nama_departemen) VALUES
        ('1','Departemen Ilmu Teknologi (IT)'),
        ('2','Departemen Sumber Daya Manusia (SDM)'),
        ('3','Departemen Keuangan'),
        ('4','Departemen Pengelolaan Pelanggan'),
        ('5','Departemen Pelayanan & Bisnis Wilayah 1'),
        ('6','Departemen Pelayanan & Bisnis Wilayah 2'),
        ('7','Departemen Proyek Manajemen'),
        ('8','Departemen Asset'),
        ('9','Departemen Produksi'),
        ('10','Departemen Distribusi & NRW');");   
    }
}
