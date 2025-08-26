@extends('layouts.main')
@section('container')
<section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        @if(Session::has('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>Surat Berhasil di buat. Silahkan ambil surat di kantor desa dalam 2-3 hari kerja</p>
<button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span aria-hidden="true">&times;</span>
</button>                            
</div>
@endif
                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Surat Menyurat</h2>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Keterangan Desa</h5>
                                    </div>
                                    <a href="/cari/Surat Keterangan" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Keterangan Penghasilan Ortu</h5>
                                    </div>
                                    <a href="/cari/Surat Keterangan Penghasilan Ortu" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Keterangan Domisili</h5>
                                    </div>
                                    <a href="/cari/Surat Keterangan Domisili" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Keterangan Usha</h5>
                                    </div>
                                    <a href="/cari/Surat Keterangan Usaha" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Pindah Nikah</h5>
                                    </div>
                                    <a href="/cari/Surat Pindah Nikah" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Pengantar Nikah</h5>
                                    </div>
                                    <a href="/cari/Surat Pengantar Nikah" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Pengantar Skck</h5>
                                    </div>
                                    <a href="/cari/Surat Pengantar SKCK" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Pengantar KTP</h5>
                                    </div>
                                    <a href="/cari/Surat Pengantar KTP" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/surat.jpg') }}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Surat Pengantar Ijin Keramaian</h5>
                                    </div>
                                    <a href="/cari/Surat Pengantar Ijin Keramaian" class="custom-btn btn">Buat Surat</a>
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </section>
@endsection
