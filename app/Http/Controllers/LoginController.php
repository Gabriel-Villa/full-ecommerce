<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private $driver;
    public function __construct()
    {
        $this->driver = ['github', 'google'];
    }

    public function redirectToDriver($driver)
    {
        if(in_array($driver, $this->driver)){
            return Socialite::driver($driver)->redirect();
        }

        abort(404);
    }
    /**
     * Obtiene la información del usuario de GitHub.
     */
    public function handleDriverCallback($driver)
    {
        $response = Socialite::driver($driver)->stateless()->user();
       
        $appUser = User::firstOrCreate([
            'email' => $response->getEmail()
        ], [
            'name' => $response->getName(),
            'email' => $response->getEmail(),
            'password' => Hash::make($response->getEmail()),
        ]);

        auth()->login($appUser);
        return redirect('/');

    }

}
