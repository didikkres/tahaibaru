@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>PKK</h2>
                <br>
                <h4>TUGAS PKK</h4>
                (Pemberdayaan dan Kesejahteraan Keluarga) adalah memberdayakan keluarga untuk meningkatkan kesejahteraan dan kemandirian mereka. PKK memiliki 10 Program Pokok PKK yang menjadi panduan kegiatan, meliputi Penghayatan dan Pengamalan Pancasila, Gotong Royong, Pangan, Sandang, Perumahan dan Tata Laksana Rumah Tangga, Pendidikan dan Keterampilan, Kesehatan, Pengembangan Kehidupan Berkoperasi, Kelestarian Lingkungan Hidup, dan Perencanaan Sehat.
                <br>
                <br>
                <h4>FUNGSI PKK</h4>
                (Pembinaan Kesejahteraan Keluarga) memiliki beberapa fungsi utama, yaitu sebagai mitra pemerintah dalam pembangunan keluarga sejahtera, penggerak partisipasi masyarakat, penyuluh dan pendamping keluarga, serta pelaksana program-program yang menyentuh berbagai aspek kehidupan keluarga. PKK juga memiliki 10 program pokok yang menjadi fokus kegiatannya. 
                <br>
                <br>
                <div style="text-align:center;"><h4>DAFTAR NAMA PENGURUS PKK TAHAI BARU</h4></div><br>
                <div style="text-align:center;">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>JABATAN</th>
                                        <th>MASA JABATAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data_lkk as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama}}</td>
                                        <td style="text-transform: uppercase;">{{$r->jabatan}}</td>
                                        <td>{{$r->masa_jabatan}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection