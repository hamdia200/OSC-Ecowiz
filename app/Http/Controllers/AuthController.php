<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User si vous en avez un

class AuthController extends Controller
{
    // Affiche le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    // Gère le processus d'inscription
    public function register(Request $request)
    {
        // Valider les données reçues du formulaire
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mot_de_passe' => 'required|string|min:6|confirmed',
        ]);

        // Créer un nouvel utilisateur dans la base de données
        $user = new User([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => bcrypt($data['mot_de_passe']),
        ]);
        $user->save();

        // Rediriger l'utilisateur vers une page appropriée après l'inscription
        return redirect('/accueil')->with('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    }
    
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('login');
    }

    // Gère le processus de connexion
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification est réussie
            return redirect('/accueil')->with('success', 'Connexion réussie.');
        } else {
            // L'authentification a échoué
            return back()->withErrors(['email' => 'Les informations d\'identification ne correspondent pas.']);
        }
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Déconnexion réussie.');
    }
}

