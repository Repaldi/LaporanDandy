<?php

namespace App\Http\Controllers;
use App\Laporan;
use App\Models\Laporan as ModelsLaporan;
use Illuminate\Http\Request;
class laporanController extends Controller
{
    public function index()
    {
        $data_laporan = \App\Models\Laporan::all();
        $departemen = \App\Models\Departemen::all();
       # $sub_departemen = \App\Models\SubDepartemen::where('id_departemen', $departemen->id);
        return view('laporan.index',['data_laporan' => $data_laporan,
                                    'departemen' => $departemen]);
                                   # 'sub_departemen' => $sub_departemen]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_departemen' => 'required',
            'id_subdepartemen' => 'required',
            'kegiatan' => 'required',
            'tgl' => 'required',          
        ]);
       
        \App\Models\Laporan::create([
            'nama' => $request->nama,
            'id_departemen' => $request->id_departemen,
            'id_subdepartemen' => $request->id_subdepartemen,
            'kegiatan' => $request->kegiatan,
            'tgl' => $request->tgl
        ]);
        return redirect()->back();
    }

   
}
    