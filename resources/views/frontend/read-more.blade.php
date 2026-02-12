@extends('frontend.layout.app')


@section('content')


    <section class="detail-answer-sec">
        <div class="container">
            <div class="card ">
                <div class="card-content">
                    <div class="card-header">
                        <h2 class="">Am I a Next Gen or an Aficionado?</h2>
                    </div>
                    <div class="card-body ">
                        <div>
                            <p>You are a <strong>Next Gen</strong> if you are:</p>
                            <ul>
                                <li>a) applying to university,</li>
                                <li>b) seeking to enter a profession, or</li>
                                <li>c) simply looking for guidance from someone with real-life
                                    experience in
                                    your
                                    area of interest.</li>
                            </ul>
                            <p>You are an <strong>Aficionado</strong> if you are:</p>
                            <ul>
                                <li>a) studying at a university or have graduated, or</li>
                                <li>b) working or have worked in a profession.</li>
                            </ul>
                            <p>Put in other words, the Next Gens are the ones with questions and the
                                Aficionados
                                are
                                the ones sharing answers based on their experience.</p>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex gap-3 mb-4 align-items-baseline">
                            <p class="fw-semibold text-dark mb-0">Did this answer your question?</p>
                            <button class="yes">Yes</button>
                            <button class="no">No</button>
                        </div>

                        <p class="text-muted small">Can't find what you're looking for? We're here to help.</p>
                        <div class="explore-btns pt-3">
                            <a class="me-2" href="{{ route('frontend.faqs') }}">Visit FAQs page</a>
                            <a href="{{ route('frontend.contact-us') }}">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
