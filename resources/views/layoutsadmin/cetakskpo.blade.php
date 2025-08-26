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
    <br>
    <div id="pembuka" class="row"><font face="Times New Roman">Yang bertanda tangan di bawah ini :</font></div>
    <div id="tempat-tgl">
      <br>
      <table>
        <tr>
          <td width="50%">Nama Ayah</td>
          <td>:</td>
          <td> {{$ayah->nama}}</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td> {{$ayah->tempat_lahir}}, {{$ayah->tgl_lahir}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> {{$ayah->alamat}}</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td> {{$ayah->pekerjaan}}</td>
        </tr>
        <tr>
          <td>Penghasilan Perbulan</td>
          <td>:</td>
          <td> Rp. {{number_format($sr->payah, 2, ",", ".")}}</td>
        </tr>
        <tr>
          <td><br></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>:</td>
          <td> {{$ibu->nama}}</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td> {{$ibu->tempat_lahir}}, {{$ibu->tgl_lahir}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> {{$ibu->alamat}}</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td> {{$ibu->pekerjaan}}</td>
        </tr>
        <tr>
          <td>Penghasilan Perbulan</td>
          <td>:</td>
          <td> Rp. {{number_format($sr->pibu, 2, ",", ".")}}</td>
        </tr>
      </table>
      <br>
      <div class="row"><font face="Times New Roman">Tersebut Diatas Adalah Orang Tua Dari :</font></div>
      <br>
      <table>
        <tr>
          <td width="50%">Nama</td>
          <td>:</td>
          <td> {{$sr->nama}}</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td> {{$sr->tempat_lahir}}, {{$sr->tgl_lahir}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> {{$sr->alamat}}</td>
        </tr>
        <tr>
      </table>
      <br>
    </div>
    <div id="penutup">Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya untuk melengkapi persyaratan permohonan.</div>
    <br>
      <br>
    <div id="ttd" class="row">
      <div class="col-md-4">
        <p id="camat">Tahai Baru, {{ date('d F Y') }}</strong></p>
        <p id="camat"><strong>@if($sr->ttd == "SURATMAN") Kepala @else Sekertaris @endif Desa Tahai Baru</strong></p>
        <div id="nama-camat"><strong><u> @if($sr->ttd == "SURATMAN") SURATMAN @else HAMDIAMSYAH @endif</u></strong><br />
      NIP. @if($sr->ttd == "SURATMAN") 16100110753 @else 161 001 207 51  @endif</div>
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
