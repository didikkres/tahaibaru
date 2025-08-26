@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BERITA
                            </h2>
                            <ul class="header-dropdown">
                                <a href="/beritaadminread"  class="btn btn-primary waves-effect">TAMBAH</a>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>FOTO</th>
                                        <th>JUDUL</th>
                                        <th>SUB JUDUL</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($berita as $b)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td><a href="{{url('/storage/berita')}}/{{$b->gambar}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{url('/storage/berita') }}/{{$b->gambar}}">
                                    </a></td>
                                        <td>{{$b->title}}</td>
                                        <td>{{$b->subjudul}}</td>
                                        <td>
                                <a href="/beritaadminedit/{{$b->id}}"  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
                                <a href="#" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float delete" pendidikan-id="{{$b->id}}"><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
					window.location = "beritaadmin/"+pendidikan_id+"/delete"
				}
			});
		});
	</script>
	@stop