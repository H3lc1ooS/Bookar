<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'perfil' => ['required', 'image'],
            'telefone' => ['max:9', 'min:9']
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('perfil') && $request->file('perfil')->isValid()) {
            $file = $request->perfil;
            $extensao = $file->extension();
            $path = public_path('/img');
            $nome = md5($file->getClientOriginalName() . strtotime("now")) . "." . $extensao;

            $file->move($path, $nome);

            $user->foto = $nome;
        }

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}