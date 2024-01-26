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
                            {{-- <div class="news-block-top">
                                <img src="{{ asset('assets/images/causes/DolomitePowder/newsDolomitePowder.png') }}"
                                    class="news-image img-fluid" alt="">

                            </div> --}}

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
                                    <h4>Dolomite Powder</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>
                                        <strong>Dolomite powder </strong>
                                        is a finely ground powder made from dolomite, a mineral that contains calcium and
                                        magnesium. These minerals are essential for various applications, including
                                        agriculture, manufacturing, and water treatment. Dolomite powder typically contains
                                        55.90% calcium carbonate (CaCO3), 31.33% magnesium oxide (MgO), and 0.35% moisture.
                                        Dolomite powder can be found in different mesh sizes, such as 60-100-325, which
                                        indicates that the powder has 60 openings per inch in a screen with a 1-inch
                                        opening. This fine mesh size ensures even distribution of the powder and maximizes
                                        its effectiveness in various applications.
                                    </p>
                                </div>

                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/causes/DolomitePowder/newsDolomitePowder.png') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-12">
                                        <img src="{{ asset('assets/images/news/talas3.jpg') }}"
                                            class="news-detail-image img-fluid" alt="">
                                    </div> --}}
                                </div>

                                <p>
                                    <strong>What are the specific nutrients in Dolomite Powder Mesh 60-100-325</strong>
                                <p>
                                    Dolomite powder mesh 60-100-325 is a fertilizer that contains calcium (CaO) and
                                    magnesium (MgO) nutrients, which are essential for plant growth. The specific nutrients
                                    in dolomite powder mesh 60-100-325 that benefit plants include:
                                <ol>
                                    <li>Calcium (CaO): Calcium is essential for plant growth and development. It helps to
                                        strengthen cell walls, promote root growth, and is involved in various enzymatic
                                        reactions in plants. Dolomite powder mesh 60-100-325 provides calcium that plants
                                        need to maintain their structure and function properly.</li>
                                    <li>Magnesium (MgO): Magnesium is an essential nutrient for photosynthesis and the
                                        production of chlorophyll, which is responsible for the green color of plants and
                                        their ability to convert sunlight into chemical energy. Dolomite powder mesh
                                        60-100-325 supplies magnesium that plants need to perform these functions
                                        effectively.</li>
                                    <li>pH regulation: Dolomite powder mesh 60-100-325 can help neutralize acidic soils
                                        and improve soil pH, making it more suitable for plant growth. By raising the soil
                                        pH, dolomite powder can create a more alkaline environment that favors plant growth.
                                    </li>
                                    <li>Nutrient balance: Dolomite powder mesh 60-100-325 is often used in addition to
                                        balanced fertilizers, particularly when seeding fruit plants. This indicates that
                                        the nutrients provided by dolomite powder mesh 60-100-325 complement the nutrients
                                        provided by other fertilizers, promoting a balanced and healthy growth for plants.
                                    </li>
                                </ol>
                                </p>
                                <p><strong>Dolomite powder mesh 60-100-325 has several benefits</strong>
                                <ol>
                                    <li>Soil conditioner: Dolomite powder can be used as a soil conditioner to raise the
                                        pH of acidic soil and provide magnesium and calcium nutrients to the plants.</li>
                                    <li>Source of magnesium and calcium: Dolomite powder is a good source of magnesium
                                        and calcium, which are essential nutrients for plant growth and development.</li>
                                    <li>Manufacturing: Dolomite powder is used in the manufacturing of paints,
                                        detergents, and soaps. In the production of glass and ceramics, dolomite is used as
                                        a source of magnesium oxide.</li>
                                    <li>Water treatment: Dolomite powder can be used in water treatment to remove impurities
                                        and soften water.</li>
                                </ol>
                                </p>
                                <p>As for the specific usage instructions, they can vary depending on the application. For
                                    agricultural use, the dosage and application methods should be determined based on soil
                                    tests and crop requirements. For manufacturing, the usage will depend on the specific
                                    product and the desired properties.</p>
                                <p>It's important to follow the recommended guidelines for the specific application to
                                    achieve the best results. If you have a specific use in mind, it would be best to
                                    consult with a professional in that field for precise usage instructions.</p>
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
