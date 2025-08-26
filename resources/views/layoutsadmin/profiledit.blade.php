@extends('layoutsadmin.main')
@section('container')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                  <h2>
                    <p style="text-transform: uppercase;">{{$pro->kategori}}</p>
                  </h2>
            </div>
                <div class="body">
                    <form class="row g-2 m-3" action="/profileditya/{{$pro->id}}" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="10" name="isi" class="form-control no-resize" >{{$pro->isi}}</textarea>
                                        </div>
                                    </div>
                                </div>
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
                        