<?php

use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = new App\Categorie();
        $categorie->titre = "Emploi";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Immobilier";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Véhicules";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Eléctronique Electroménager";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Informatique Multimédia";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Matériels Equipements";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Maison";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Vacances Voyage";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Mode Beauté";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Services";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Loisirs Divertissements";
        $categorie->save();

        $categorie = new App\Categorie();
        $categorie->titre = "Divers";
        $categorie->save();
    }
}
