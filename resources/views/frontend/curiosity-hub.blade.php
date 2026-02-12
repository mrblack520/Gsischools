@extends('frontend.layout.app')


@section('content')


    <section class="contact-us-banner curiosity-hub-banner">
        <div class="text-center d-flex flex-column align-items-center">
            <h2>The Questionpoint <span>Curiosity Hub</span></h2>
            <div class="curiosity-hub-banner-para">
                <p><strong>Welcome to the Curiosity Hub</strong> — Here you'll find a growing collection of articles,
                    updates and
                    resources.
                </p>
                <p>Whether you're a Next Gen exploring your future or an Aficionado looking to stay connected, the
                    Curiosity
                    Hub is where ideas are shared, questions are explored, and knowledge grows.</p>
            </div>
        </div>
    </section>

    <section class="policy-sec pt-0 curiosity-hub-sec">
        <div class="container">
            <div class="curiosity-hub-articles">
                <div class="curiosity-hub-articles-header">
                    <h2 class="">Articles</h2>
                    <div class="qp-input-div ">
                        <input placeholder="Search" class="qp-search-input" type="text">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="af-filter-con">
                    <div class="row">
                        <div class="left col-md-3 accordion__item">
                            <div data-toggle="#ch-01" class="af-filter-header accordion__header">
                                Filters
                                <img src="/assets/images/filter2.png" alt="Filter icon">
                            </div>
                            <div class="accordion__content" id="ch-01">
                                <ul>
                                    <li class="active"><img class="bullets" src="./assets/images/dark-bullets.svg"
                                            alt="bullets">
                                        Next Gen</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Aficianado</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        University</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Profession</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Applications and tips</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Questionpoint news</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Trends and insights</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Guidance</li>
                                    <li><img class="bullets" src="./assets/images/dark-bullets.svg" alt="bullets">
                                        Opinions and experiences</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="{{ route('frontend.article-detail') }}">A Day in
                            the Life: Law and Medicine</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="javacript:void(0)">ARTICLES
                            COMING SOON</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="javacript:void(0)">ARTICLES
                            COMING SOON</a>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="javacript:void(0)">ARTICLES
                            COMING SOON</a>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="javacript:void(0)">ARTICLES
                            COMING SOON</a>
                </ul>
            </div>
            <div class="curiosity-hub-news">
                <h2>News and coming soon</h2>
                <ul>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a
                            href="javacript:void(0)">Questionpoint news</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a
                            href="javacript:void(0)">Questionpoint news</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a
                            href="javacript:void(0)">Questionpoint news</a>
                    </li>
                </ul>
                <div class="request-section-con">
                    <div class="request-section">
                        <div class="mb-4">
                            <p class="mb-0 fw-semibold">Can’t find the right Aficionado? Submit a request and let us
                                know!</p>
                            <span class="request-sub-txt">We’re keen to expand our network and onboard more
                                Aficionados!</span>
                        </div>

                        <div class="request-group">
                            <p>Request course and university: [ <input type="text" style="width: 162px;"
                                    placeholder="enter name of course" /> ]
                                at [ <input type="text" placeholder="enter name of university" /> ]
                            </p>
                            <button class="submit-button">Submit</button>
                        </div>

                        <div class="request-group">
                            <p>Request Profession: [ <input type="text" placeholder="enter name of profession" /> ]</p>
                            <button class="submit-button">Submit</button>
                        </div>

                        <p class="fw-semibold">We are always looking for ways to enhance our platform – share your
                            requests with us!</p>
                        <div class="request-group">
                            <p><input style="width: 280px;" type="text" /></p>
                            <button class="submit-button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="curiosity-hub-resources">
                <h2>Resources</h2>
                <ul>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="javacript:void(0)">The
                            Questionpoint User Guide</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a
                            href="{{ route('frontend.example-question') }}">Example Questions</a>
                    </li>
                    <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><a href="{{ route('frontend.faqs') }}">FAQs</a>
                    </li>
                </ul>
            </div>
            <div>
                <p class="contact-message message-divider pb-1 text-sm mb-4">Get the most from Questionpoint</p>
                <p class="contact-message mt-1 mb-4"><strong>Can't find what you're looking for?</strong></p>
                <p class="contact-message text-sm mb-3">We’re here to help you!</p>
                <div class="explore-btns pt-3">
                    <a href="{{ route('frontend.contact-us') }}">Contact us</a>
                </div>
            </div>
        </div>
    </section>

@endsection
