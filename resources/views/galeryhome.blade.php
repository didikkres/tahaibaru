@extends('layouts.main')
@section('css')
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 210px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
@stop
@section('container')
<section id="berita">
  <div class="container">
    <div class="section-title">
      <h2>GALERY</h2>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-sm-12">
          @foreach($galery as $galery)
        <div class="gallery">
          <a target="_blank" href="{{url('/storage/galery')}}/{{$galery->gambar}}">
            <img src="{{url('/storage/galery')}}/{{$galery->gambar}}" alt="Cinque Terre" width="600" height="600">
          </a>
          <div class="desc">{{$galery->judul}}</div>
        </div>
        @endforeach
      </div>
      </div>
    </div>
  </section>
  @endsection







                                    