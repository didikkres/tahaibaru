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
                    <form class="row g-2 m-3" action="/kkupdate/{{$kk->id}}" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                                 @method('PUT')
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Kepala Keluarga</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" value="{{$kk->namakk}}" name="namakk">
                                            </div>
                                            @error('nama_usaha')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">No Kartu Keluarga</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="nokk" value="{{$kk->nokk}}">
                                            </div>
                                            @error('jenis_usaha')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">RT</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-line">
                                    <select name="rt_id" id="subjects" class="form-control">
                                    <option value="">--- Pilih Ketua RT ---</option>
                                    @foreach($rt as $t)
                                    <option value="{{$t->id}}" {{ old('rt_id') == $t->id ? 'selected' : null}}>RT {{$t->rt}} -> {{$t->nama_ketua}}</option>
                                    @endforeach
                                    </select>
                                    @error('rt_id')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">RW</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                <div class="form-line">
                                    <select name="rw_id" id="subjects" class="form-control">
                                    <option value="">--- Pilih Ketua RW ---</option>
                                    @foreach($rw as $r)
                                    <option value="{{$r->id}}" {{ old('rw_id') == $r->id ? 'selected' : null}}>RW {{$r->rw}} -> {{$r->ketua_nama}}</option>
                                    @endforeach
                                    </select>
                                    @error('rw_id')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Status Ekonomi</label>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="status_eko" value="{{$kk->status_eko}}">
                                            </div>
                                            @error('jenis_usaha')
                                    <label id="email-error" class="error" for="email" style="display: block;">{{$message}}</label>
                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{url('/storage/fotokk') }}/{{$kk->foto}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{url('/storage/fotokk') }}/{{$kk->foto}}">
                                    </a>
                                </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-group">
                                <div class="form-line">
                                    <input  type="file" name="foto" class="form-control">
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
                        