@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KARTU KELUARGA
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
                                        <th>Foto</th>
                                        <th>NAMA KEPALA KELUAGA</th>
                                        <th>NO KK</th>
                                        <th>RT/RW</th>
                                        <th>SETATUS EKONOMI</th>
                                        <th>JUMAH INDIVIDU</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($results as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>
                                    <a href="{{url('/storage/fotokk')}}/{{$r->foto}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{url('/storage/fotokk') }}/{{$r->foto}}">
                                    </a>
                                </td>
                                        <td>{{$r->namakk}}</td>
                                        <td>{{$r->nokk}}</td>
                                        <td>{{$r->rt}} / {{$r->rw}}</td>
                                        <td>{{$r->status_eko}}</td>
                                        <td>{{$r->total}}</td>
                                <td>
                                <a href="/kkread/{{$r->id}}"  class="btn bg-purple btn-circle waves-effect waves-circle waves-float"><i class="material-icons">search</i></a>
                                <a href="/kkedit/{{$r->id}}"  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
                                <a href="#" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float delete" pendidikan-id="{{$r->id}}"><i class="material-icons">delete</i></a>
                            </td>
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
                    <h4 class="modal-title" id="largeModalLabel">Tambah Kartu Keluarga</h4>
                </div>
                        <div class="modal-body">
                            <form action="/kk" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="namakk">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nomor Kartu Keluarga" name="nokk">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <div class="form-line">
                                    <select name="rw_id" id="subjects" class="form-control">
                                        @foreach($rw as $r)
                                    <option value="{{$r->id}}">RW {{$r->rw}} -> {{$r->ketua_nama}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <div class="form-line">
                                    <select name="rt_id" id="subjects" class="form-control">
                                        @foreach($rt as $t)
                                    <option value="{{$t->id}}">RT {{$t->rt}} -> {{$t->nama_ketua}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="status_eko" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Status Ekonomi--</option>     
                                    <option value="MAMPU">Mampu</option>
                                    <option value="TIDAK MAMPU">Tidak Mampu</option>
                                    </select>
                                </div>
                                </div> 
                            <div class="form-group">
                                <div class="form-line">
                                    <input  type="file" name="foto" class="form-control">
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
				text: "Mau di hapus data dengan id "+pendidikan_id+" !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "kk/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop