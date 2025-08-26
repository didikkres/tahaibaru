@extends('layouts.main')
@section('container')
    <div class="container p-2">
        <div class="row">
            @if(empty($no))
@else
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <p>Nik Tidak dapat ditemukan atau Belum terdaftar dalam aplikasi ini, Silahkan Hubungi Pemerintah Desa Untuk Melakukan Pendaftaran Sebagai Penduduk</p>
<button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span aria-hidden="true">&times;</span>
</button>                            
</div>
                        @endif
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('home/images/logo1.png') }}" class="custom-block-image img-fluid" alt="">
                                <form action="/carinik" method="GET">
                        
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <p>NIK (Nomor Induk Kependudukan)</p>
                                        <input type="text" name="ket" id="volunteer-name" class="form-control" value="{{$ket}}" hidden>
                                        <input type="number" name="nik" id="volunteer-name" class="form-control" required="">
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary mb-2" type="button"><i class="bi bi-search"></i>  Cek Nik</button>
                                    </div>
                                </div>
                                </form> 
                            </div>
                        </div>
        </div>
    </div>

@endsection