    @extends('layoutsadmin.main')
@section('container')
<div class="container-fluid">
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="card">
              <div class="body">
                <div class="form-group">
                    <form action="/penduduk/cari" method="POST">
                            {{csrf_field()}}
                    <div class="col-lg-5">
                    <div class="form-line">
                        <select name="rw" class="form-control"> 
                        @foreach($rw as $r1)
                                    <option value="{{$r1->id}}">RW {{$r1->rw}} -> {{$r1->ketua_nama}}</option>
                                    @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-line">
                        <select name="rt" class="form-control"> 
                         @foreach($rt as $t)
                                    <option value="{{$t->id}}">RT {{$t->rt}} -> {{$t->nama_ketua}}</option>
                                    @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary waves-effect">CARI</button>
                    </form> 
                </div>
                </div>
            </div> 
            
</div>         
        </div>
</div>
    </div>
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nik</th>
                                            <th>TTL</th>
                                            <th>RT/RW</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penduduk as $r)
                                        <tr>
                                            <td>{{$r->nama}}</td>
                                            <td>{{$r->nik}}</td>
                                            <td>{{$r->tempat_lahir}}, {{$r->tgl_lahir}}</td>
                                            <td>{{$r->rt}} / {{$r->rw}}</td>
                                            <td>{{$r->status_pernikahan}}</td>
                                            
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    @stop