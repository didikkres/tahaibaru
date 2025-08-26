@extends('layoutsadmin.main')
@section('container')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                  <h2>
                    TAMBAH BERITA
                  </h2>
            </div>
                <div class="body">
                    <form class="row g-2 m-3" action="/beritaadminpost" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                                    <div class="body">
                                         <h2 class="card-inside-title">
                                Judul Berita
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" name="title" class="form-control no-resize auto-growth" style="overflow: hidden; overflow-wrap: break-word; height: 32px;"></textarea>
                                </div>
                            </div>
                             <h2 class="card-inside-title">
                                Cuplikan Berita
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" name="subjudul" class="form-control no-resize auto-growth"  style="overflow: hidden; overflow-wrap: break-word; height: 32px;"></textarea>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Isi Berita</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea id="ckeditor" rows="4" name="berita" class="form-control no-resize" ></textarea>
                                        </div>
                                    </div>
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
                        