<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {
        $user = Socialite::driver($social)->user();
		dd($user);
        // $user->token;
    }
}
?>