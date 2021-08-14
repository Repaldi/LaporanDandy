<!DOCTYPE html>
<html>
    <HEAD>
        <title>Laporan Bulanan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </HEAD>
    <BODY>
        
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Laporan Bulanan</h1>
                    
            </div>
            <div class="col-6">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary"style="float:right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>          
            </div>
            <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>DEPARTEMEN</th>
            <th>SUB DEPARTEMEN</th>
            <th>KEGIATAN</th>
            <th>TANGGAL</th>
            <th>
                action
                
            </th>
        </tr>
        @foreach($data_laporan as $laporan)
        <tr>
            <td>{{$laporan->id}}</td>
            <td>{{$laporan->nama}}</td>
            <td>{{$laporan->id_departemen}}</td>
            <td>{{$laporan->id_subdepartemen}}</td>
            <td>{{$laporan->kegiatan}}</td>
            <td>{{$laporan->tgl}}</td>
            <td><button class="btn btn-danger btn-sm hapus" data-laporan_id="{{$laporan->id}}" data-nama_paket_soal="{{$laporan->nama}}" style="box-shadow: 3px 2px 5px grey;">Hapus</button>
        </td>
        </tr>        
        @endforeach
        
        </div>
    </table>

        </div>
    </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </BODY>

</html>


 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
<form action="/laporan/create" method="POST">
    {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
        </div>
        <select name="id_departemen" class="form-select mb-3"aria-label="Default select example">
        <option disabled selected>Pilih Departemen</option>
            @foreach($departemen as $item)
            <option value="{{$item->id}}">{{$item->nama_departemen}}</option>
            @endforeach
</select>
        <select name="id_subdepartemen" class="form-select mb-1" aria-label="Default select example">
            <option selected>Sub Departemen</option>
            <option value="1">tes sub</option>
        </select>
        <label for="tgl"  class="form-group">Tanggal Kerja</label>
        <input type="datetime-local" name="tgl" class="form-control" id="exampleFormControlTextarea1">
        <label for="Textarea"  class="form-group">Isi Kegiatan</label>
        <textarea name="kegiatan" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('.hapus').click(function(){
      const laporan_id = $(this).data('laporan_id');
      const nama = $(this).data('nama');
      swal({
        title: "Yakin?",
        text: "Menghapus data"+nama+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/laporan/delete/"+laporan_id;
        }
      });
    });
  });

</script>