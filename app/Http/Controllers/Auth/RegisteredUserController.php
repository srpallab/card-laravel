<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
  /**
   * Display the registration view.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    return view('auth.register');
  }

  /**
   * Handle an incoming registration request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
      'card_type' => ['required', 'string']
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'card_type' => $request->card_type,
      'dob' => $request->dob,
      'state' => $request->state,
      'district' => $request->district,
      'phone' => $request->phone,
      'waphone' => $request->waphone,
      'address' => $request->address ?? "",
      'pincode' => $request->pincode ?? "",
      'gender' => $request->gender ?? "",
      'father_name' => $request->father_name ?? "",
      'qualification' => $request->qualification ?? "",
      'aadhar_number' => $request->aadhar_number ?? "",
      'id_type' => $request->id_type ?? "",
      'profile_picture' => $request->profile_picture ?? "",
      'marksheet_front_img' => $request->marksheet_front_img ?? "",
      'id_card_front_img' => $request->id_card_front_img ?? "",
      'id_card_back_img' => $request->id_card_back_img ?? "",
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
  }
}
