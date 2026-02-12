@extends('frontend.layout.app')


@section('content')


    <style>
        .request-section-con {
            border-top: 1px solid lightgray;
            padding-top: 25px;
            font-family: "Anek Devanagari";

        }

        .request-section-con .request-sub-txt {
            font-size: 18px;
            color: #969696;
        }

        .request-section-con .request-group p {
            display: inline;
            font-size: 20px !important;
        }

        .request-section-con .request-group {
            margin-bottom: 25px !important;
        }

        .request-section-con .request-group:last-child {
            margin-bottom: 35px !important;
        }

        .submit-button {
            background: #503A8E;
            color: white;
            padding: 8px 20px 3px;
            border-radius: 5px;
            transition: background 0.25s ease-in-out;
            border: none;
            margin-left: 4px;
        }

        .request-group input {
            padding: 0;
            border: none;
            border-bottom: 1px solid #ccc;
            font-size: 18px;
            outline: none;
            line-height: 20px;
        }

        .container div p {
            font-size: 22px;
            margin: 0;
            margin-bottom: 10px;
        }

        .request-section-con .request-group p {
            display: inline;
            font-size: 20px !important;
        }

        .request-section-con p {
            font-size: 22px;
            margin: 0;
            margin-bottom: 10px;
        }
    </style>
    <div class="request-section-con container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="request-section">
            <div class="mb-4">
                <p class="mb-0 fw-semibold">Can’t find the right Aficionado? Submit a request and let us
                    know!</p>
                <span class="request-sub-txt">We’re keen to expand our network and onboard more
                    Aficionados!</span>
            </div>

            <div class="request-group">
                <p>Request Course [ <input type="text" /> ]
                    at university [ <input type="text" /> ]
                </p>
                <button class="submit-button">Submit</button>
            </div>

            <div class="request-group">
                <p>Request Profession [ <input type="text" /> ]</p>
                <button class="submit-button">Submit</button>
            </div>
            <div class="request-group">
                <p>Specific request <input style="width: 280px;" type="text" /> </p>
                <button class="submit-button">Submit</button>
            </div>
        </div>
    </div>

@endsection
