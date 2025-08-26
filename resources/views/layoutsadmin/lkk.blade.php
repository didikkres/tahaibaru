@extends('layoutsadmin.main')
@section('container')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah LKD</h4>
                </div>
                        <div class="modal-body">
                            <form action="/lkk" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line @error('nama') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="Nama LKK" name="nama" value="{{old('nama')}}">
                                    @error('nama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="jabatan" id="subjects" class="form-control">
                                    <option value="">--- Pilih Jabatan ---</option>
                                    <option value="ketua">KETUA</option>
                                    <option value="sekertaris">SEKERTARIS</option>
                                    <option value="bendahara">BENDAHARA</option>
                                    <option value="anggota">ANGGOTA</option>
                                    </select>
                                    @error('jabatan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="lkd" id="subjects" class="form-control">
                                    <option value="">--- Pilih LKD ---</option>
                                    <option value="karangtaruna">KARANGTARUNA</option>
                                    <option value="pkk">PKK</option>
                                    <option value="lpmk">LPMK</option>
                                    <option value="posyandu">POSYANDU</option>
                                    </select>
                                    @error('lkd')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                               <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Masa Jabatan" name="masa_jabatan" value="{{old('periode1')}}">
                                    @error('masajabatan')
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
                                LKK
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
                                        <th>JABATAN</th>
                                        <th>LKD</th>
                                        <th>MASA JABATAN</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data_lkk as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama}}</td>
                                        <td>{{$r->jabatan}}</td>
                                        <td>{{$r->lkd}}</td>
                                        <td>{{$r->masa_jabatan}}</td>
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
					window.location = "lkk/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop