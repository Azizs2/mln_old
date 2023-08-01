@extends('app')

@section('content')
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/slide/talas.jpg') }}" class="carousel-image img-fluid"
                                    alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Taro Agriculture</h1>

                                    <p>Every month always harvests</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/slide/singkong.jpg') }}" class="carousel-image img-fluid"
                                    alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Cassava</h1>

                                    <p>Every month always harvests</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/slide/ubi_jalar.jpg') }}" class="carousel-image img-fluid"
                                    alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Yam farms</h1>

                                    <p>Every month always harvests</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Welcome to PT. Maju Lokal Nusantara</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a class="d-block">
                            <img src="{{ asset('assets/images/icons/technical_support.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">
                                <strong>Services</strong>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a class="d-block">
                            <img src="{{ asset('assets/images/icons/quality.png') }}" class="featured-block-image img-fluid"
                                alt="">

                            <p class="featured-block-text"><strong>Good Quality</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a class="d-block">
                            <img src="{{ asset('assets/images/icons/fast_time.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>On Time</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a class="d-block">
                            <img src="{{ asset('assets/images/icons/longterm_contract.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Long-term</strong></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                {{-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/group-people-volunteering-foodbank-poor-people.jpg') }}"
                    class="custom-text-box-image img-fluid" alt="">
            </div> --}}

                <div class="col-lg-12 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Our Story</h2>

                        <h5 class="mb-3">PT. Maju Lokal Nusantara</h5>

                        <p class="mb-0">Many products in Indonesia are not yet known or not yet recognised in the
                            world.
                            Through this company we have a goal to bring local products to the international market
                            as an effort to support more recognition of our local products.
                            in addition, we also encourage small and medium enterprises to grow and develop
                            according to the international market.
                            We are also committed to providing services about products that consumers want,
                            providing good products, providing timely delivery and long-term cooperation.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <h5 class="mb-3">Our Vision</h5>

                                <p>Our company is an export partner that provides transparent and sustainable export
                                    services and solutions.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>Providing quality product services that can compete in the international market,
                                    as an innovative, sustainable and customer-oriented flagship product. we also
                                    introduce Indonesian unique products that have selling points, to help the
                                    economy of small and medium-sized enterprises.

                                </p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Products</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/talas1.jpg') }}" class="custom-block-image img-fluid"
                            alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Colocasia Bogor</h5>

                                <p>can be customised castings or products of the same material</p>

                                {{-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}

                                {{-- <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $18,500
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $32,000
                                    </p>
                                </div> --}}
                            </div>

                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="custom-btn btn">Products Details</a>
                        </div>
                    </div>
                </div>

                <!-- Modal Products1 -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title fs-5" id="exampleModalLabel">Colocasia Bogor</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/poor-child-landfill-looks-forward-with-hope.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Poverty Development</h5>

                                <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                    tempor</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $27,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $60,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/african-woman-pouring-water-recipient-outdoors.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Supply drinking water</h5>

                                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $84,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $100,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 text-center mb-4">
                    <!-- <h2>Products</h2> -->
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/group-african-kids-paying-attention-class.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Children Education</h5>

                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $18,500
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $32,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/poor-child-landfill-looks-forward-with-hope.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Poverty Development</h5>

                                <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                    tempor</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $27,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $60,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/images/causes/african-woman-pouring-water-recipient-outdoors.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Supply drinking water</h5>

                                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $84,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $100,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>

    <!-- <section class="volunteer-section section-padding" id="section_4">
                                                                                                                                                                                                                                                                                                                                                                    <div class="container">
                                                                                                                                                                                                                                                                                                                                                                        <div class="row">

                                                                                                                                                                                                                                                                                                                                                                            <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                <h2 class="text-white mb-4">Volunteer</h2>

                                                                                                                                                                                                                                                                                                                                                                                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                                                                                                                                                                                                                                                                                                                                                                    <h3 class="mb-4">Become a volunteer today</h3>

                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Jack Doe" required>
                                                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                            <input type="email" name="volunteer-email" id="volunteer-email"
                                                                                                                                                                                                                                                                                                                                                                                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com"
                                                                                                                                                                                                                                                                                                                                                                                                required>
                                                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                            <input type="text" name="volunteer-subject" id="volunteer-subject"
                                                                                                                                                                                                                                                                                                                                                                                                class="form-control" placeholder="Subject" required>
                                                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                            <div class="input-group input-group-file">
                                                                                                                                                                                                                                                                                                                                                                                                <input type="file" class="form-control" id="inputGroupFile02">

                                                                                                                                                                                                                                                                                                                                                                                                <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                                                                                                                                                                                                                                                                                                                                                                                <i class="bi-cloud-arrow-up ms-auto"></i>
                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Comment (Optional)"></textarea>

                                                                                                                                                                                                                                                                                                                                                                                    <button type="submit" class="form-control">Submit</button>
                                                                                                                                                                                                                                                                                                                                                                                </form>
                                                                                                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                            <div class="col-lg-6 col-12">
                                                                                                                                                                                                                                                                                                                                                                                <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                                                                                                                                                                                                                                                                                                                                                                                    class="volunteer-image img-fluid" alt="">

                                                                                                                                                                                                                                                                                                                                                                                <div class="custom-block-body text-center">
                                                                                                                                                                                                                                                                                                                                                                                    <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                                                                                                                                                                                                                                                                                                                                                                                    <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                                                                                                                                                                                                                                                                                                                                                                                        tokito Professional charity theme based</p>
                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                </section> -->

    {{-- <section class="news-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Latest News</h2>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="news-detail.html">
                                <img src="{{ asset('assets/images/news/medium-shot-volunteers-with-clothing-donations.jpg') }}"
                                    class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Lifestyle,
                                </a>

                                <a href="#" class="category-block-link">
                                    Clothing Donation
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 12, 2036
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
                                <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to
                                        urban area</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                    Professional charity theme based on Bootstrap</p>
                            </div>
                        </div>
                    </div>

                    <div class="news-block mt-3">
                        <div class="news-block-top">
                            <a href="news-detail.html">
                                <img src="{{ asset('assets/images/news/medium-shot-people-collecting-foodstuff.jpg') }}"
                                    class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Food,
                                </a>

                                <a href="#" class="category-block-link">
                                    Donation,
                                </a>

                                <a href="#" class="category-block-link">
                                    Caring
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 20, 2036
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
                                        35 Comments
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="news-detail.html" class="news-block-title-link">Food donation
                                        area</a>
                                </h4>
                            </div>

                            <div class="news-block-body">
                                <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                    elementum, tempor risus vel, condimentum orci</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mx-auto">
                    <form class="custom-form search-form" action="#" method="get" role="form">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search"
                            aria-label="Search">

                        <button type="submit" class="form-control">
                            <i class="bi-search"></i>
                        </button>
                    </form>

                    <h5 class="mt-5 mb-3">Recent news</h5>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="news-detail.html">
                                <img src="{{ asset('assets/images/news/africa-humanitarian-aid-doctor.jpg') }}"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="news-detail.html" class="news-block-title-link">Food donation
                                        area</a>
                                </h6>
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
                                        Clean</a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 24, 2036
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="category-block d-flex flex-column">
                        <h5 class="mb-3">Categories</h5>

                        <a href="#" class="category-block-link">
                            Drinking water
                            <span class="badge">20</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Food Donation
                            <span class="badge">30</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Children Education
                            <span class="badge">10</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Poverty Development
                            <span class="badge">15</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Clothing Donation
                            <span class="badge">20</span>
                        </a>
                    </div>

                    <div class="tags-block">
                        <h5 class="mb-3">Tags</h5>

                        <a href="#" class="tags-block-link">
                            Donation
                        </a>

                        <a href="#" class="tags-block-link">
                            Clothing
                        </a>

                        <a href="#" class="tags-block-link">
                            Food
                        </a>

                        <a href="#" class="tags-block-link">
                            Children
                        </a>

                        <a href="#" class="tags-block-link">
                            Education
                        </a>

                        <a href="#" class="tags-block-link">
                            Poverty
                        </a>

                        <a href="#" class="tags-block-link">
                            Clean Water
                        </a>
                    </div>

                    <form class="custom-form subscribe-form" action="#" method="get" role="form">
                        <h5 class="mb-4">Newsletter Form</h5>

                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email Address" required>

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">Subscribe</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section> --}}
    <section>
        @include('allnews.allnews')
    </section>


    {{-- <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="mb-lg-3">Happy Customers</h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                        kengan omeg kohm tokito charity theme</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Maria</span>,
                                        Boss</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit
                                        auctor
                                        mauris quis metus tempor orci</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                        Partner</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                        kengan omeg kohm tokito charity theme</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                        Advisor</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit
                                        auctor
                                        mauris quis metus tempor orci</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                        Entreprenuer</small>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                    <img src="{{ asset('assets/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                    <img src="{{ asset('assets/images/avatar/portrait-young-redhead-bearded-male.jpg') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                    <img src="{{ asset('assets/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                    <img src="{{ asset('assets/images/avatar/studio-portrait-emotional-happy-funny.jpg') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="mb-lg-3">Support By</h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    {{-- <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                        kengan omeg kohm tokito charity theme</h4> --}}

                                    <small class="carousel-name"><span class="carousel-name-title">Ministry of Investment
                                            /
                                            Indonesia Investment Coordinating Board</span>
                                        (BKPM)</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    {{-- <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit
                                        auctor
                                        mauris quis metus tempor orci</h4> --}}

                                    <small class="carousel-name"><span class="carousel-name-title">Directorate General of
                                            Taxation</span>
                                        (DJP)</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    {{-- <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                        kengan omeg kohm tokito charity theme</h4> --}}

                                    <small class="carousel-name"><span class="carousel-name-title">General Legal
                                            Administration</span> (AHU)
                                    </small>
                                </div>
                            </div>


                            <ol class="carousel-indicators">
                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                    <img src="{{ asset('assets/images/avatar/oss.png') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                    <img src="{{ asset('assets/images/avatar/djp.jpg') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                    <img src="{{ asset('assets/images/avatar/ahu.png') }}"
                                        class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>

                        <div class="contact-image-wrap d-flex flex-wrap">
                            <img src="{{ asset('assets/images/avatar/sa.jpg') }}" class="img-fluid avatar-image"
                                alt="">

                            <div class="d-flex flex-column justify-content-center ms-3">
                                <p class="mb-0">Syaiful Aziz</p>
                                <p class="mb-0"><strong>CEO</strong></p>
                            </div>
                        </div>

                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                Depok City,West Java, Indonesia
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: +628515800250">
                                    +6285158002505
                                </a>
                            </p>

                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>

                                <a href="mailto:sa@majulokalnusantara.com">
                                    malon@majulokalnusantara.com
                                </a>
                            </p>

                            <a href="https://api.whatsapp.com/send?phone=6285158002505" class="custom-btn btn mt-3">Get
                                Direction</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto">

                    <form class="custom-form contact-form" action="{{ route('submit.form') }}" method="POST"
                        role="form">
                        @csrf

                        <h2>Contact form</h2>

                        <p class="mb-4">Or, you can just send an email:
                            <a href="mailto:malon@majulokalnusantara.com">info@example.com</a>
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="first_name" id="first-name" class="form-control"
                                    placeholder="Jack" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="last_name" id="last-name" class="form-control"
                                    placeholder="Doe" required>
                            </div>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Jackdoe@gmail.com" required>

                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                        <button type="submit" class="form-control">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('[data-toggle="modal"]').modal();
        });
    </script>
@endsection
