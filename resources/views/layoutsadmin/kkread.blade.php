@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
            DATA KARTU KELUARGA
            </h2>
            </div>
              <div class="body">
                            <ul class="list-group">
                                <li class="list-group-item">Nama Kepala Keluarga<span class="badge bg-pink">{{$kk->namakk}}</span></li>
                                <li class="list-group-item">Nomor Kartu Keluarga<span class="badge bg-cyan">{{$kk->nokk}}</span></li>
                                <li class="list-group-item">RT / RW<span class="badge bg-teal">{{$kk->rt}} / {{$kk->rw}}</span></li>
                                <li class="list-group-item">Status Ekonomi<span class="badge bg-orange">{{$kk->status_eko}}</span></li>
                                <li class="list-group-item">Jumlah Individu<span class="badge bg-purple">{{$co}}</span></li>
                            </ul>
                        </div>          
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <a href="{{url('/storage/fotokk') }}/{{$kk->foto}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{url('/storage/fotokk') }}/{{$kk->foto}}">
                                    </a>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KELUARGA
                            </h2>
                            <ul class="header-dropdown">
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal">TAMBAH</button>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>Agama</th>
                                        <th>TTL</th>
                                        <th>Usia</th>
                                        <th>Status Kluarga</th>
                                        <th>Pekerjaan</th>
                                        <th>Satus Pernikahan</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pd as $p)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$p->nama}}</td>
                                        <td>{{$p->nik}}</td>
                                        <td>{{$p->alamat}}</td>
                                        <td>{{$p->agama}}</td>
                                        <td>{{$p->tempat_lahir}} {{$p->tgl_lahir}}</td>
                                        <td>{{$p->usia}}</td>
                                        <td>{{$p->status_dikeluarga}}</td>
                                        <td>{{$p->pekerjaan}}</td>
                                        <td>{{$p->status_pernikahan}}</td>
                                <td>
                                <a href="/kluargaedit/{{$p->id}}"><i class="material-icons">edit</i></a>
                                <a href="#" class="delete" pendidikan-id="{{$p->id}}"><i class="material-icons">delete</i></a>
                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Kartu Keluarga</h4>
                </div>
                        <div class="modal-body">
                            <form action="/kkread/{{$kk->id}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                </div>
                                @error('nama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                @enderror
                            </div>
                                <input type="hidden" value="{{$kk->id}}" name="kk_id">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nomor Induk Keluarga" name="nik">
                                </div>
                                @error('kk_id')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="usia" class="form-control" placeholder="Usia">
                                        </div>
                                        @error('usia')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        @error('tempat_lahir')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <div class="form-line" id="bs_datepicker_container">
                                            <input type="text" name="tgl_lahir" class="form-control" placeholder="Please choose a date...">
                                        </div>
                                        @error('tgl_lahir')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <div class="form-line">
                                    <select name="jekel" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Jenis Kelamin--</option>     
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                @error('jekel')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="agama" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Agama--</option>     
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buda">Buda</option>
                                    </select>
                                </div>
                                @error('agama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                            </div> 
                            </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="alamat" class="form-control no-resize" placeholder="Alamat"></textarea>
                                        </div>
                                        @error('alamat')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                    <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="status_pernikahan" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Status Pernikahan--</option>     
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Cerai">Cerai</option>
                                    </select>
                                        </div>
                                        @error('status_pernikahan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <select name="status_dikeluarga" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Status Dikeluarga--</option>     
                                    <option value="Kepala Rumah Tangga">Kepala Rumah Tangga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Lainya">Lainnya</option>
                                    </select>
                                        </div>
                                        @error('status_dikeluarga')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <select name="warganegara" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Kewarganegaraan--</option>     
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                    </select>
                                        </div>
                                        @error('warganegara')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                                </div>
                                @error('pekerjaan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                            <div class="col-sm-6">
                            </div> <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan">
                                </div>
                                @error('pendidikan')
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
				text: "Mau di hapus data dengan id "+pendidikan_id+" !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = +pendidikan_id+"/delete/{{$kk->id}}"
				}
			});
		});
	</script>
	@stop