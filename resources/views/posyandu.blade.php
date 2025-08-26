@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>POSYANDU</h2>
                <br>
                <h4>TUGAS POSYANDU</h4>
                Tugas-tugas Posyandu secara rinci meliputi:<br>
1. Pelayanan Kesehatan Dasar:<br>
Penimbangan dan Pemantauan Pertumbuhan Balita: Mengukur berat badan dan tinggi badan balita, serta mencatatnya dalam Kartu Menuju Sehat (KMS). 
Imunisasi: Memberikan imunisasi dasar lengkap untuk bayi dan balita. 
Penyuluhan Kesehatan: Memberikan informasi tentang kesehatan ibu dan anak, gizi, serta pencegahan penyakit. 
Pemberian Makanan Tambahan (PMT): Memberikan makanan tambahan untuk balita dan ibu hamil yang membutuhkan. 
Pelayanan Kesehatan Ibu Hamil: Memantau kesehatan ibu hamil, memberikan vitamin dan suplemen, serta memberikan informasi tentang perawatan kehamilan dan persalinan. <br>
2. Kegiatan Pengembangan:<br>
Bina Keluarga Balita (BKB):
Memberikan pendidikan dan informasi tentang pengasuhan anak kepada orang tua. 
Tanaman Obat Keluarga (TOGA):
Mengembangkan TOGA di lingkungan masyarakat untuk pemanfaatan tanaman obat. 
Bina Keluarga Lansia (BKL):
Memberikan informasi dan kegiatan untuk meningkatkan kesehatan dan kesejahteraan lansia. 
Pendidikan Anak Usia Dini (PAUD):
Mendukung pendidikan anak usia dini di tingkat desa. <br>
3. Peran Kader Posyandu:<br>
Penggerak Masyarakat: Mengajak dan menggerakkan masyarakat untuk memanfaatkan layanan Posyandu.
Penyuluh Kesehatan: Memberikan informasi dan edukasi tentang kesehatan kepada masyarakat.
Pelaksana Kegiatan: Membantu dalam pelaksanaan kegiatan Posyandu, seperti pendaftaran, penimbangan, dan penyuluhan.
Pendata: Melakukan pencatatan dan pelaporan kegiatan Posyandu. <br>
4. Pemberdayaan Masyarakat:<br>
Posyandu berperan sebagai wadah bagi masyarakat untuk saling berbagi informasi dan keterampilan terkait kesehatan, serta untuk meningkatkan peran serta masyarakat dalam pembangunan kesehatan. 
Melalui Posyandu, masyarakat diharapkan dapat lebih mandiri dalam menjaga kesehatan diri dan keluarga. 
                <br>
                <br>
                <div style="text-align:center;"><h4>DAFTAR NAMA PENGURUS POSYANDU TAHAI BARU</h4></div><br>
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