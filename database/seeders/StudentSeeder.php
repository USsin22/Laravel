<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Ahmed Benali',
                'email' => 'ahmed.benali@example.com',
                'phone' => '0550 12 34 56',
                'groupe' => '3ème Année Informatique',
                'filiere' => 'Informatique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatima Zohra Mansouri',
                'email' => 'fatima.mansouri@example.com',
                'phone' => '0551 23 45 67',
                'groupe' => '2ème Année Médecine',
                'filiere' => 'Médecine',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mohamed Bouchareb',
                'email' => 'mohamed.bouchareb@example.com',
                'phone' => '0552 34 56 78',
                'groupe' => '1ère Année Génie Civil',
                'filiere' => 'Génie Civil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yasmine Kaci',
                'email' => 'yasmine.kaci@example.com',
                'phone' => '0553 45 67 89',
                'groupe' => 'Master 1 Commerce',
                'filiere' => 'Sciences Commerciales',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Karim Hadj',
                'email' => 'karim.hadj@example.com',
                'phone' => '0554 56 78 90',
                'groupe' => '3ème Année Électronique',
                'filiere' => 'Génie Électrique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nadia Merabet',
                'email' => 'nadia.merabet@example.com',
                'phone' => '0555 67 89 01',
                'groupe' => '2ème Année Droit',
                'filiere' => 'Droit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sofiane Boualem',
                'email' => 'sofiane.boualem@example.com',
                'phone' => '0556 78 90 12',
                'groupe' => 'Master 2 Intelligence Artificielle',
                'filiere' => 'Informatique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amira Tlemcani',
                'email' => 'amira.tlemcani@example.com',
                'phone' => '0557 89 01 23',
                'groupe' => '1ère Année Architecture',
                'filiere' => 'Architecture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rachid Ouled',
                'email' => 'rachid.ouled@example.com',
                'phone' => '0558 90 12 34',
                'groupe' => '3ème Année Comptabilité',
                'filiere' => 'Sciences Financières',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lilia Bensalem',
                'email' => 'lilia.bensalem@example.com',
                'phone' => '0559 01 23 45',
                'groupe' => '2ème Année Biologie',
                'filiere' => 'Sciences Biologiques',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hichem Djebbar',
                'email' => 'hichem.djebbar@example.com',
                'phone' => '0560 12 34 56',
                'groupe' => 'Master 1 Réseaux',
                'filiere' => 'Télécommunications',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ines Bouzid',
                'email' => 'ines.bouzid@example.com',
                'phone' => '0561 23 45 67',
                'groupe' => '1ère Année Psychologie',
                'filiere' => 'Sciences Humaines',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yacine Sahraoui',
                'email' => 'yacine.sahraoui@example.com',
                'phone' => '0562 34 56 78',
                'groupe' => '3ème Année Mécanique',
                'filiere' => 'Génie Mécanique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sara Amrani',
                'email' => 'sara.amrani@example.com',
                'phone' => '0563 45 67 89',
                'groupe' => 'Master 2 Marketing',
                'filiere' => 'Sciences Commerciales',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
