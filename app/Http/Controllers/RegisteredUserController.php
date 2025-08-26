<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;


class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
   $userAttributes = $request->validate([
    'name' => ['required'],
    'email' => ['required', 'email', 'unique:users,email'],
    'password' => ['required', 'confirmed', Password::min(6)],
]);

$employerAttributes = $request->validate([
    'employer' => ['required'],
    'logo' => ['nullable', 'image', 'max:2048'],
    'email' => ['nullable', 'email', 'unique:users,email'],
    'website.com' => ['nullable', 'url']
    
]);

// إذا رفع صورة نخزنها، إذا لا نخزن صورة افتراضية
$logoPath = $request->hasFile('logo')
    ? $request->file('logo')->store('logos')
    : 'logos/default.png';

$user = User::create($userAttributes);
$user->employer()->create([
    'name' => $employerAttributes['employer'],
    'logo' => $logoPath,
    'email' => $user->email, // أضف هذا
     'website' => $request->input('website.com', null)// استخدم الافتراضي هنا
]);

Auth::login($user);

// لو حابب تفحص البيانات
// dd($user);

return redirect('/')->with('success', 'Registration successful!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
}


  

   
}
