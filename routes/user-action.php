
<?php

use App\Enums\UserRole;
use App\Models\AttendedUniversity;
use App\Models\ProfessionAficionadoProfile;
use App\Models\UniversityAficionadoProfile;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/new-user', function (Request $request) {

    return Auth::user();

});

Route::get('/post/user', function () {
    $user = User::create([
        'first_name' => 'Helsey',
        'last_name' => 'Lira',
        'email' => 'helsey3@gmail.com',
        'date_of_birth' => '1995-02-05',
        'gender' => 0,
        'role' => UserRole::Admin,
        'password' => bcrypt('secret'),
    ]);

    $user_meta = UserMeta::create([
        'user_id' => $user->id,
        'other_career_stage' => 'This is test career',
        'other_interested_field' => 'This is test interested field',
        'location_id' => 4,
        'joinned_as' => 1,
        'other_goal' => 'Other goal',
        'community_updates' => true,
        'accepted_terms' => true
    ]);

    $user->languages()->sync([4, 5]);
    $user->careerStages()->sync([2, 3, 5]);
    $user->careerGoals()->sync([2, 3, 4]);
    $user_meta->interestedFields()->sync([1]);

    return User::with('userMeta.interestedFields', 'userMeta.location', 'languages', 'careerStages', 'careerGoals')
    ->orderBy('id', 'desc')
    ->get();

});

Route::get('/post/user/university-profile-optional/{id}', function ($id) {

    $user_meta = UserMeta::where('user_id', $id)->first();
    $user_meta->bio = 'This is bio';
    $user_meta->topics = 'This is topic';
    $user_meta->save();

    $UniversityAficionadoProfile = UniversityAficionadoProfile::where('user_id', $id)->first();
    $UniversityAficionadoProfile->course_details = 'This is course details';
    $UniversityAficionadoProfile->save();

    return User::with('userMeta.interestedFields', 'languages', 'careerStages', 'careerGoals', 'university_aficionado_profile.universities')
        ->orderBy('id', 'desc')
        ->get();
});

Route::get('/post/user/university-profile/{id}', function ($id) {

    if(UniversityAficionadoProfile::where('user_id', $id)->count() === 0){
        $user = UniversityAficionadoProfile::create([
            'user_id' => $id,
            'rate' => 300,
        ]);

        $user->universities()->attach(3, [
            'course_id' => 2,
            'status' => 1,
            'other_status' => ''
        ]);

        $user->accommodationExperiences()->attach([1, 2]);
    }

    return User::with('userMeta.interestedFields', 'languages', 'careerStages', 'careerGoals', 'university_aficionado_profile.universities')
    ->orderBy('id', 'desc')
    ->get();
});

Route::get('/post/user/profession-profile/{id}', function ($id) {

    if(ProfessionAficionadoProfile::where('user_id', $id)->count() === 0){
        $user = ProfessionAficionadoProfile::create([
            'user_id' => $id,
            'profession_id' => 1,
            'other_profession' => 'this is other profession',
            'practice_area_id' => 2,
            'job_title_id' => 3,
            'institution_id' => 5,
            'current_institution' => 'Current Institue',
            'years_of_experience' => 1,
            'university_id' => 1,
            'course_id' => 1,
            'status' => 1,
            'rate' => 500
        ]);

        $user->experiencedCountries()->attach([1, 2]);
        $user->qualifiedCountries()->attach([3, 4]);

        return User::with('userMeta.interestedFields', 'languages', 'careerStages', 'careerGoals', 'university_aficionado_profile.universities', 'profession_aficionado_profile')
        ->orderBy('id', 'desc')
        ->get();

    }

    return User::with('userMeta.interestedFields', 'languages', 'careerStages', 'careerGoals', 'university_aficionado_profile.universities')
    ->orderBy('id', 'desc')
    ->get();
});


Route::get('/login-new', function () {

    $credentials = [
        'email' => 'david.pauk@gmail.com',
        'password' => '123456789'
    ];

    if (Auth::attempt($credentials)) {

        $user = Auth::user();
        return $user->create;
    }
    return 'error';
});

