@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7 col-12">
                @foreach($berita as $b)
                <div class="news-block">
                    <div class="news-block-top">
                        <a href="/bacaberita/{{ $b->id }}">
                            <img src="{{url('/storage/berita')}}/{{$b->gambar}}" class="news-image img-fluid" alt="">
                        </a>

                        <div class="news-category-block">
                            <a href="/bacaberita/{{ $b->id }}" class="category-block-link">
                                {{$b->title}}
                            </a>
                        </div>
                    </div>

                    <div class="news-block-info">
                        <div class="d-flex mt-2">
                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 18, 2036
                                </p>
                            </div>

                            <div class="news-block-author mx-5">
                                <p>
                                    <i class="bi-person custom-icon me-1"></i>
                                    By Admin
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
                            <h4><a href="/bacaberita/{{ $b->id }}" class="news-block-title-link">{{$b->subjudul}}</a></h4>
                        </div>

                        <div class="news-block-body">
                            <p>{{$b->berita}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                <form class="custom-form search-form" action="#" method="post" role="form">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                    <button type="submit" class="form-control">
                        <i class="bi-search"></i>
                    </button>
                </form>

                <h5 class="mt-5 mb-3">Berita Apbdes</h5>
                @foreach($apbdes as $a)
                <div class="news-block news-block-two-col d-flex mt-4">
                    <div class="news-block-two-col-image-wrap">
                        <a href="#">
                            <img src="{{url('/storage/apbdes')}}/{{$a->gambar}}"" class="news-image img-fluid" alt="">
                        </a>
                    </div>

                    <div class="news-block-two-col-info">
                        <div class="news-block-title mb-2">
                            <h6><a href="#" class="news-block-title-link">{{$a->judul}}</a></h6>
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
</main>
@endsection