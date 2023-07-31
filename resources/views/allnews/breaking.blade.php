@extends('app_2')

@section('content')
    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">Breaking News</h1>
                </div>

            </div>
        </div>
    </section>
    <section>
        @include('allnews.allnews')
    </section>
@endsection
