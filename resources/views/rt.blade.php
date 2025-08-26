@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>RT RW</h2>
                <br>
                <h4>TUGAS RT</h4>
                1. membantu terwujudnya kehidupan masyarakat berdasarkan Pancasila dan Undang-Undang Dasar 1945;<br>
                2. membantu penyelenggaraan tugas pemerintah Desa dalam memberikan pelayanan kepada masyarakat di wilayah kerjanya;<br>
                3. menggerakkan partisipasi dan pemberdayaan masyarakat dalam pembangunan Desa;<br>
                4. membantu Pemerintah Desa dalam kebersihan dan penataan lingkungan;<br>
                5. membantu terciptanya ketentraman dan ketertiban umum;<br>
                6. menjembatani hubungan antar sesama anggota masyarakat dan antar anggota masyarakat dengan pemerintah Desa;<br>
                7. menumbuhkembangkan kehidupan gotong-royong dan sosial kemasyarakatan; dan melaksanakan kegiatan lain sesuai dengan kebutuhan dan kondisi masyarakat setempat.\
                <br>
                <br>
                <div style="text-align:center;"><h4>DAFTAR NAMA RT TAHAI BARU</h4></div><br>
                <div style="text-align:center;">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>RT</th>
                                        <th>PRIODE</th>
                                        <th>RW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($rt as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama_ketua}}</td>
                                        <td>{{$r->rt}}</td>
                                        <td>{{$r->priode1}}-{{$r->priode2}}</td>
                                        <td>{{$r->rw}}</td>
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