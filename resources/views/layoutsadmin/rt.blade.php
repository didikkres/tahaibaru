@extends('layoutsadmin.main')
@section('container')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Ketua Rukun Tangga</h4>
                </div>
                        <div class="modal-body">
                            <form action="/rt" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line @error('nama_ketua') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="Nama Ketua RT" name="nama_ketua" value="{{old('nama_ketua')}}">
                                    @error('nama_ketua')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="RT" name="rt" value="{{old('rt')}}">
                                    @error('rt')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="rw_id" id="subjects" class="form-control">
                                    <option value="">--- Pilih Ketua RW ---</option>
                                    @foreach($data_rw as $r)
                                    <option value="{{$r->id}}" {{ old('rw_id') == $r->id ? 'selected' : null}}>RW {{$r->rw}} -> {{$r->ketua_nama}}</option>
                                    @endforeach
                                    </select>
                                    @error('rw_id')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                               <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Priode Awal" name="priode1" value="{{old('periode1')}}">
                                    @error('priode1')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Priode Akhir" name="priode2" value="{{old('periode2')}}">
                                    @error('priode2')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
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
                                DATA RT
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
                                        <th>NAMA</th>
                                        <th>RT</th>
                                        <th>PRIODE</th>
                                        <th>RW</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($rt as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama_ketua}}</td>
                                        <td>{{$r->rt}}</td>
                                        <td>{{$r->priode1}}-{{$r->priode2}}</td>
                                        <td>{{$r->rw}}</td>
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
					window.location = "rt/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop