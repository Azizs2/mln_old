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
                                    <h4>Lobster: Delicious, Rare, and Beneficial</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        Hello, Seafood Lovers! Who doesn't love seafood, especially lobster? Lobster is
                                        indeed a champion in tantalizing the taste buds. But, did you know that lobster is
                                        not only delicious but also has incredible health benefits? Let's read this article
                                        to the end!
                                    </p>
                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/Products/lobster_1.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-12">
                                        <img src="{{ asset('assets/images/Products/vaname_2.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div> --}}
                                </div>

                                <p>
                                    <strong>Rare Delicacy</strong>
                                </p>
                                <p>
                                    Lobster is known as a luxurious food that always makes the mouth water. Its tender and
                                    sweet meat is irresistible to anyone. No wonder lobster is often the favorite in
                                    expensive restaurants. But, apart from being delicious, lobster also has health benefits
                                    that should not be underestimated!
                                </p>
                                <p><strong>Amazing Health Benefits</strong></p>
                                <p>
                                    It turns out that lobster is rich in high-quality protein and low in fat. So, for those
                                    on a high-protein diet, lobster can be a good choice. In addition, lobster also contains
                                    important minerals such as selenium, copper, zinc, phosphorus, and magnesium, which are
                                    good for the body's health. So, it's not just delicious, but also healthy!
                                </p>
                                <p><strong>Lobster: Prohibitions and Uniqueness</strong></p>
                                <p>Apparently, lobsters also have unique aspects. Some rare lobster species are even
                                    protected because of their unique colors. For example, there is a bright yellow crystal
                                    lobster that is super rare. In addition, there is also a prohibition on consuming
                                    lobster during the Chinese New Year celebration, but certain parts of this lobster are
                                    claimed to prevent deadly diseases. Who would have thought, right?
                                </p>
                                <p>So, that's a little story about lobster. In addition to tantalizing the taste buds,
                                    lobster also has health benefits that should not be ignored. So, when else can you try
                                    lobster and enjoy its deliciousness while benefiting your health? Enjoy, Seafood Lovers!
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ url('post1') }}" class="news-block-title-link">From Local to Global</a>
                                    </h6>
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
