@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>LKMD</h2>
                <h4>Lembaga Kemasyarakatan Desa (LKMD) adalah salah satu lembaga kemasyaratan yang berada di desa.</h4>
                <br>
                <h4>TUGAS LKMD</h4>
                1. menyusun rencana pembangunan secara partisipatif,<br>
                2. menggerakkan swadaya gotong royong masyarakat,melaksanakan dan<br>
                3. mengendalikan pembangunan.
                <br>
                <br>
                <h4>FUNGSI LKMD</h4>
                1. penampungan dan penyaluran aspirasi masyarakat dalam pembangunan;<br>
                2. penanaman dan pemupukan rasa persatuan dan kesatuan masyarakat dalam kerangka memperkokoh Negara Kesatuan Republik Indonesia;<br>
                3. peningkatan kualitas dan percepatan pelayanan pemerintah kepada masyarakat;<br>
                4. penyusunan rencana, pelaksanaan, pelestarian dan pengembangan hasil-hasil pembangunan secara partisipatif;<br>
                5. penumbuhkembangan dan penggerak prakarsa, partisipasi, serta swadaya gotong royong masyarakat; dan<br>
                6. penggali, pendayagunaan dan pengembangan potensi sumber daya alam serta keserasian lingkungan hidup.
                <br>
                <br>
                <div style="text-align:center;"><h4>DAFTAR NAMA PENGURUS LKMD TAHAI BARU</h4></div><br>
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