@extends('layoutsadmin.main')
@section('container')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                  <h2>
                    KONFIRMASI SURAT PENGANTAR KTP
                  </h2>
            </div>
                <div class="body">
                    <form class="row g-2 m-3" action="/postktp/{{$sr->id}}" method="POST">
                         {{csrf_field()}}
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanda Tangan</label>
                                    </div>
                                    <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="ttd"  class="form-control">
                                    <option value="">--- PILIH TANDA TANGAN ---</option>
                                    <option value="SURATMAN">SURATMAN</option>
                                    <option value="HAMDIAMZAH">HAMDIAMZAH</option>
                                    </select>
                                            </div>
                                            @error('ttd')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">No. Surat</label>
                                    </div>
                                    <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="no_surat" class="form-control" placeholder="Isi No. Surat">
                                            </div>
                                             @error('no_surat')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">DATA PEMOHON</h2>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" value="{{$sr->nama}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tempat, Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" value="{{$sr->tempat_lahir}}, {{$sr->tgl_lahir}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Agama</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$sr->agama}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nik</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$sr->nik}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Alamat</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" value="{{$sr->alamat}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Status Penikahan</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$sr->status_pernikahan}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Keperluan</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$sr->jenis_surat}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                               <button type="submit" class="btn btn-block btn-lg btn-success waves-effect">
                                    <i class="material-icons">done</i>
                                    <span>KONFIRMASI</span>
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
                        