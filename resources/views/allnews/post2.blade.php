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
                                            January 26, 2024
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
                                    <h4>Nutritional Bounty of Panami Shrimp</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        <strong>Panami shrimp, or Vannamei</strong>
                                        is a species of shrimp found in many Indonesian waters. It is popular in the
                                        aquaculture world for its fast growth, high meat quality, and resistance to certain
                                        diseases.
                                    </p>
                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/Products/vaname_1.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-12">
                                        <img src="{{ asset('assets/images/Products/vaname_2.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div> --}}
                                </div>

                                <p>
                                    <strong>Nutritional Content of Panami Shrimp</strong>
                                <p>
                                    The nutritional content in 100 grams of raw panami shrimp is as follows
                                <ol>
                                    <li>Water: 75.0 grams</li>
                                    <li>
                                        Calorie: 91 kcal</li>
                                    <li>
                                        Protein: 21.0 grams</li>
                                    <li>
                                        Fat: 0.2 grams</li>
                                    <li>
                                        Carbohydrate: 0.1 gram</li>
                                    <li>
                                        Fiber: 0.0 gram</li>
                                    <li>
                                        Calcium: 136 mg</li>

                                </ol>
                                </p>
                                <p><strong>Benefits of nutritional content contained in panami shrimp</strong>
                                <ol>
                                    <li>High protein in panami shrimp can help build and repair body tissues, and maintain
                                        healthy muscles and bones.</li>
                                    <li>
                                        Selenium content in panami shrimp can help maintain a healthy immune system and
                                        prevent cell damage due to free radicals.</li>
                                    <li>
                                        Phosphorus in panami shrimp can help maintain healthy bones and teeth, and help
                                        the body's cells and tissues function.</li>
                                    <li>
                                        Vitamin B12 in panami shrimp can help maintain a healthy nervous system and red
                                        blood cell formation.</li>
                                    <li>
                                        Omega-3 fatty acids in panami shrimp can help maintain a healthy heart and blood
                                        vessels, and help reduce inflammation in the body.</li>

                                </ol>
                                </p>
                                <p><strong>How to Properly Process Panami Shrimp</strong></p>
                                <p>

                                    Proper processing of panami shrimp
                                    includes steps such as cleaning, peeling, and hygienic storage. One of the common ways
                                    to process panami shrimp is by cooking, frying, or steaming according to the desired
                                    recipe.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="{{ url('post1') }}">
                                    <img src="{{ asset('assets/images/Products/cakalang_3.png') }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

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
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
