@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA APBDES
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
                                        <th>FOTO</th>
                                        <th>JUDUL</th>
                                        <th>ISI</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($apbdes as $b)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td><a href="{{url('/storage/apbdes')}}/{{$b->gambar}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{url('/storage/apbdes') }}/{{$b->gambar}}">
                                    </a></td>
                                        <td>{{$b->judul}}</td>
                                        <td>{{$b->isi}}</td>
                                        <td>
                                <a href="/apbdesadminedit/{{$b->id}}"  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
                                <a href="#" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float delete" pendidikan-id="{{$b->id}}"><i class="material-icons">delete</i></a>
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
                    <h4 class="modal-title" id="largeModalLabel">Tambah Apbdes</h4>
                </div>
                        <div class="modal-body">
                            <form action="/apbdesadminpost" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line @error('judul') focused error @enderror">
                                    <input type="text" class="form-control" placeholder="Judul" name="judul" value="{{old('judul')}}">
                                    @error('nama_ketua')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Isi" name="isi" value="{{old('isi')}}">
                                    @error('isi')
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
@endsection
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
					window.location = "apbdesadmin/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop