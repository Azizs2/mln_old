@extends('app_2')

@section('content')
    <main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">News Detail</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            February 20, 2024
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By AN
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4>From Local to Global</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        <strong>From Local to Global: The Success Story of PT Maju Lokal Nusantara in
                                            Developing Business and Selling Seafood Products Internationally</strong>
                                    <P>PT Maju
                                        Lokal Nusantara is one of the seafood export companies in Indonesia. With the motto
                                        "From Local To Global", the company has successfully expanded its business reach
                                        from local to global.</p>
                                    </p>
                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/Products/MadeInIndonesia.jpg') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-12">
                                        <img src="{{ asset('assets/images/Products/vaname_2.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div> --}}
                                </div>
                                <p>

                                    Support from the government and official permission from the ministry of foreign affairs
                                    is one of the key success factors of this company. This allows PT Maju Lokal Nusantara
                                    to cooperate with various countries in the world and expand its product market.
                                </p>
                                <p>Indonesia's long coastline provides great potential for the company to supply seafood
                                    products. PT Maju Lokal Nusantara has successfully shipped its products to America and
                                    successfully sold seafood products in the international market.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <h5 class="mt-5 mb-3">Recent news</h5>



                        <div class="news-block news-block-two-col d-flex mt-4">


                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ url('post4') }}" class="news-block-title-link">Lobster: Delicious,
                                            Rare,
                                            and Beneficial</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        February 20, 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ url('post1') }}" class="news-block-title-link">Tuna Healty Benefits of
                                            Tuna</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        January 26, 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            {{-- <div class="news-block-two-col-image-wrap">
                                <a href="{{ url('post2') }}">
                                    <img src="{{ asset('assets/images/Products/vaname_1.png') }}" class="news-image img-fluid"
                                        alt="">
                                </a>
                            </div> --}}

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ url('post2') }}" class="news-block-title-link">Nutritional Bounty of
                                            Panami Shrimp</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        January 26, 2024
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
