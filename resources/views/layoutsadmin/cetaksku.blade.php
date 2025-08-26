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
  margin-left:37%;
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
      <p class="alamat-tujuan"><b>SURAT KETERANGAN USAHA</b></p>
      <p class="alamat-tujuan2">Nomor  :  {{$sr->no_surat}}</p>
    </div>
    <br>
    <div id="pembuka" class="row"><font face="Times New Roman">Yang bertanda tangan di bawah ini Kepala Desa Tahai Baru Kecamatan Maliku Kabupaten Pulang Pisau, dengan ini menerangkan dengan sesungguhnya bahwa :</font></div>
    <div id="tempat-tgl">
      <br>
      <table>
        <tr>
          <td width="50%">N I K</td>
          <td>:</td>
          <td> {{$sr->nik}}</td>
        </tr>
        <tr>
          <td>N a m a</td>
          <td>:</td>
          <td> {{$sr->nama}}</td>
        </tr>
        <tr>
          <td>Tempat/tanggal lahir</td>
          <td>:</td>
          <td> {{$sr->tempat_lahir}}, {{$sr->tgl_lahir}}</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td> {{$sr->jekel}}</td>
        </tr>
        <tr>
          <td>A g a m a</td>
          <td>:</td>
          <td> {{$sr->agama}}</td>
        </tr>
        <tr>
          <td>Kewarganegaraan</td>
          <td>:</td>
          <td> {{$sr->warganegara}}</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td> {{$sr->pekerjaan}}</td>
        </tr>
        <tr>
          <td>Status Perkawinan</td>
          <td>:</td>
          <td> {{$sr->status_pernikahan}}</td>
        </tr>
        <tr>
          <td>Pendidikan Terakir</td>
          <td>:</td>
          <td> {{$sr->pendidikan}}</td>
        </tr>
        <tr>
          <td>A l a m a t</td>
          <td>:</td>
          <td> {{$sr->alamat}}</td>
        </tr>
      </table>
      <br>
<div class="row"><font face="Times New Roman">Sepanjang pengamatan kami hingga saat Surat Keterangan ini dikeluarkan yang namanya tersebut diatas benar mempunyai sebuah usaha sebagai berikut :</font></div><br>
    <table>
        <tr>
          <td width="60%">Nama Usaha</td>
          <td>:</td>
          <td> {{$sr->nama_usaha}}</td>
        </tr>
        <tr>
          <td>Jenis Usaha</td>
          <td>:</td>
          <td> {{$sr->jenis_usaha}}</td>
        </tr>
        <tr>
          <td>Alamat Usaha</td>
          <td>:</td>
          <td> {{$sr->alamat_usaha}}</td>
        <tr>
      </table>
    <br>
    </div>
   <div id="penutup">Demikian Surat Keterangan Usaha ini kami buat dengan benar untuk dapat dipergunakan sebagaimana mestinya.</div><br>
      <br>
      <br>
    <div id="ttd" class="row">
      <div class="col-md-4">
        <p id="camat">Tahai Baru, {{ date('d F Y') }}</strong></p>
        <p id="camat"><strong>@if($sr->ttd == "SURATMAN") Kepala @else PLT Kepala @endif Desa Tahai Baru</strong></p>
        <div id="nama-camat"><strong><u> @if($sr->ttd == "SURATMAN") SURATMAN @else HAMDIAMSYAH @endif</u></strong><br />
      NIAP. @if($sr->ttd == "SURATMAN") 161 001 107 53 @else 161 001 207 51  @endif</div>
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
