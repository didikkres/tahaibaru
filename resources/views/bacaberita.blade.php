@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                @foreach($berita as $b)
                <div class="news-block">
                    <div class="news-block-top">
                        <a href="#">
                            <img src="{{url('/storage/berita')}}/{{$b->gambar}}" class="news-image img-fluid" alt="">
                        </a>

                        <div class="news-category-block">
                            <a href="#" class="category-block-link">
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
                        </div>

                        <div class="news-block-title mb-2">
                            <h4><a href="#" class="news-block-title-link">{{$b->subjudul}}</a></h4>
                        </div>

                        <div class="news-block-body">
                            <p>{{$b->berita}}</p>
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