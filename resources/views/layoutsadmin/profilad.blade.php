@extends('layoutsadmin.main')
@section('container')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PROFIL
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ISI</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pro as $b)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$b->isi}}</td>
                                        <td>
                                <a href="/profiledit/{{$b->id}}"  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection