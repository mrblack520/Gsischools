<?php


use App\Models\AccommodationExperience;
use App\Models\CareerGoal;
use App\Models\CareerStage;
use App\Models\Country;
use App\Models\Course;
use App\Models\Institution;
use App\Models\JobTitle;
use App\Models\Language;
use App\Models\PracticeArea;
use App\Models\Profession;
use App\Models\University;
use Illuminate\Support\Facades\Route;



Route::get('post/career-goals', function () {

    if (CareerGoal::count() === 0) {
        CareerGoal::create(['name' => 'Get accepted into university']);
        CareerGoal::create(['name' => 'Land your dream job']);
        CareerGoal::create(['name' => 'Change career paths']);
        CareerGoal::create(['name' => 'Develop skills']);
        CareerGoal::create(['name' => 'Host sessions with the Next Gen']);
        CareerGoal::create(['name' => 'Networking']);
    }

    $goals = CareerGoal::get();
    return $goals;
});

Route::get('post/career-stages', function () {

    if (CareerStage::count() === 0) {
        CareerStage::create(['name' => 'High school / College']);
        CareerStage::create(['name' => 'University student']);
        CareerStage::create(['name' => 'Graduate']);
        CareerStage::create(['name' => 'Employed']);
        CareerStage::create(['name' => 'Career changer']);
        CareerStage::create(['name' => 'Jobeseeker']);
    }

    $career_stages = CareerStage::get();
    return $career_stages;
});

Route::get('/post/countries', function () {

    if (Country::count() === 0) {

        foreach (
            [
                [
                    'iso3' => 'PK',
                    'numeric_code' => '586',
                    'currency_code' => 'PKR',
                    'currency_name' => 'Rupees',
                    'currency_symbol' => '₨',
                    'capital' => 'Pakistan',
                    'region' => 'Asia',
                    'subregion' => 'Southern Asia',
                    'latitude' => '30.3753',
                    'longitude' => '69.3451',
                    'flag_url' => '',
                ],
                [
                    'iso3' => 'IN',
                    'numeric_code' => '356',
                    'currency_code' => 'INR',
                    'currency_name' => 'Indian Rupee',
                    'currency_symbol' => '₹',
                    'capital' => 'India',
                    'region' => 'Asia',
                    'subregion' => 'Southern Asia',
                    'latitude' => '20.5937',
                    'longitude' => '78.9629',
                    'flag_url' => '',
                ],
                [
                    'iso3' => 'US',
                    'numeric_code' => '840',
                    'currency_code' => 'USD',
                    'currency_name' => 'US Dollar',
                    'currency_symbol' => '$',
                    'capital' => 'United States of America',
                    'region' => 'Americas',
                    'subregion' => 'Northern America',
                    'latitude' => '37.0902',
                    'longitude' => '-95.7129',
                    'flag_url' => '',
                ],
                [
                    'iso3' => 'GB',
                    'numeric_code' => '826',
                    'currency_code' => 'GBP',
                    'currency_name' => 'Pound Sterling',
                    'currency_symbol' => '£',
                    'capital' => 'United Kingdom',
                    'region' => 'Europe',
                    'subregion' => 'Northern Europe',
                    'latitude' => '55.3781',
                    'longitude' => '-3.4360',
                    'flag_url' => '',
                ],
                [
                    'iso3' => 'AE',
                    'numeric_code' => '784',
                    'currency_code' => 'AED',
                    'currency_name' => 'UAE Dirham',
                    'currency_symbol' => 'د.إ',
                    'capital' => 'United Arab Emirates',
                    'region' => 'Asia',
                    'subregion' => 'Western Asia',
                    'latitude' => '23.4241',
                    'longitude' => '53.8478',
                    'flag_url' => '',
                ],
            ] as $data
        ) {
            Country::create($data);
        }
    }

    return Country::all();
});


Route::get('post/professions', function () {

    if (Profession::count() === 0) {
        Profession::create(['name' => 'Law']);
        Profession::create(['name' => 'Medicine']);
    }

    return Profession::get();
});

Route::get('/post/accommodations', function () {

    if (AccommodationExperience::count() === 0) {
        AccommodationExperience::create(['title' => 'Student Accommodation']);
        AccommodationExperience::create(['title' => 'Flat share']);
        AccommodationExperience::create(['title' => 'Living at home']);
    }

    return AccommodationExperience::all();
});

Route::get('/post/languages', function () {

    if (Language::count() === 0) {

        Language::create(['name' => 'English', 'code' => 'en']);
        Language::create(['name' => 'Mandarin Chinese', 'code' => 'zh']);
        Language::create(['name' => 'Hindi', 'code' => 'hi']);
        Language::create(['name' => 'Spanish', 'code' => 'es']);
        Language::create(['name' => 'French', 'code' => 'fr']);
        Language::create(['name' => 'Arabic', 'code' => 'ar']);
        Language::create(['name' => 'Bengali', 'code' => 'bn']);
        Language::create(['name' => 'Russian', 'code' => 'ru']);
        Language::create(['name' => 'Portuguese', 'code' => 'pt']);
        Language::create(['name' => 'Urdu', 'code' => 'ur']);
        Language::create(['name' => 'Indonesian', 'code' => 'id']);
        Language::create(['name' => 'German', 'code' => 'de']);
        Language::create(['name' => 'Japanese', 'code' => 'ja']);
        Language::create(['name' => 'Swahili', 'code' => 'sw']);
        Language::create(['name' => 'Marathi', 'code' => 'mr']);
        Language::create(['name' => 'Telugu', 'code' => 'te']);
        Language::create(['name' => 'Turkish', 'code' => 'tr']);
        Language::create(['name' => 'Tamil', 'code' => 'ta']);
        Language::create(['name' => 'Vietnamese', 'code' => 'vi']);
        Language::create(['name' => 'Korean', 'code' => 'ko']);
        Language::create(['name' => 'Persian (Farsi)', 'code' => 'fa']);
        Language::create(['name' => 'Italian', 'code' => 'it']);
        Language::create(['name' => 'Thai', 'code' => 'th']);
        Language::create(['name' => 'Gujarati', 'code' => 'gu']);
        Language::create(['name' => 'Polish', 'code' => 'pl']);
        Language::create(['name' => 'Punjabi', 'code' => 'pa']);
        Language::create(['name' => 'Ukrainian', 'code' => 'uk']);
        Language::create(['name' => 'Malayalam', 'code' => 'ml']);
        Language::create(['name' => 'Romanian', 'code' => 'ro']);
        Language::create(['name' => 'Hausa', 'code' => 'ha']);
        Language::create(['name' => 'Dutch', 'code' => 'nl']);
        Language::create(['name' => 'Yoruba', 'code' => 'yo']);
        Language::create(['name' => 'Oromo', 'code' => 'om']);
        Language::create(['name' => 'Amharic', 'code' => 'am']);
        Language::create(['name' => 'Azerbaijani', 'code' => 'az']);
        Language::create(['name' => 'Burmese', 'code' => 'my']);
        Language::create(['name' => 'Igbo', 'code' => 'ig']);
        Language::create(['name' => 'Zulu', 'code' => 'zu']);
        Language::create(['name' => 'Kurdish (Sorani)', 'code' => 'ckb']);
        Language::create(['name' => 'Nepali', 'code' => 'ne']);
        Language::create(['name' => 'Sindhi', 'code' => 'sd']);
        Language::create(['name' => 'Cebuano', 'code' => 'ceb']);
        Language::create(['name' => 'Ilocano', 'code' => 'ilo']);
        Language::create(['name' => 'Somali', 'code' => 'so']);
        Language::create(['name' => 'Magahi', 'code' => 'mag']);
        Language::create(['name' => 'Serbo-Croatian', 'code' => 'hbs']);
        Language::create(['name' => 'Maithili', 'code' => 'maithili']);
        Language::create(['name' => 'Odia (Oriya)', 'code' => 'or']);
        Language::create(['name' => 'Serbian', 'code' => 'sr']);
        Language::create(['name' => 'Uzbek', 'code' => 'uz']);
        Language::create(['name' => 'Xhosa', 'code' => 'xho']);
        Language::create(['name' => 'Tajik', 'code' => 'tg']);
        Language::create(['name' => 'Filipino', 'code' => 'fil']);
        Language::create(['name' => 'Khmer', 'code' => 'km']);
        Language::create(['name' => 'Dhivehi', 'code' => 'dv']);
        Language::create(['name' => 'Kinyarwanda', 'code' => 'rw']);
        Language::create(['name' => 'Malagasy', 'code' => 'mg']);
        Language::create(['name' => 'Tsonga', 'code' => 'ts']);
        Language::create(['name' => 'Shona', 'code' => 'sn']);
    }

    return Language::get();
});


Route::get('/post/universities', function () {

    if (University::count() === 0) {

        University::create(['name' => "Aston University"]);
        University::create(['name' => "Cardiff University"]);
        University::create(['name' => "City, University of Londo"]);
        University::create(['name' => "Durham University"]);
        University::create(['name' => "Imperial College Londo"]);
        University::create(['name' => "King's College Londo"]);
        University::create(['name' => "Lancaster Universit"]);
        University::create(['name' => "Leeds Trinity Universit"]);
        University::create(['name' => "Liverpool Hope University"]);
        University::create(['name' => "London School of Economics and Political Science (LSE)"]);
        University::create(['name' => "Loughborough University"]);
        University::create(['name' => "Newcastle University"]);
        University::create(['name' => "Northumbria University"]);
        University::create(['name' => "Queen's University Belfast"]);
        University::create(['name' => "Royal Holloway, University of London"]);
        University::create(['name' => "Swansea University"]);
        University::create(['name' => "University College London (UCL)"]);
        University::create(['name' => "University of Aberdee"]);
        University::create(['name' => "University of Bath"]);
        University::create(['name' => "University of Bedfordshire"]);
        University::create(['name' => "University of Birmingham"]);
        University::create(['name' => "University of Bolton"]);
        University::create(['name' => "University of Bradford"]);
        University::create(['name' => "University of Brighto"]);
        University::create(['name' => "University of Bristo"]);
        University::create(['name' => "University of Buckingham"]);
        University::create(['name' => "University of Cambridge"]);
        University::create(['name' => "University of Central Lancashire"]);
        University::create(['name' => "University of Chester"]);
        University::create(['name' => "University of Chichester"]);
        University::create(['name' => "University of Cumbria"]);
        University::create(['name' => "University of Derby"]);
        University::create(['name' => "University of Dunde"]);
        University::create(['name' => "University of East Anglia"]);
        University::create(['name' => "University of East London"]);
        University::create(['name' => "University of Edinburgh"]);
        University::create(['name' => "University of Essex"]);
        University::create(['name' => "University of Exeter"]);
        University::create(['name' => "University of Glasgo"]);
        University::create(['name' => "University of Gloucestershir"]);
        University::create(['name' => "University of Greenwich"]);
        University::create(['name' => "University of Hertfordshire"]);
        University::create(['name' => "University of Huddersfield"]);
        University::create(['name' => "University of Hull"]);
        University::create(['name' => "University of Kent"]);
        University::create(['name' => "University of Lancaster"]);
        University::create(['name' => "University of Leeds"]);
        University::create(['name' => "University of Leicester"]);
        University::create(['name' => "University of Lincoln"]);
        University::create(['name' => "University of Liverpool"]);
        University::create(['name' => "University of Manchester"]);
        University::create(['name' => "University of Northampton"]);
        University::create(['name' => "University of Nottingham"]);
        University::create(['name' => "University of Oxford"]);
        University::create(['name' => "University of Plymouth"]);
        University::create(['name' => "University of Portsmouth"]);
        University::create(['name' => "University of Reading"]);
        University::create(['name' => "University of Salford"]);
        University::create(['name' => "University of Sheffield"]);
        University::create(['name' => "University of South Wales"]);
        University::create(['name' => "University of Southampton"]);
        University::create(['name' => "University of St Andrews"]);
        University::create(['name' => "University of Strathclyde"]);
        University::create(['name' => "University of Suffolk"]);
        University::create(['name' => "University of Sunderland"]);
        University::create(['name' => "University of Surrey"]);
        University::create(['name' => "University of Sussex"]);
        University::create(['name' => "University of Wales Trinity Saint Davi"]);
        University::create(['name' => "University of Warwic"]);
        University::create(['name' => "University of West London"]);
        University::create(['name' => "University of West of Scotland"]);
        University::create(['name' => "University of Westminster"]);
        University::create(['name' => "University of Winchester"]);
        University::create(['name' => "University of Wolverhampton"]);
        University::create(['name' => "University of Worcester"]);
        University::create(['name' => "University of York"]);
        University::create(['name' => "University of the West of England"]);
    }

    return University::all();
});

Route::get('/post/courses', function () {

    if (Course::count() === 0) {

        Course::create(['name' => 'Accounting and Finance']);
        Course::create(['name' => 'Actuarial Science']);
        Course::create(['name' => 'Aeronautical and Aerospace Engineering']);
        Course::create(['name' => 'Anthropology']);
        Course::create(['name' => 'Archaeology']);
        Course::create(['name' => 'Architecture']);
        Course::create(['name' => 'Art and Design']);
        Course::create(['name' => 'Artificial Intelligence']);
        Course::create(['name' => 'Astrophysics']);
        Course::create(['name' => 'Banking and Finance']);
        Course::create(['name' => 'Biochemistry']);
        Course::create(['name' => 'Bioengineering']);
        Course::create(['name' => 'Biological Sciences']);
        Course::create(['name' => 'Biomedical Engineering']);
        Course::create(['name' => 'Biomedical Sciences']);
        Course::create(['name' => 'Building and Construction Management']);
        Course::create(['name' => 'Business and Management']);
        Course::create(['name' => 'Chemical Engineering']);
        Course::create(['name' => 'Chemistry']);
        Course::create(['name' => 'Civil Engineering']);
        Course::create(['name' => 'Classics']);
        Course::create(['name' => 'Communication and Media']);
        Course::create(['name' => 'Computer Science']);
        Course::create(['name' => 'Criminology']);
        Course::create(['name' => 'Cybersecurity']);
        Course::create(['name' => 'Dentistry']);
        Course::create(['name' => 'Dietetics and Nutrition']);
        Course::create(['name' => 'Digital Marketing']);
        Course::create(['name' => 'Drama and Theatre']);
        Course::create(['name' => 'Economics']);
        Course::create(['name' => 'Education']);
        Course::create(['name' => 'Electrical and Electronic Engineering']);
        Course::create(['name' => 'Engineering (General)']);
        Course::create(['name' => 'English Language']);
        Course::create(['name' => 'English Literature']);
        Course::create(['name' => 'Environmental Science']);
        Course::create(['name' => 'Equine Studies']);
        Course::create(['name' => 'Event Management']);
        Course::create(['name' => 'Fashion and Textiles']);
        Course::create(['name' => 'Film and Television Studies']);
        Course::create(['name' => 'Finance']);
        Course::create(['name' => 'Fine Art']);
        Course::create(['name' => 'Forensic Science']);
        Course::create(['name' => 'French']);
        Course::create(['name' => 'Games Design']);
        Course::create(['name' => 'Gender Studies']);
        Course::create(['name' => 'Geography']);
        Course::create(['name' => 'Geology']);
        Course::create(['name' => 'German']);
        Course::create(['name' => 'Graphic Design']);
        Course::create(['name' => 'Health and Social Care']);
        Course::create(['name' => 'History']);
        Course::create(['name' => 'Hospitality and Tourism Management']);
        Course::create(['name' => 'Human Biology']);
        Course::create(['name' => 'Human Geography']);
        Course::create(['name' => 'Human Resource Management']);
        Course::create(['name' => 'Information Systems']);
        Course::create(['name' => 'Innovation and Entrepreneurship']);
        Course::create(['name' => 'International Business']);
        Course::create(['name' => 'International Relations']);
        Course::create(['name' => 'Islamic Studies']);
        Course::create(['name' => 'Italian']);
        Course::create(['name' => 'Journalism']);
        Course::create(['name' => 'Languages and Linguistics']);
        Course::create(['name' => 'Law']);
        Course::create(['name' => 'Liberal Arts']);
        Course::create(['name' => 'Linguistics']);
        Course::create(['name' => 'Marine Biology']);
        Course::create(['name' => 'Marketing']);
        Course::create(['name' => 'Mathematics']);
        Course::create(['name' => 'Mechanical Engineering']);
        Course::create(['name' => 'Media and Communication']);
        Course::create(['name' => 'Medical Sciences']);
        Course::create(['name' => 'Medicine']);
        Course::create(['name' => 'Midwifery']);
        Course::create(['name' => 'Music']);
        Course::create(['name' => 'Neuroscience']);
        Course::create(['name' => 'Nursing']);
        Course::create(['name' => 'Occupational Therapy']);
        Course::create(['name' => 'Optometry']);
        Course::create(['name' => 'Pharmacy']);
        Course::create(['name' => 'Philosophy']);
        Course::create(['name' => 'Physics']);
        Course::create(['name' => 'Physiotherapy']);
        Course::create(['name' => 'Politics']);
        Course::create(['name' => 'Psychology']);
    }

    return Course::all();
});

Route::get('/post/accommodation-experiences', function () {
    if (AccommodationExperience::count() === 0) {
        AccommodationExperience::create(['title' => 'Student Accommodation']);
        AccommodationExperience::create(['title' => 'Flat share']);
        AccommodationExperience::create(['title' => 'Living at home']);
    }
    return AccommodationExperience::all();
});


Route::get('/post/lawyer/practicing-areas', function () {
    if (PracticeArea::where('profession_id', 1)->count() === 0) {
        $areas = [
            'Arbitration',
            'Banking and Finance',
            'Capital Markets',
            'Construction',
            'Criminal',
            'Employment',
            'Environmental',
            'Family',
            'Human Rights',
            'Immigration',
            'Intellectual Property',
            'Litigation ',
            'Media',
            'Mergers & Acquisitions',
            'Public',
            'Private Equity',
            'Real Estate',
            'Regulatory'
        ];
        foreach ($areas as $area) {
            PracticeArea::create([
                'title' => $area,
                'profession_id' => 1
            ]);
        }
    }
    return PracticeArea::with('profession')->where('profession_id', 1)->get();
});

Route::get('/post/medicine/practicing-areas', function () {
    if (PracticeArea::where('profession_id', 2)->count() === 0) {
        $areas = [
            'Anaesthesiology',
            'Dermatology',
            'Emergency Medicine',
            'General Practice',
            'Geriatrics',
            'Gynaecology ',
            'Internal Medicine',
            'Nuclear Medicine',
            'Neurology',
            'Oncology',
            'Ophthalmology ',
            'Orthopedics',
            'Otolaryngology',
            'Palliative Care',
            'Pathology',
            'Pediatrics',
            'Preventive & Public Health',
            'Psychiatry',
            'Radiology ',
            'Rehabilitation and Physical Medicine',
            'Surgery'
        ];
        foreach ($areas as $area) {
            PracticeArea::create([
                'title' => $area,
                'profession_id' => 2
            ]);
        }
    }
    return PracticeArea::with('profession')->where('profession_id', 2)->get();
});

Route::get('/post/lawyer/jobs-titles', function () {
    if (JobTitle::whereHas('professions', function ($query) {
        $query->where('professions.id', 1);
    })->count() === 0) {
        $titles = [
            'Barrister',
            'Paralegal',
            'Trainee Solicitor',
            'Pupil Barrister',
            'General counsel',
            'In-house Counsel',
            'Consultant',
            'Clerk ',
            'Associate / Solicitor',
            'Counsel',
            'Partner'
        ];
        foreach ($titles as $title) {
            $job_title = JobTitle::create([
                'title' => $title
            ]);

            $job_title->professions()->attach([1]);
        }
    }

    return JobTitle::whereHas('professions', function ($query) {
        $query->where('professions.id', 1);
    })->with('professions')->get();
});

Route::get('/post/medicine/jobs-titles', function () {
    if (JobTitle::whereHas('professions', function ($query) {
        $query->where('professions.id', 2);
    })->count() === 0) {
        $titles = [
            'Academic Clinician / Lecturer',
            'Chief of Surgery/Medicine',
            'Clinical Researcher',
            'Consultant',
            'Fellow',
            'General Practitioner',
            'Junior Doctor / Foundation Doctor',
            'Locum',
            'Medical Director',
            'Physician',
            'Registrar',
            'Resident',
            'Specialist',
            'Trainee Doctor',
        ];
        foreach ($titles as $title) {

            $job_title = JobTitle::where('title', $title)->first();

            if ($job_title) {
                $job_title->professions()->syncWithoutDetaching([2]);
            }

            $job_title = JobTitle::create([
                'title' => $title
            ]);

            $job_title->professions()->attach([2]);
        }
    }

    return JobTitle::whereHas('professions', function ($query) {
        $query->where('professions.id', 2);
    })->with('professions')->get();
});

Route::get('/post/lawyer/institutions', function () {
    if (Institution::whereHas('professions', function ($query) {
        $query->where('professions.id', 1);
    })->count() === 0) {
        $titles = [
            'Associate / Solicitor',
            'Barrister',
            'Clerk',
            'Consultant',
            'Counsel',
            'General Counsel',
            'In-house Counsel',
            'Paralegal',
            'Partner',
            'Pupil Barrister',
            'Trainee Solicitor'
        ];
        foreach ($titles as $title) {
            $institution = Institution::create([
                'title' => $title
            ]);

            $institution->professions()->attach([1]);
        }
    }

    return Institution::whereHas('professions', function ($query) {
        $query->where('professions.id', 1);
    })->with('professions')->get();
});

Route::get('/post/medicine/institutions', function () {
    if (Institution::whereHas('professions', function ($query) {
        $query->where('professions.id', 2);
    })->count() === 0) {
        $titles = [
            'Academic / Teaching Institutions',
            'Clinics',
            'Hospitals',
            'In-House (Corporate / Occupational Medicine)',
            'Long-Term Care Facilities',
            'Mental Health Facilities',
            'NGOs / Humanitarian Organisations',
            'Private Practice',
            'Public Health Organisations',
            'Rehabilitation Centres',
            'Research Institutions',
            'Training or Simulation Centres'
        ];
        foreach ($titles as $title) {

            $institution = Institution::where('title', $title)->first();

            if ($institution) {
                $institution->professions()->syncWithoutDetaching([2]);
            }

            $institution = Institution::create([
                'title' => $title
            ]);

            $institution->professions()->attach([2]);
        }
    }

    return Institution::whereHas('professions', function ($query) {
        $query->where('professions.id', 2);
    })->with('professions')->get();
});
