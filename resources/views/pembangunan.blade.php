@extends('layouts.main')
@section('container')
<section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h4>Pembangunan</h4>
                            <hr>
                        </div>
                        @foreach($pp as $a)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                            <div class="custom-block-wrap">
                                <img style="hight: 40px;" src="{{url('storage/pembangunan') }}/{{$a->gambar}}" class="custom-block-image img-fluid">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h6 style="color:Green;">{{$a->nama_keg}}</h6>
                                        <div class="font-thin">
                                            <i class="bi bi-calendar"></i>  {{$a->tahun}}<br>
                                            <i class="bi bi-geo-alt"></i> {{$a->alamat}}              
                                         </div>
                                    </div>
                                    <a href="/pembangunandetail/{{$a->id}}" class="custom-btn btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
@endsection
