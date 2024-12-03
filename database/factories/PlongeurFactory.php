<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plongeur>
 */
class PlongeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'genre' => $this->faker->randomElement(["Homme", "Femme", "Enfant"]),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'image' => "https://picsum.photos/800/600?random=" . $this->faker->numberBetween(1000, 3000),
            'email' => $this->faker->email(),
            'adresse' => $this->faker->address(),
            'code_postal' => $this->faker->numberBetween(10000, 99999),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            'date_de_naissance' => $this->faker->date(),
            'profession' => $this->faker->sentence(),
            'telephone_fixe' => $this->faker->phoneNumber(),
            'telephone_fixe_diffusable' => $this->faker->boolean(),
            'telephone_portable' => $this->faker->phoneNumber(),
            'telephone_portable_diffusable' => $this->faker->boolean(),
            'nom_persone_cas_urgence' => $this->faker->lastName(),
            'prenom_persone_cas_urgence' => $this->faker->firstName(),
            'jour_entrainement' => $this->faker->randomElement(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanch"]),
            'telephone_fixe_persone_cas_urgence' => $this->faker->phoneNumber(),
            'telephone_portable_persone_cas_urgence' => $this->faker->phoneNumber(),
            'email_persone_cas_urgence' => $this->faker->email(),
            'lien_parente_persone_cas_urgence' => $this->faker->sentence(),
            'n_licence' => $this->faker->numberBetween(10000, 99999),
            'date_visite_medicale' => $this->faker->date(),
            'id_niveau' => $this->faker->randomElement([1, 2, 3, 4]),
            'enseignement' => $this->faker->sentence(),
            'qualifications' => $this->faker->sentence(),
            'cree_par' => User::all()->random()->id,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}