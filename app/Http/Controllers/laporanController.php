<?php

namespace App\Http\Controllers;
use App\Laporan;
use App\Models\Laporan as ModelsLaporan;
use Illuminate\Http\Request;
use App\SubDepartemen;
class laporanController extends Controller
{
    public function index()
    {
        $data_laporan = \App\Models\Laporan::all();
        $departemen = \App\Models\Departemen::all();
       return view('laporan.index',['data_laporan' => $data_laporan,
                                    'departemen' => $departemen]);                                 
    }

    public function getSubDepartemen(Request $request){
        $sub_departemen = SubDepartemen::where("id_departemen",$request->departemen_id)->pluck('id_subdepartemen','nama_subdepartemen');
        return response()->json($sub_departemen);
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

    public function update(Request $request)
    {

        $laporan = \App\Models\Laporan::find($request->id_laporan_update)->update([
            'id_departemen' => $request->id_departemen_update,
            'id_subdepartemen' => $request->id_subdepartemen_update,
            'nama' => $request->nama_update,
            'tgl' => $request->tgl_update,
            'kegiatan' => $request->kegiatan_update
        ]);

        return redirect()->back();
    }


    public function destroy($id)
    {
        $laporan = \App\Models\Laporan::find($id);
        $laporan->delete();
        return redirect()->back();
    }

   
}
    