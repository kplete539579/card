<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display the digital card profile.
     */
    public function show()
    {
        $profile = Profile::getProfileData();
        return view('profile', compact('profile'));
    }
}