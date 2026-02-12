<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUserRequest $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'role' => UserRole::Customer,
            'password' => Hash::make($request->password),
        ]);

        $statusArray = explode(',', $request->status);
        $goalsArray = explode(',', $request->goals);
        $languagesArray = explode(',', $request->languages);

        $user_meta = UserMeta::create([
            'user_id' => $user->id,
            'other_career_stage' => in_array(0, $statusArray) ? $request->other_status : '',
            'other_interested_field' => ($request->interested_field == 0) ? $request->other_interested_field : '',
            'location_id' => $request->location,
            'joinned_as' => $request->joinned_as,
            'other_goal' => in_array(0, $goalsArray) ? $request->other_goals : '',
            'community_updates' => (bool) $request->community_updates,
            'accepted_terms' => (bool) $request->terms_accepted
        ]);

        $statusArray = array_filter(
            explode(',', $request->status),
            fn($value) => $value !== '0' && $value !== 0
        );

        $goalsArray = array_filter(
            explode(',', $request->goals),
            fn($v) => $v !== '0' && $v !== 0
        );

        $languagesArray = array_filter(
            explode(',', $request->languages),
            fn($v) => $v !== '0' && $v !== 0
        );

        $user->languages()->sync($languagesArray);
        $user->careerStages()->sync($statusArray);
        $user->careerGoals()->sync($goalsArray);
        if ($request->interested_field != 0) {
            $user_meta->interestedFields()->sync($request->interested_field);
        }

        // return User::with('userMeta.interestedFields', 'userMeta.location', 'languages', 'careerStages', 'careerGoals')
        // ->orderBy('id', 'desc')
        // ->get();

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        Auth::login($user);
        $token = $user->createToken('Token for ' . $request->first_name);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);

        // return redirect(route('dashboard', absolute: false));
    }
}
