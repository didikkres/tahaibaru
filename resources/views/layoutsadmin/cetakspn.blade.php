<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Surat Keterangan</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'><link rel="stylesheet">
<style>
  h1,h3,h5,h6{
  text-align:center;
  padding-right:200px;
}

.keclogo{
  font-size:24px;
  font-size:2.8vw;
  line-height: 0.7;
}
.kablogo{
  font-size:2.5vw;
}
.alamatlogo{
  font-size:1.5vw;
}
#tls{
 text-align:right; 
}
.alamat{
  
}
.alamat-tujuan{
  margin-left:25%;
  line-height: 0.7;
}
.alamat-tujuan2{
  margin-left:35%;
  line-height: 0.7;
}
.garis1{
  border-top:3px solid black;
  height: 2px;
  border-bottom:1px solid black;
}
#logo{
  margin: auto;
  margin-left: 1%;
  margin-right: auto;
}
#tempat-tgl{
  margin-left:20px;
}
#ttd{
  margin-left: 50%;
}
#camat{
  margin-left: 30%;
}
#nama-camat{
  margin-top:100px;
  text-align:center;
}
</style>
</head>
  <body>
        <table width="100%">
<tr>
<td width="10" align="center"><img id="logo" src="{{url('admin/images/logo.jpg') }}" width="140" height="160" /></td>
<td width="70" align="center">
  <h3 class="kablogo"><font face="Times New Roman"><b>PEMERINTAH KABUPATEN PULANG PISAU</b></font></h3>
  <h1 class="keclogo"><font face="Times New Roman"><b>KECAMATAN MALIKU</b></font></h1>
  <h1 class="keclogo"><font face="Times New Roman"><b><strong>DESA TAHAI BARU</strong></b></h1>
  <h6 class="alamatlogo">Alamat : Jln. Pembangunan I</h6>
  <h5 class="kodeposlogo">Website : https://tahaibaru.id Telp. 082350654252 Kode Pos : 74873</h5>
</td>
</tr>
</table>
  <div class="container">
    <hr class="garis1"/>
    <br>
    <font face="Times New Roman" style="font-size: 20px;">
    <div id="alamat" class="row">
      <p class="alamat-tujuan"><b>SURAT KETERANGAN PENGHASILAN ORANG TUA</b></p>
      <p class="alamat-tujuan2">Nomor  :  {{$sr->no_surat}}</p>
    </div>
    <div id="pembuka" class="row"><font face="Times New Roman">Yang brtandatangan dibawah ini kepala desa tahai baru Kecamatan  Maliku Kabupaten Pulang Pisau menerangkan dengan sesungguhnya bahwa :</font></div>
    <div id="tempat-tgl">
      <table style="margin-top:20px">
        <tr>
          <td width="50%">Nama</td>
          <td>:</td>
          <td> {{$sr->nama}}</td>
        </tr>
        <tr>
          <td width="50%">BIN</td>
          <td>:</td>
          <td> {{$ayah->nama}}</td>
        </tr>
        <tr>
          <td width="50%">Jenis Kelamin</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->jekel}}</span></td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->tempat_lahir}}</span>, {{$sr->tgl_lahir}}</td>
        </tr>
        <tr>
          <td width="50%">Warga Negara</td>
          <td>:</td>
          <td> {{$sr->warganegara}}</td>
        </tr>
        <tr>
          <td width="50%">Agama</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->agama}}</span></td>
        </tr>
        <tr>
          <td width="50%">Pekerjaan</td>
          <td>:</td>
          <td> {{$sr->pekerjaan}}</td>
        </tr>
        <tr>
          <td width="50%">No NIK</td>
          <td>:</td>
          <td> {{$sr->nik}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> {{$sr->alamat}}</td>
        </tr>
        <tr>
          <td width="50%">Maksud/Tujuan</td>
          <td>:</td>
          <td> {{$sr->tujuan}}</td>
        </tr>
      </table>
      <div class="row" style="margin-top:20px"><font face="Times New Roman">Dengan Seorang Wanita</font></div>
      <table style="margin-top:20px">
        <tr>
          <td width="50%">Nama</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->namap}}</span></td>
        </tr>
        <tr>
          <td width="50%">BIN</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->binti}}</span></td>
        </tr>
        <tr>
          <td width="50%">Jenis Kelamin</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->jekelp}}</span></td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->tempat_lahir}}</span>, {{$sr->tgl_lahir}}</td>
        </tr>
        <tr>
          <td width="50%">Warga Negara</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->warganegarap}}</span></td>
        </tr>
        <tr>
          <td width="50%">Agama</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->agamap}}</span></td>
        </tr>
        <tr>
          <td width="50%">Pekerjaan</td>
          <td>:</td>
          <td> <span style="text-transform:uppercase">{{$sr->pekerjaanp}}</span></td>
        </tr>
        <tr>
          <td width="50%">No NIK</td>
          <td>:</td>
          <td> {{$sr->nikp}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> {{$sr->alamatp}}</td>
        </tr>
      </table>
    </div>
    <div id="penutup" style="margin-top:20px" >Demikian surat Pengantar  ini kami buat  untuk dapat di pergunakan sebagai mana mestinya.</div>
    <br>
      <br>
    <div id="ttd" class="row">
      <div class="col-md-4">
        <p id="camat">Tahai Baru, {{ date('d F Y') }}</strong></p>
        <p id="camat"><strong>@if($sr->ttd == "SURATMAN") Kepala @else PLT Kepala @endif Desa Tahai Baru</strong></p>
        <div id="nama-camat"><strong><u> @if($sr->ttd == "SURATMAN") SURATMAN @else HAMDIAMSYAH @endif</u></strong><br />
       @if($sr->ttd == "SURATMAN") NIP. 161 001 107 53 @else NIAP. 161 001 207 51  @endif</div>
    </div>
      </div>
</div>
</div> 
</font>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>
<script>
		window.onafterprint = window.close;
         window.print();
</script>
</html>
