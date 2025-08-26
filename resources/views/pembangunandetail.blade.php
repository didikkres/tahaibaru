@extends('layouts.main')
@section('container')
<section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h4>{{$pp->nama_keg}}</h4>
                            <hr>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/') }}/{{$pp->gambar}}" class="custom-block-image img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                            <h4>Lokasi Pembangunan</h4>
                            <div class="custom-block-wrap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63744.95341472843!2d114.19380046288393!3d-3.078766495918058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4747eeeae79b1%3A0x4ef5742010ddf5ce!2sTahai%20Baru%2C%20Kec.%20Maliku%2C%20Kabupaten%20Pulang%20Pisau%2C%20Kalimantan%20Tengah!5e0!3m2!1sid!2sid!4v1755056056452!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                            <br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <tbody>
                                   <tr>
                                        <th>Nama Kegiatan</th>
                                        <th>:</th>
                                        <th>{{$pp->nama_keg}}</th>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <th>{{$pp->alamat}}</th>
                                    </tr>
                                    <tr>
                                        <th>Sumber Dana</th>
                                        <th>:</th>
                                        <th>{{$pp->sumber_dana}}</th>
                                    </tr>
                                    <tr>
                                        <th>Anggarran</th>
                                        <th>:</th>
                                        <th>{{$pp->anggaran}}</th>
                                    </tr>
                                    <tr>
                                        <th>Volume</th>
                                        <th>:</th>
                                        <th>{{$pp->volume}}</th>
                                    </tr>
                                    <tr>
                                        <th>Pelaksana</th>
                                        <th>:</th>
                                        <th>{{$pp->pelaksana}}</th>
                                    </tr>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>:</th>
                                        <th>{{$pp->tahun}}</th>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>:</th>
                                        <th>{{$pp->keterangan}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
@endsection
