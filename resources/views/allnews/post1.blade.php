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
                                    <h4>Tuna Healty Benefits of Tuna </h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        <strong>Ikan Tongkol, also known as small tuna, </strong>
                                        is a popular saltwater fish in Indonesia. This fish has blackish white flesh and is
                                        rich in nutrients. Some of the advantages of small tuna include the protein content,
                                        vitamins B2, B3, B6, B12 and vitamin D which are good for health. Apart from that,
                                        small tuna also contains iron, polyunsaturated fats which are heart healthy, and can
                                        help you lose weight. The following is a summary of the nutritional content and
                                        benefits of small tuna:
                                    </p>
                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/Products/cakalang_3.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>
                                </div>

                                <p>
                                    <strong>Small Tuna Nutritional Content</strong>
                                <p>

                                <ol>
                                    <li>Protein : Small tuna is rich in protein, which is important for meeting the body's
                                        need for this nutrient.</li>
                                    <li>
                                        Vitamin B : small tuma contains vitamins B2, B3, B6, and B12, which are important
                                        for body health.</li>
                                    <li>
                                        Vitamin D : The vitamin D content in small tuna is good for strengthening and
                                        maintaining healthy bones.</li>
                                    <li>
                                        Iron : Small tuna contains iron, which can help prevent anemia.</li>
                                    <li>
                                        Polyunsaturated Fats : Polyunsaturated fats in small tuna can help maintain heart
                                        health.</li>

                                </ol>
                                </p>
                                <p><strong>Benefits of Small Tuna</strong>
                                <ol>
                                    <li>Prevention of Anemia : The iron content in small tuna is useful for preventing
                                        anemia.</li>
                                    <li>
                                        Heart Health : The polyunsaturated fats in small tuna can help maintain heart
                                        health.</li>
                                    <li>
                                        Source of Protein : Small tuna is a good source of protein for the body.</li>
                                    <li>
                                        Bone Health : The vitamin D content in small tuna is good for strengthening and
                                        maintaining healthy bones.</li>
                                    <li>
                                        Lose Weight : Small Tuna can help in weight loss programs because of its balanced
                                        nutritional content.
                                    </li>
                                </ol>
                                </p>
                                <p>Small Tuna is a fish that is rich in nutrients and has health benefits. To get the
                                    benefits, small tuna can be processed in the right way. Small tuna can be prepared by
                                    stir-frying or with wet seasoning. It is better to use healthy ingredients such as
                                    spices. If frying, avoid using a lot of oil as this fish already contains fat. Avoid
                                    eating canned small tuna because of its high mercury content. By processing small tuna
                                    fish in the right way, the benefits and nutritional content of tuna fish can be
                                    maintained and provide benefits for the health of the body.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <h5 class="mt-5 mb-3">Recent news</h5>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="{{ url('post2') }}">
                                    <img src="{{ asset('assets/images/Products/vaname_1.png') }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

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
            </div>
        </section>
    </main>
@endsection
