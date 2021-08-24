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
        ('3','2','payroll'),
        ('4','2','pelathan & pengembangan'),
        ('5','3','Anggaran'),
        ('6','3','Akutansi'),
        ('7','3','Kas/Perpajakan'),
        ('8','4','Pembaca Meter & Rekening'),
        ('9','4','Keluhan Pelanggan'),
        ('10','4','Tunggakan Pelanggan'),
        ('11','4','Meter Air'),
        ('12','5','Pemasaran Wilayah 1'),
        ('13','5','Penaganan Gangguan Jar.PLGN Wilayah 1'),
        ('14','5','Sambungan Baru Wilayah 1'),
        ('15','6','Pemasaran Wilayah 2'),
        ('16','6','Penaganan Gangguan Jar.PLGN Wilayah 2'),
        ('17','6','Sambungan Baru Wilayah 2'),
        ('18','7','Pengawas'),
        ('19','7','Bangunan & K3 Koordinator Perizinan'),
        ('20','8','Perencannaan Asset'),
        ('21','8','Database & Program Asset'),
        ('22','8','Pergudangan'),
        ('23','9','LABORATORIUM'),
        ('24','9','Pengolahan Air 1'),
        ('25','9','Pengolahan Air 2'),
        ('26','9','Pemeliharaan M&E. Banugnan Instalasi'),
        ('27','10','LABORATORIUM'),
        ('28','10','Pengolahan Air 1'),
        ('29','10','Pengolahan Air 2'),
        ('30','10','Pemeliharaan M&E. Banugnan Instalasi'),
        ('31','11','Pengaturan Pengaliran & Pengendalian NRW 1'),
        ('32','11','Pengaturan Pengaliran & Pengendalian NRW 2'),
        ('33','11','Penanganan Gangguan Pengaliran'),
        ('34','11','Pemeliharaan Jaringan Perpipaan');");
    }
}
