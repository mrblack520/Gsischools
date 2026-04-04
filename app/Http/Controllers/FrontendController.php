<?php

namespace App\Http\Controllers;

use App\Models\CareerGoal;
use App\Models\CareerStage;
use App\Models\Country;
use App\Models\Language;
use App\Models\Profession;
use App\Models\AccommodationExperience;
use App\Models\University;
use App\Models\Course;
use App\Models\Institution;
use App\Models\JobTitle;
use App\Models\PracticeArea;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
     public function Academy(){
        
        return view('frontend.Academy');
    }
     public function schools(){
        
        return view('frontend.School');
    }
    public function home()
    {

        $slides = [
    [
        'title' => 'Easy Registration',
        'image' => asset('/assets/images/gsipicn12.png'),
        'alt' => 'GSI Schools Library',
        'paragraphs' => ['We make admissions simple and stress-free for both parents and students. From Play Group to Grade 10, every step is transparent and supportive.']
    ],
    [
        'title' => 'Book Your Slot',
        'image' => asset('/assets/images/gsipicn2.png'),
        'alt' => 'GSI Schools Students',
        'paragraphs' => ['Students can book their slot and get placed at the right academic level to ensure success.']
    ],
    [
        'title' => 'Stay Connected',
        'image' => asset('/assets/images/gsipicn7.png'),
        'alt' => 'GSI Schools Class',
        'paragraphs' => ['We keep parents updated through progress reports, meetings, and online systems.']
    ],
    [
        'title' => 'Mutual Growth',
        'image' => asset('/assets/images/gsipic18.png'),
        'alt' => 'Guiding Star International',
        'paragraphs' => ['Teachers, parents, and students work together to build confidence and growth.']
    ],
    [
        'title' => 'Our Commitment',
        'image' => asset('/assets/images/gsipicn11.png'),
        'alt' => 'GSI Schools Shelves & Chair',
        'paragraphs' => ['We provide a safe learning environment and prepare students for life, not just exams.']
    ],
];

return view('frontend.home', compact('slides'));}
   

        public function nextGen()
    {
    $slides = [
            [
                'paragraphs' => [
                    'Applications, interviews, research … stepping into a world of unknowns and assumptions can feel overwhelming.'
                ]
            ],
            [
                'paragraphs' => [
                    'Don’t waste time figuring it out alone — book a session with an Aficionado to ask the questions that matter most to you and gain real first-hand insight.'
                ]
            ],
            [
                'paragraphs' => [
                    'Use filters to find Aficionados based on your desired criteria — whether you’re exploring universities or preparing to enter a profession.'
                ]
            ],
            [
                'paragraphs' => [
                    'As our network continues to expand, we’re committed to onboarding more Aficionados to cover more universities, more courses and more professions!'
                ]
            ],
        ];

        $faq_how_it_work = [
            [
                'title' => 'Registration',
                'content' => '<ul>
                        <li><span>Complete
                                the registration form available
                                <strong><span><a
                                            href="' . route('frontend.register') . '">here.</a></span></strong></span>
                        </li>
                    </ul>'
            ],
            [
                'title' => 'Book a session',
                'content' => '<ul>
                        <li><span>Filter
                                available
                                Aficionados, check their availability and book a one-to-one video chat.
                            </span></li>
                        <li><span>Sessions
                                can be booked in 15 minute increments’
                            </span></li>
                    </ul>'
            ],
            [
                'title' => 'Sessions',
                'content' => '<ul>
                        <li><span>During the
                                session, we encourage the Next Gen to lead the conversation
                                and
                                ask their most important questions relevant to their goals. </span></li>

                        <li><span>Clearly
                                communicate your goals and objectives to make the most of each
                                session!</span></li>
                    </ul>'
            ],
            [
                'title' => 'Questions',
                'content' => '<ul>
                        <li><span>It is all
                                about the questions! Arrive prepared with thoughtful
                                questions to gain valuable insight!</span></li>
                        <li><span>Ask your
                                burning questions — no question is “silly” or “basic”. Learn
                                from genuine and real-life experiences without any institutional or
                                corporate pressures. </span></li>
                        <li><span>Don’t feel
                                limited to work-related topics. Expand the conversation to
                                include social dynamics, work-life balance and managing the pressures
                                that come with universities and professions.</span></li>
                    </ul>'
            ]
        ];

        $faq_next_gen_signup = [
            [
                'title' => 'Who can be a Next Gen?',
                'content' =>
                '
                <p>The following can register as a Next Gen — anyone interested in:</p>
                <ul>
                                <li><span class="mb-0">applying to <strong>university,</strong> or</span></li>
                                <li><span class="mb-0">pursuing a career in a <strong>profession,</strong> or</span></li>
                                <li>Don’t quite fit the description above? That’s okay — as long as you’re keen to ask questions, you’re welcome to join.</li>
                              </ul>'
            ],
            [
                'title' => 'Convenient video chats',
                'content' => '<ul>
                                <li><span>Connect with Aficionados through flexible, one-to-one video chats — scheduled at a time that works for you.</span></li>
                                <li><span>The video chat will be organised and held on Questionpoint.</span></li>
                                <li><span>Lead the conversation by asking the questions that matter most to you.</span></li>
                              </ul>'
            ],
            [
                'title' => 'Who are Aficionados?',
                'content' => '
                <p>Aficionados are:</p>
                <ul>
                                        <li>university
                                            students or alumni from your desired university and course, or</li>
                                        <li><span>experienced
                                                professionals in your desired profession. </span></li>
                                                </ul>
                                                <p>Aficionados have registered to have video chat sessions with the Next
                                                        Gen and answer their questions.</p>
                                                <p>Get real, first-hand insight from them on your video chats.</p>
                                                '
            ],
            [
                'title' => 'What Aficionados can help you with',
                'content' => '
                <p>Aficionados may answer your questions on:</p>
                <ul>
                                        <li>Application
                                            processes
                                            and tips</li>
                                        <li>Interview
                                            preparation
                                        </li>
                                        <li>Choosing the
                                            right
                                            institution</li>
                                        <li>University and
                                            industry
                                            specific questions</li>
                                        <li>Social and
                                            work-life
                                            balance</li>
                                        <li>and much more!
                                        </li>
                                    </ul>
                                    <i>Aficionados have discretion on the scope of questions permitted and may set this
                                        out in their bios. </i>'
            ]
        ];

        return view('frontend.next-gen', compact(['slides', 'faq_how_it_work', 'faq_next_gen_signup']));
    }

    public function aficionado()
    {
        $slides = [
            [
                'paragraphs' => [
                    'Aficionados have valuable academic and professional experience and insight which can offer meaningful guidance to the Next Gen as they begin journeys already completed by Aficionados.'
                ]
            ],
            [
                'paragraphs' => [
                    'Questionpoint’s straightforward registration and onboarding process makes it easy for Aficionados to monetise and share their experiences and insights.'
                ]
            ],
            [
                'paragraphs' => [
                    'A seamless and convenient platform — from scheduling to pricing through to the video-chat experience.'
                ]
            ],
            [
                'paragraphs' => [
                    'As our network continues to expand, we’re committed to onboarding more Aficionados to cover more universities, more courses and more professions!'
                ]
            ],
        ];

        $signup_faq = [
            [
                'title' => 'Who can be an Aficionado?',
                'content' => '
                <p>The following can register as Aficionados:</p>
                <ul>
                                        <li><span>university
                                                students or graduates, or</span>
                                        </li>

                                        <li>
                                            <span>professionals with experience in a profession.</span>
                                        </li>
                                    </ul>
                                    <p><span>Aficionados host video chat sessions with the Next Gen who are
                                                individuals interested in applying to the Aficionado’s university or a
                                                profession.
                                            </span></p>
                '
            ],
            [
                'title' => 'Earn by sharing your insight and experiences',
                'content' => '
                <ul>
                                        <li><span>Monetise
                                                your experiences and insight on university or a profession by answering
                                                questions from the Next Gen. </span>
                                        </li>
                                        <li><span>We give
                                                you the flexibility to <strong>set your own rates</strong> and get paid
                                                for your time
                                                <strong>without any fee deductions!</strong> </span>
                                        </li>
                                    </ul>
                '
            ],
            [
                'title' => 'Video chats with flexible scheduling',
                'content' => '
                <p><span>Set your availability and connect with the Next Gen through the
                        convenience of video chat to answer their questions on topics such
                        as:
                </p>
                <ul>

                                        <li>Application
                                            processes
                                            and tips</li>
                                        <li>Interview
                                            preparation
                                        </li>
                                        <li>Choosing the
                                            right
                                            institution</li>
                                        <li>University and
                                            industry
                                            specific questions</li>
                                        <li>Social and
                                            work-life
                                            balance</li>
                                    </ul>
                '
            ],
        ];

        $how_it_work_faq = [
            [
                'title' => 'Registration',
                'content' => '
                <ul>
                                        <li><span>Complete
                                                the registration form available
                                                <strong><span><a href="{{ route("frontend.register") }}">here.</a></span></strong></span>
                                        </li>
                                    </ul>
                '
            ],
            [
                'title' => 'Onboarding',
                'content' => '
                <ul>
                                        <li>We will reach out
                                            to request evidence of your identity and qualification to
                                            onboard you as an Aficionado.</li>
                                    </ul>
                '
            ],
            [
                'title' => 'Availability and rate',
                'content' => '
                <ul>
                                        <li>Set your hourly
                                            Aficionado Rate and availability.</li>
                                        <li>The Next Gen can
                                            book sessions in 15 minute increments.</li>
                                    </ul>
                '
            ],
            [
                'title' => 'Sessions',
                'content' => '
                <ul>
                                        <li>During the
                                            session, the Next Gen are encouraged to lead the conversation and ask the
                                            questions that are most important and relevant to their goals.</li>

                                        <li>Aficionados will
                                            answer the Next Gen’s questions, drawing from their experiences and
                                            insight.</li>
                                    </ul>
                '
            ],
            [
                'title' => 'Payout',
                'content' => '
                <ul>
                                        <li>After three clear
                                            business days following the session, the Aficionado Rate will be credited to
                                            the Aficionado’s Questionpoint Wallet, which can then be withdrawn to a bank
                                            account.</li>
                                    </ul>
                '
            ],
        ];
        return view('frontend.aficionado', compact(['slides', 'signup_faq', 'how_it_work_faq']));
    }

    public function university()
    {
        $slides = [
            [
                'title' => 'Ask away – it’s all about the questions',
                'image' => asset('/assets/images/uni-slider-01.webp'),
                'alt' => asset('GSI Schools Slider'),
                'paragraphs' => [
                    'What do you really want to know?',
                    "What’s been on your mind, but never asked or answered?",
                    "This is your chance to ask the questions that matter the most to you.",
                ],
            ],
            [
                'title' => 'Universities and Courses',
                'image' => asset('/assets/images/close-up-hands-with-pen-writing-notebook.jpg'),
                'alt'=> asset('GSI Schools close writing shot'),
                'paragraphs' => [
                    'Make informed decisions about your path and speak with Aficionados who have been in your position.',
                    'We’ve launched Questionpoint with law and medicine – more courses are on the way, and you can already register your interest!',
                ],
            ],
            [
                'title' => 'Applications, interviews and more',
                'image' => asset('/assets/images/young-businessman-with-paper-communicating-with-female-laptop-screen.jpg'),
                'alt'=> asset('GSI Schools business meeting'),
                'paragraphs' => [
                    'Learn how Aficionados approached their personal statements, interviews, and admissions — and what they’d do differently.',
                    'It’s more than just knowing what to say — it’s knowing how to say it.',
                ],
            ],
            [
                'title' => 'Reshaping student work for Aficionados',
                'image' => asset('/assets/images/uni-slider-04.webp'),
                'alt'=> asset('GSI Schools Reshaping work slider'),
                'paragraphs' => [
                    'Students and graduates are empowered to monetise their experiences and insight.',
                    'Answer real questions, offer genuine support, and earn along the way — no commute or timesheets.',
                    'It’s flexible, meaningful, and more rewarding than a typical part-time job.',
                ],
            ],
            [
                'title' => 'Stand out from the competition',
                'image' => asset('/assets/images/131.jpg'),
                'alt' => asset('GSI Schools small paper boats'),
                'paragraphs' => [
                    'The Next Gen can move forward with clarity and confidence.',
                    'You don’t have to figure it all out alone — gain an edge with tailored insight, not generic advice.',
                ],
            ],
            [
                'title' => 'What makes Questionpoint different?',
                'image' => asset('/assets/images/uni-slider-06.webp'),
                'alt'=> asset('GSI Schools Slider with so peoples'),
                'paragraphs' => [
                    'We’re not just a platform — we’re a network of real people.',
                    'No algorithms, no generic advice — just real stories, real paths, and real answers.',
                    'This is not tutoring. This is human experience, shared.',
                ],
            ],
        ];
        return view('frontend.university', compact(['slides']));
    }

    public function profession()
    {
     $slides = [
    [
        'title' => 'Moments That Inspire Excellence',
        'image' => asset('/assets/images/gsipic18.png'),
        'alt' => asset('GSI Banner'),
        'paragraphs' => [
            'At Guiding Star International Schools and Academy, every event is a celebration of learning and growth.',
            "Our students shine through academic, cultural, and co-curricular activities.",
            "Each moment builds confidence, creativity, and character.",
        ],
    ],
    [
        'title' => 'Academic Competitions & Achievements',
        'image' => asset('/assets/images/gsipicn9copy.png'),
        'alt' => asset('GSI Schools Shelves & Chair '),
        'paragraphs' => [
            'We encourage students to challenge themselves through debates, quizzes, science fairs, and Olympiads.',
            "Healthy competition nurtures critical thinking and leadership skills.",
            "Our platform allows every learner to discover their true potential.",
        ],
    ],
    [
        'title' => 'Cultural & Creative Events',
        'image' => asset('/assets/images/gsipic32copy.png'),
        'alt' => asset('GSI Schools Classroom Whiteboard Lesson'),
        'paragraphs' => [
            'From annual functions to art exhibitions, creativity is celebrated at every level.',
            'Students express their talents through performances, storytelling, and visual arts.',
            'We believe creativity shapes confident and expressive individuals.',
        ],
    ],
    [
        'title' => 'Sports & Physical Development',
        'image' => asset('/assets/images/gsipicn2copy.png'),
        'alt'=> asset('GSI Schools Students'),
        'paragraphs' => [
            'Sports activities promote teamwork, discipline, and resilience.',
            'Through tournaments and sports days, students learn the value of dedication and fair play.',
            'Physical wellness is an essential part of holistic education.',
        ],
    ],
    [
        'title' => 'Leadership & Character Building',
        'image' => asset('/assets/images/gsipic27copy.png'),
        'alt'=> asset('GSI Schools Modern Computer Lab'),
        'paragraphs' => [
            'Our events develop responsibility, confidence, and communication skills.',
            'Students take initiative, collaborate with peers, and grow as future leaders.',
        ],
    ],
    [
        'title' => 'Creating Lifelong Memories',
        'image' => asset('/assets/images/gsipicn7copy.png'),
        'alt'=> asset('GSI Schools Student Success Workshop'),
        'paragraphs' => [
            'Every event at Guiding Star International Schools and Academy leaves a lasting impact.',
            'We create meaningful experiences that students cherish for years to come.',
            'Together, we build bright futures and unforgettable memories.',
        ],
    ],
];
        return view('frontend.profession', compact(['slides']));
    }

    public function about()
    {
        $slides = [
            [
                'title' => 'Strong Foundation from the Start',
                'image' => asset('/assets/images/gsipicn2about.png'),
                'alt' => asset('GSI Schools Confident Student Portrait'),
                'paragraphs' => [
                    'GSI Schools provide education from Mont Junior to Grade 10, ensuring that every child builds a strong academic and character-based foundation. Early learning, discipline, and values help students grow into confident individuals ready for the future.
',
                   
                ],
            ],
            [
                'title' => 'Coaching for Every Stream & Board',
                'image' => asset('/assets/images/gsipicn7about.png'),
                'alt' => asset('GSI Schools Student Success Workshop'),
                'paragraphs' => [
                    'At GSI Academy, we offer expert coaching from Mont Junior to Grade 12, covering Ziauddin, Sindh, Balochistan and federal boards. Students get the right support in every subject, stream, and level — ensuring they achieve top results in their exams.
',
                
                ],
            ],
            [
                'title' => 'Future-Ready Skills',
                'image' => asset('/assets/images/gsipic33about.png'),
                'alt' => asset('GSI Schools Academic Grammar Lesson'),
                'paragraphs' => [
                    'In today’s fast-changing world, academics alone aren’t enough. That’s why GSI Academy provides modern computer courses like AI, Cybersecurity, Web Development, and English Language Training, preparing students for careers of tomorrow.
',
            
                ],
            ],
            [
                'title' => 'A Community of Growth',
                'image' => asset('/assets/images/gsipic18about.png'),
                'alt' => asset('GSI Schools Student Group Banner'),
                'paragraphs' => [
            
                    'GSI is not just about classes — it’s about connection. Parents, teachers, and students work together to create a supportive learning community. With regular guidance, discipline, and co-curricular activities, we ensure holistic development for every learner.
.',
                ],
            ],
            [
                'title' => 'Standing Out from the Competition',
                'image' => asset('/assets/images/gsipicn9about.png'),
                'alt' => asset('GSI Schools Executive Head Office'),
                'paragraphs' => [
                    'What makes GSI different is our complete approach — combining academics, coaching, skills training, and values under one roof. While others focus only on grades, we prepare students for life by nurturing confidence, creativity, and leadership. This balance is what sets GSI apart.',
       
                ],
            ],
            [
                'title' => 'Our commitment',
                'image' => asset('/assets/images/gsipicn12about.png'),
                'alt' => asset('GSI Schools Admission Reception Desk'),
                'paragraphs' => [
                    'A smooth, secure, and user-friendly experience — from booking to conversation. We handle the logistics so you can focus on what matters: the questions and the connection.',
                ],
            ],
        ];

        $about_faq = [
            [
                'title' => 'What is GSI Schools & Academy?',
                'content' => "
                <ul>
                                        <li>GSI School offers education from Mont Junior to Class 10, focusing on strong academics, discipline, and character-building. With dedicated teachers and a balanced learning environment, we help students excel in their board exams and personal growth.


                                        </li>
                                        <li>Our Academy provides coaching from Mont Junior  to Class 12 for all streams and boards — including Sindh Board, Balochistan Board, and Ziauddin Board. With expert faculty and result-oriented teaching methods, students receive the best preparation for exams and higher studies.

                                        </li>
                                        <li>Along with school and coaching, we also provide modern courses in AI, Cyber Security, Web Development, and English Language to equip students with future-ready skills.

                                        </li>
                                    </ul>
                "
            ],
            [
                'title' => 'Who Can Join GSI Schools & Academy?',
                'content' => "
                <p>GSI Schools & Academy is designed for both faculty and students, building a strong community where learning and teaching go hand in hand.
</p>
                <ul>
                                                <div class='about-accordian-double'>
                                                    <div class='left'>
                                                        <h6>Faculty</h6>
                                                        <p>Individuals who are:</p>
                                                        <ul>
                                                            <li>
                                                               Passionate, Skilled, Dedicated, Inspiring</li>
                                                            <li>
                                                                <span>Innovative, Confident, Responsible, Committed</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class='right'>
                                                        <h6>Students</h6>
                                                        <p>Individuals who are:</p>
                                                        <ul>
                                                            <li>
                                                                Curious, Motivated, Hardworking, Ambitious</li>
                                                            <li>
                                                                <span>Disciplined, Focused, Energetic, Creative</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </ul>
                <p>We ensure that every teacher becomes an important part of our mission to deliver quality education across multiple boards and streams. By joining GSI, faculty gain the opportunity to share their expertise while shaping the leaders of tomorrow.

</p>
                <p>
Along with school and coaching, students also have access to advanced courses in technology and language, making them future-ready. With the right guidance and resources, every child at GSI is encouraged to achieve their full potential.
</p>
                "
            ],
            [
                'title' => 'Why You Should Choose GSI Schools & Academy?',
                'content' => '
                <p>GSI Schools & Academy is more than just a place to study — it’s a platform where every child discovers their true potential. With strong academics, modern teaching methods, and value-based learning, we prepare students not only for exams but also for life ahead.
</p>
                <ul>
                                            <li><span><strong>Comprehensive Education </strong> - From Playgroup to Grade 10, covering all streams and boards.</span></li>
                                            <li><span><strong>Expert Coaching </strong> Specialized academy classes for board exams, computer programs, and languages.</span>
                                            </li>
                                            <li><span>
                                                    <strong>Skill Development</strong> Training in communication, discipline, and leadership beyond textbooks.

</span>
                                            </li>
                                            </ul>
                                          
                '
            ],
        ];
        return view('frontend.about', compact(['slides', 'about_faq']));
    }

    public function curiosityHub()
    {
        return view('frontend.curiosity-hub');
    }

    public function exampleQuestion()
    {
        return view('frontend.example-question');
    }

    public function faqs()
    {
        return view('frontend.faqs');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function forgotPassword()
    {
        return view('frontend.forgot-password');
    }

    public function questionnaire()
    {
        return view('frontend.questionnaire');
    }

    public function register_new()
    {
        $status = CareerStage::where('is_active', true)->get();
        $interested_fields = Profession::where('is_active', true)->get();
        $goals = CareerGoal::where('is_active', true)->get();
        $locations = Country::where('is_active', true)->get();
        $languages = Language::where('is_active', true)->get();

        $data = compact([
            'status',
            'interested_fields',
            'goals',
            'locations',
            'languages'
        ]);

        return view('frontend.register-new', $data);
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function requestForm()
    {
        return view('frontend.request-form');
    }

    public function articleDetail()
    {
        return view('frontend.article-detail');
    }

    public function optionalProfessionForm()
    {
        return view('frontend.optional-profession-form');
    }

    public function optionalUniversityForm()
    {
        return view('frontend.optional-university-form');
    }

    public function optionalUniversityProfessionForm()
    {
        return view('frontend.optional-university-profession-form');
    }

    public function professionForm()
    {
        return view('frontend.profession-form');
    }

    public function readMore()
    {
        return view('frontend.read-more');
    }

    public function universityForm()
    {
        $universities = University::where('is_active', true)->get();
        $courses = Course::where('is_active', true)->get();
        $accommodation_experiences = AccommodationExperience::where('is_active', true)->get();

        $professions = Profession::with('practiceAreas')->where('is_active', true)->get();

        $practice_areas = PracticeArea::where('is_active', true)->get();

        $job_titles = JobTitle::where('is_active', true)->get();
        $institutions = Institution::where('is_active', true)->get();

        $countries = Country::where('is_active', true)->get();

        $data = compact([
            'universities',
            'courses',
            'accommodation_experiences',
            'professions',
            'practice_areas',
            'job_titles',
            'institutions',
            'countries'
        ]);
        return view('frontend.university-form', $data);
    }

    public function universityProfessionForm()
    {
        return view('frontend.university-profession-form');
    }
}
