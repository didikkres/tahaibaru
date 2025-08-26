@extends('layoutsadmin.main')
@section('container')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                  <h2>
                    EDIT GALERY
                  </h2>
            </div>
                <div class="body">
                    <form class="row g-2 m-3" action="/galeryadminpost/{{$kk->id}}" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                         @method('PUT')
                                    <div class="body">
                                         <h2 class="card-inside-title">
                                Judul
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" name="judul" class="form-control no-resize auto-growth" style="overflow: hidden; overflow-wrap: break-word; height: 32px;">{{$kk->judul}}</textarea>
                                </div>
                            </div>
                             <h2 class="card-inside-title">
                                Isi
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" name="isi" class="form-control no-resize auto-growth"  style="overflow: hidden; overflow-wrap: break-word; height: 32px;">{{$kk->isi}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input  type="file" name="gambar" class="form-control">
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
                        