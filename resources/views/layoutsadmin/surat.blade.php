@extends('layoutsadmin.main')
@section('container')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PERMINTAAN SURAT
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
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Jenis Surat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($sr as $r)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{$r->nik}}</td>
                                        <td>{{$r->nama}}</td>
                                        <td>{{$r->jenis_surat}}</td>
                                        <td>@if ($r->status == 0)
                                            <button type="button" class="btn btn-danger waves-effect">
                                    <i class="material-icons">watch_later</i>
                                    <span>PENDING</span>
                                </button>
                                       @else

                                        @endif
                            </td>
                                        <td>
                                            <a href="/{{$r->link}}/{{$r->id}}" class="btn btn-success waves-effect">
                                    <i class="material-icons">done</i>
                                    <span>KONFIRMASI</span>
                                </a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
