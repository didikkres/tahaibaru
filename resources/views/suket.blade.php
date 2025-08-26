@extends('layouts.main')
@section('container')
    <div class="container p-2">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="card">
  <div class="card-header">
    Permohonan {{$ket}}
  </div>
  <form class="row g-2 m-3" action="/createsurat" method="POST">
    {{csrf_field()}}
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" value="{{$penduduk->nama}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="inputPassword4" value="{{$penduduk->jekel}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Tempat Tanggal Lahir</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$penduduk->tempat_lahir}}, {{$penduduk->tgl_lahir}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Agama</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$penduduk->agama}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Pekerjaan</label>
    <input type="text" class="form-control" id="inputAddress2" value="{{$penduduk->pekerjaan}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">NIK</label>
    <input type="text" class="form-control" id="inputAddress2" value="{{$penduduk->nik}}" name="nik" disabled>
    <input type="text" class="form-control" id="inputAddress2" value="{{$penduduk->nik}}" name="nik" hidden>
    <input type="text" class="form-control" id="inputAddress2" value="@if($ket == 'Surat Keterangan Penghasilan Ortu') skpo @elseif($ket == 'Surat Keterangan') suket @elseif($ket == 'Surat Keterangan Domisili') domisil @elseif($ket == 'Surat Keterangan Usaha') sku @elseif($ket == 'Surat Pindah Nikah') spn @elseif($ket == 'Surat Pengantar Nikah') spnk @elseif($ket == 'Surat Pengantar SKCK') skck @elseif($ket == 'Surat Pengantar KTP') ktp @elseif($ket == 'Surat Pengantar Ijin Keramaian') spik @endif" name="link" hidden>
    <input type="text" class="form-control" id="inputAddress2" value="{{$ket}}" name="jenis_surat" hidden>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputCity" value="{{$penduduk->alamat}}" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Keperluan Surat</label>
    <input type="text" class="form-control" id="inputCity" name="keterangan">
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>

@endsection