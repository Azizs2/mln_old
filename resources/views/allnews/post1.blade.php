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
                            <div class="news-block-top">
                                <img src="{{ asset('assets/images/news/talas1.jpg') }}" class="news-image img-fluid"
                                    alt="">

                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            July 31, 2023
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By SA
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4>Colocasia Bogor</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        <strong>Talas Bogor (Colocasia Bogor)</strong>
                                        is a type of taro originating from the city of Bogor, West Java, Indonesia. It
                                        thrives in the Bogor area where the climate and soil are suitable for its growth.
                                        Bogor taro has a history and origins associated with Bogor's local agricultural
                                        wisdom. Talas Bogor has long been used in various traditional food preparations and
                                        has become one of Bogor's sought-after souvenirs by tourists.
                                    </p>

                                    <p>All parts of the taro plant can be utilised as derivative products. Bogor taro is
                                        widely processed into various types of snacks such as taro chips. In addition, Bogor
                                        taro can also be processed into steamed taro, taro sticks, taro ice cream, milk,
                                        fried taro, taro pudding, and taro cakes. The development of processed Bogor taro
                                        provides variety and added value to Bogor taro as a food ingredient.</p>


                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/news/talas.jpg') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('assets/images/news/talas3.jpg') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>
                                </div>

                                <p>Bogor taro has nutritional content that is good for health. Bogor taro contains complex
                                    carbohydrates that can provide long-lasting energy for the body. It is also high in
                                    dietary fibre, which can help maintain digestive health and reduce the risk of
                                    constipation. In addition, Bogor taro contains various important vitamins and minerals
                                    such as vitamin C, vitamin B6, potassium, magnesium, and iron. Bogor taro also contains
                                    antioxidant compounds such as beta-carotene and flavonoids, which can help protect body
                                    cells from free radical damage.</p>
                                <p>
                                    Bogor taro has beneficial health benefits. It can help maintain heart health and reduce
                                    the risk of cardiovascular disease. In addition, Bogor taro can also help maintain
                                    healthy skin and increase collagen production. Bogor taro can also help boost the immune
                                    system and maintain electrolyte balance and healthy muscle function.
                                </p>
                                <p>
                                    From some of the information above, it can be concluded that Bogor taro is a delicious
                                    type of taro and is widely used for various food preparations. Bogor taro also has good
                                    nutritional content and benefits that are beneficial to health. Bogor taro is also one
                                    of the typical Bogor souvenirs sought after by tourists.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <h5 class="mt-5 mb-3">Recent news</h5>

                        {{-- <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('assetsimages/news/africa-humanitarian-aid-doctor.jpg') }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation
                                            area</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('assets/images/news/close-up-happy-people-working-together.jpg') }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering
                                            Clean</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 20, 2036
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
