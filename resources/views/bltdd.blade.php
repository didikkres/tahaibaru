@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2>BLT-DD</h2>
                Bantuan langsung tunai melalui dana desa (BLT-DD) adalah salah satu bantuan yang diberikan kepada masyarakat kurang mampu dan belum menerima bantuan dari pusat. Bantuan ini diserahkan langsung oleh Kepala Desa Pontang bersama Perangkat Desa Pontang, Babinsa, Babinkantibmas, beserta Pendamping Desa.
                <br>
                <h2>PKH</h2>
                PKH adalah singkatan dari Program Keluarga Harapan, yaitu program bantuan sosial bersyarat dari pemerintah Indonesia untuk keluarga miskin. Tujuannya adalah untuk mengurangi kemiskinan, meningkatkan taraf kesejahteraan, dan mendorong perubahan perilaku keluarga penerima manfaat. 
                <br>
                <h2>BLSM</h2>
                BLSM adalah singkatan dari Bantuan Langsung Sementara Masyarakat. Ini adalah program bantuan sosial dari pemerintah Indonesia yang diberikan kepada masyarakat miskin sebagai kompensasi atas kenaikan harga bahan bakar minyak (BBM). Program ini bertujuan untuk menjaga daya beli masyarakat miskin dan mengurangi dampak inflasi akibat kenaikan harga BBM. 
                <h2>BPNT</h2>
                BPNT adalah singkatan dari Bantuan Pangan Non Tunai. Ini adalah program bantuan sosial dari pemerintah Indonesia yang memberikan bantuan pangan kepada keluarga penerima manfaat (KPM) dalam bentuk non-tunai, yang disalurkan melalui mekanisme akun elektronik yang hanya dapat digunakan untuk membeli bahan pangan di pedagang yang bekerja sama dengan bank, yaitu e-warong. 
                <br>
                <br>
                <div style="text-align:center;"><h4>DAFTAR PENERIMA BANTUAN TAHAI BARU</h4></div><br>
                <div style="text-align:center;">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>BLDD</th>
                                        <th>PKH</th>
                                        <th>BLSM</th>
                                        <th>BPNT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pp as $r)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{$r->nama}}</td>
                                        <td>{{$r->bltdd}}</td>
                                        <td>{{$r->pkh}}</td>
                                        <td>{{$r->blsm}}</td>
                                        <td>{{$r->bpnt}}</td>
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