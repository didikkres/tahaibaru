@extends('layoutsadmin.main')
@section('container')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Pembangunan</h4>
                </div>
                        <div class="modal-body">
                            <form action="/padmin" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line @error('nama_ketua') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nama_keg" value="{{old('nama_keg')}}">
                                    @error('nama_keg')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{old('alamat')}}">
                                    @error('alamat')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                               <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Sumber Dana" name="sumber_dana" value="{{old('sumber_dana')}}">
                                    @error('sumber_dana')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Total Anggaran" name="anggaran" value="{{old('anggaran')}}">
                                    @error('anggaran')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Volume" name="volume" value="{{old('volume')}}">
                                    @error('volume')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Pelaksana" name="pelaksana" value="{{old('pelaksana')}}">
                                    @error('pelaksana')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Tahun" name="tahun" value="{{old('tahun')}}">
                                    @error('tahun')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="{{old('keterangan')}}">
                                    @error('keterangan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <input  type="file" name="gambar" class="form-control">
                                </div>
                            </div>          
                        </div> 
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </form> 
                        </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEMBANGUNAN
                            </h2>
                            <ul class="header-dropdown">
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal">TAMBAH</button>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Alamat</th>
                                        <th>Sumber dana</th>
                                        <th>Anggarran</th>
                                        <th>Volume</th>
                                        <th>Pelaksana</th>
                                        <th>Tahun</th>
                                        <th>Keteranagan</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pp as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama_keg}}</td>
                                        <td>{{$r->alamat}}</td>
                                        <td>{{$r->sumber_dana}}</td>
                                        <td>{{$r->anggaran}}</td>
                                        <td>{{$r->volume}}</td>
                                        <td>{{$r->pelaksana}}</td>
                                        <td>{{$r->tahun}}</td>
                                        <td>{{$r->keterangan}}</td>
                                        <td><a href="#" class="delete" pendidikan-id="{{$r->id}}"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@stop
	@section('footer')
	<script >
		$('.delete').click(function(){
			var pendidikan_id = $(this).attr('pendidikan-id');
			swal({
				title: "Yakin ?",
				text: "Mau di hapus data !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "padmin/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop