@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>Karang Taruna</h2>
                <br>
                <h4>TUGAS  KARANGTARUNA</h4>
                menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya
                <br>
                <br>
                <h4>FUNGSI KARANGTAURNA</h4>

                    1. penyelenggara usaha kesejahteraan sosial;<br>
                    2. penyelenggara pendidikan dan pelatihan bagi masyarakat;<br>
                    3. penyelenggara pemberdayaan masyarakat terutama generasi muda di lingkungannya secara komprehensif, terpadu dan terarah serta berkesinambungan;<br>
                    4. penyelenggara kegiatan pengembangan jiwa kewirausahaan bagi generasi muda di lingkungannya;<br>
                    5. penanaman pengertian, memupuk dan meningkatkan kesadaran tanggung jawab sosial generasi muda;<br>
                    6. penumbuhan dan pengembangan semangat kebersamaan, jiwa kekeluargaan, kesetiakawanan sosial dan memperkuat nilai-nilai kearifan dalam bingkai Negara Kesatuan Republik Indonesia;<br><br>
                <div style="text-align:center;"><h4>DAFTAR NAMA PENGURUS KARANGTARUNA TAHAI BARU</h4></div><br>
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