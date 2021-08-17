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
                    <button type="button" class="btn btn-primary"style="float:right" data-bs-toggle="modal" data-bs-target="#tambah_laporan">
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
            <td>     
                
            <a href="#" class="btn btn-warning edit-laporan" 
            data-id_laporan="{{$laporan->id}}" 
            data-nama="{{$laporan->nama}}" 
            data-id_departemen="{{$laporan->id_departemen}}" 
            data-id_subdepartemen="{{$laporan->id_subdepartemen}}" 
            data-tgl ="{{$laporan->tgl}}"
            data-kegiatan ="{{$laporan->kegiatan}}"
            data-bs-toggle="modal" data-bs-target="#edit_laporan"> Edit </a>           
                
            <a href="#" class="btn btn-danger hapus-laporan" data-laporan_id="{{$laporan->id}}" >Hapus</a>

                
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

 <!-- Modal -->
<div class="modal fade" id="tambah_laporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <select name="id_departemen" id="id_departemen" class="form-select mb-3"aria-label="Default select example">
        <option disabled selected>Pilih Departemen</option>
            @foreach($departemen as $item)
            <option value="{{$item->id}}">{{$item->nama_departemen}}</option>
            @endforeach
</select>
        <select name="id_subdepartemen" id="id_subdepartemen"class="form-select mb-1" aria-label="Default select example">
        <option disabled selected>Pilih Sub Departemen</option>
           
            <option value="1">test</option>
            
      
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

 <!-- Modal Edit-->
<div class="modal fade" id="edit_laporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form action="{{route('updateLaporan')}}" enctype="multipart/form-data" method="post">
          @csrf @method('PATCH')
        <div class="mb-3">
            <input type="hidden" value="" name="id_laporan_update" id="id_laporan_update">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input name="nama_update" type="text" class="form-control" id="nama_update" >
        </div>
        <select name="id_departemen_update" id="id_departemen_update" class="form-select mb-3"aria-label="Default select example">
        <option disabled selected>Pilih Departemen</option>
            @foreach($departemen as $item)
            <option value="{{$item->id}}">{{$item->nama_departemen}}</option>
            @endforeach
</select>
        <select name="id_subdepartemen_update" id="id_subdepartemen_update"class="form-select mb-1" aria-label="Default select example">
        <option disabled selected>Pilih Sub Departemen</option>
           
            <option value="1">test</option>
            
      
        </select>
        <label for="tgl"  class="form-group">Tanggal Kerja</label>
        <input type="datetime-local" name="tgl_update" class="form-control" id="tgl_update" value="">
        <label for="Textarea"  class="form-group">Isi Kegiatan</label>
        <textarea name="kegiatan_update"id="kegiatan_update" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
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

$(document).ready(function () {
        $(".edit-laporan").click(function (e) {
        const id_laporan        = $(this).data('id_laporan')
        const nama              = $(this).data('nama')
        const id_departemen     = $(this).data('id_departemen')
        const id_subdepartemen  = $(this).data('id_subdepartemen');
        const tgl               = $(this).data('tgl');
        const kegiatan          = $(this).data('kegiatan');

        console.log(id_laporan);
        console.log(nama);
        console.log(id_departemen);
        console.log(id_subdepartemen);
        console.log(tgl);
        console.log(kegiatan);
        $("#id_laporan_update").val(id_laporan);
        $("#nama_update").val(nama);
        $("#id_departemen_update").val(id_departemen);
        $("#id_subdepartemen_update").val(id_subdepartemen);
        $("#tgl_update").val(tgl);
        $("#kegiatan_update").val(kegiatan);

        });
    });

    $('.hapus-laporan').click(function(){
			const laporan_id = $(this).data('laporan_id');
			swal({
				title: "Hapus Laporan ini?",
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
</script>

