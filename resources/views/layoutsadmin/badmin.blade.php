@extends('layoutsadmin.main')
@section('container')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Penerima Bantuan</h4>
                </div>
                        <div class="modal-body">
                            <form action="/badmin" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="nik" id="subjects" class="form-control">
                                    <option value="">--- Pilih Nama ---</option>
                                    @foreach($data_p as $r)
                                    <option value="{{$r->nik}}" {{ old('nik') == $r->id ? 'selected' : null}}>{{$r->nama}}</option>
                                    @endforeach
                                    </select>
                                    @error('nik')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="bltdd" id="subjects" class="form-control">
                                    <option value="">--- Pilih BLTDD ---</option>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                    </select>
                                    @error('bltdd')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                               <div class="form-group">
                                <div class="form-line">
                                    <select name="pkh" id="subjects" class="form-control">
                                    <option value="">--- Pilih PKH ---</option>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                    </select>
                                    @error('pkh')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="blsm" id="subjects" class="form-control">
                                    <option value="">--- Pilih BLSM ---</option>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                    </select>
                                    @error('bpnt')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="bpnt" id="subjects" class="form-control">
                                    <option value="">--- Pilih BPNT ---</option>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                    </select>
                                    @error('bpnt')
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
                                DATA PENERIMA BANTUAN
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
                                        <th>BLTDD</th>
                                        <th>PKH</th>
                                        <th>BLSM</th>
                                        <th>BPNT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pp as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama}}</td>
                                        <td>{{$r->bltdd}}</td>
                                        <td>{{$r->pkh}}</td>
                                        <td>{{$r->blsm}}</td>
                                        <td>{{$r->bpnt}}</td>
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
					window.location = "badmin/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop