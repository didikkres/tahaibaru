@extends('layouts.main')
@section('container')
<main>
<section class="news-section section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12">
                <h2 style="text-align:center">KELURAHAN TAHAI BARU</h2>
                    <p style="text-align: justify">{{$p->isi}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection