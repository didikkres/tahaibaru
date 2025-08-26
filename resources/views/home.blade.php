@extends('layouts.main')

@section('container')
<section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{url('home/images/slide/tb1.jpeg') }}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Pemerintah Desa</h1>
                                            
                                            <p>Tahai Baru Kec. Maliku Kab. Pulang Pisau Kalimantan Tengah</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{url('home/images/slide/volunteer-helping-with-donation-box.jpg') }}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>CSR</h1>
                                            
                                            <p>Pembangunan dan Pengembangan Food Estate di Kalimantan Tengah<br>Menteri Pertanian Republik Indonesia Syahrul Yasin Limpo<br>beserta jajarannya melakukan kunjungan</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{url('home/images/slide/medium-shot-people-collecting-donations.jpg') }}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>CSR</h1>
                                            
                                            <p>Menanam Padi Di Loksi Cetak Sawah Rakyat</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Selamat Datang Di Website Tahai Baru</h2>
                        </div>                      

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="{{url('home/images/group-people-volunteering-foodbank-poor-people.jpg') }}" class="custom-text-box-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">Desa Tahai Baru</h2>
                                <p class="mb-0">Tahai Baru adalah sebuah nama desa di wilayah Maliku, Kabupaten Pulang Pisau, Provinsi Kalimantan Tengah, Indonesia</p>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>
            <section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Foto Kegiatan</h2>
                        </div>
@foreach($galery as $g)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{url('/storage/galery')}}/{{$g->gambar}}" height="270">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">{{$g->judul}}</h5>

                                        <p>{{$g->isi}}</p>
                                    </div>

                                    <a href="" class="custom-btn btn">Lihat</a>
                                </div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </section>

            <section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Keluhan Masarakat</h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/postkeluhan" method="post" role="form">
                            {{csrf_field()}}    
                            <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="nama" id="volunteer-name" class="form-control" placeholder="Nama" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="text" name="nohp" id="volunteer-email" class="form-control" placeholder="Nomer Hp" required>
                                    </div>
                                </div>

                                <textarea name="keluhan" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="{{url('home/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg') }}" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                                <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5">
                            <h2>Berita</h2>
                        </div>

                        <div class="col-lg-7 col-12">
                            @foreach($berita as $b)
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="{{url('/storage/berita')}}/{{$b->gambar}}" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Lifestyle,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Clothing Donation
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                {{$b->created_at}}
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                {{$b->kategori}}
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                32 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">{{$b->title}}</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>{{$b->subjudul}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="#" method="get" role="form">
                                <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>

                            <h5 class="mt-5 mb-3">Berita Apbdes</h5>
                            @foreach($apbdes as $a)
                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="{{url('/storage/apbdes')}}/{{$a->gambar}}"" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">{{$a->judul}}</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            {{$a->created_at}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>
@endsection