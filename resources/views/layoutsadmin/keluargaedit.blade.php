@extends('layoutsadmin.main')
@section('container')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                  <h2>
                    EDIT KARTU KELUARGA
                  </h2>
            </div>
                <div class="body">
                    <form class="row g-2 m-3" action="/keluargaupdate/{{$kk->id}}" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                                 @method('PUT')
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" value="{{$kk->nama}}" name="nama">
                                            <input type="text" value="{{$kk->kk_id}}" name="kk_id" hidden>
                                            </div>
                                            @error('nama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nik</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="nik" value="{{$kk->nik}}">
                                            </div>
                                            @error('nik')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{$kk->tempat_lahir}}">
                                    @error('tempat_lahir')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tgl_lahir" value="{{$kk->tgl_lahir}}">
                                    @error('tgl_lahir')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Agama</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-line">
                                    <select name="agama" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Agama--</option>     
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buda">Buda</option>
                                    </select>
                                    @error('agama')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Usia</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="usia" value="{{$kk->usia}}">
                                    @error('usia')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Status Pernikahan</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <select name="status_pernikahan" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Status Pernikahan--</option>     
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Cerai">Cerai</option>
                                                                        </select>
                                    @error('status_pernikahan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Status Dikeluarga</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <select name="status_dikeluarga" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Status Dikeluarga--</option>     
                                    <option value="Kepala Rumah Tangga">Kepala Rumah Tangga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Lainya">Lainnya</option>
                                    </select>
                                    @error('status_dikeluarga')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <select name="jekel" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Jenis Kelamin--</option>     
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jekel')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kewarganegaraan</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <select name="warganegara" id="subjects" class="form-control"> 
                                    <option value="">--Pilih Kewarganegaraan--</option>     
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                    </select>
                                    @error('warganegara')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Pekerjaan</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="pekerjaan" value="{{$kk->pekerjaan}}">
                                            </div>
                                            @error('pekerjaan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Pendidikan</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="pendidikan" value="{{$kk->pendidikan}}">
                                            </div>
                                            @error('pendidikan')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Alamat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="alamat" value="{{$kk->alamat}}">
                                            </div>
                                            @error('alamat')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    
                              <button type="submit" class="btn btn-block btn-lg btn-success waves-effect">
                                    <i class="material-icons">done</i>
                                    <span>SAVE</span>
                                </button>
                                </form>
                                        </div>
                                    </div>
                                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                        