@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA RW
                            </h2>
                            <ul class="header-dropdown">
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal">TAMBAH</button>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAMA</th>
                                        <th>RW</th>
                                        <th>PRIODE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($rw as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->ketua_nama}}</td>
                                        <td>{{$r->rw}}</td>
                                        <td>{{$r->priode1}}-{{$r->priode2}}</td>
                                        <td><a href="#" class="delete" pendidikan-id="{{$r->id}}"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
                <div class="modal-dialog modal-xs" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Tambah Ketua Rukun Warga</h4>
                        </div>
                        <div class="modal-body">
                            <form action="/rw" method="POST">
                            {{csrf_field()}}
                           <div class="form-group">
                                <div class="form-line @error('ketua_nama') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="Nama Ketua RW" name="ketua_nama" value="{{old('ketua_nama')}}">
                                    @error('ketua_nama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line @error('rw') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="RW" name="rw" value="{{old('rw')}}">
                                    @error('rw')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                        <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line @error('priode1') focused error @enderror">
                                            <input type="text" class="form-control" placeholder="Periode Mulai" name="priode1" value="{{old('priode1')}}">
                                            @error('priode1')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line @error('priode2') focused error @enderror">
                                            <input type="text" class="form-control" placeholder="Priode Akhir" name="priode2" value="{{old('priode2')}}">
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
					window.location = "rw/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop