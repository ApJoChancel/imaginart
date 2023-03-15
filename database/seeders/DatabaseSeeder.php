<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //artist_categories
        DB::table('artist_categories')->insert([
            [
                'id' => 1,
                'name' => 'Peintre', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Sculpteur', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Décorateur', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Photographe', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        //users
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Imagin\'art', 
                'email' => 'dev@imaginart.com', 
                'password' => Hash::make('imaginart'), 
                'country' => 'Bénin', 
                'address' => 'Porto-novo', 
                'phone' => '+229 60 00 00 00', 
                'type' => 'admin',
                'presentation' =>null,
                'artistic_process' => null,
                'picture' => null, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'John Doe', 
                'email' => 'johndoe@gmail.com', 
                'password' => Hash::make('imaginart'), 
                'country' => 'Bénin', 
                'address' => 'Porto-novo', 
                'phone' => '+229 60 00 00 00', 
                'type' => 'Artiste', 
                'presentation' => 'Je suis un jeune artiste peintre.',
                'artistic_process' => 'Ma démarche consiste à faire du beau avec ce que je trouve',
                'picture' => 'public/users/john_doe.png',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Jane Doe', 
                'email' => 'janedoe@gmail.com', 
                'password' => Hash::make('imaginart'), 
                'country' => 'Bénin', 
                'address' => 'Porto-novo', 
                'phone' => '+229 60 00 00 00', 
                'type' => 'Collectionneur', 
                'presentation' =>null,
                'artistic_process' => null,
                'picture' => null, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        //artwork_categories
        DB::table('artwork_categories')->insert([
            [
                'id' => 1,
                'name' => 'Peinture', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Sculpture', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Photographie', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Dessin', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Imprimer', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Travail sur papier', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Textile', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Art numérique', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        //category_styles
        DB::table('category_styles')->insert([
            [
                'id' => 1,
                'name' => 'Abstrait',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => 'Figuratif',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => 'Impressionisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => 'Aborigène',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => 'Cubisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => 'Fauvisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => 'Futuriste',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => 'Géométrique',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => 'Métaphysique',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => 'Minimalisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'name' => 'Naïf',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'name' => 'Oriental',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'name' => 'Pop Art',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'name' => 'Primitivisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'name' => 'Semi-abstrait',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'name' => 'Surréalisme',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'name' => 'Symbolique',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'name' => 'Ancien',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Sur Pied',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Objet',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'name' => 'Mur-objet',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'name' => 'Sculptures d\'extérieur',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'name' => 'Bousiller',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'name' => 'Assemblage',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'name' => 'Installation',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'name' => 'Lumières',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'name' => 'Prêt à l\'emploi',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Couleur',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Numérique',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'name' => 'Noir et blanc',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'name' => 'Moderne',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'name' => 'Photo de rue',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'name' => 'Sépia',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'name' => 'Panoramique',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Figuratif',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'name' => 'Le réalisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'name' => 'Symbolique',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'name' => 'Aborigène',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'name' => 'Abstrait',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'name' => 'Cubisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'name' => 'Fauvisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'name' => 'Futuriste',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'name' => 'Géométrique',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'name' => 'Impressionnisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'name' => 'Métaphysique',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'name' => 'Minimalisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'name' => 'Naïf',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'name' => 'Oriental',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'name' => 'Outsider',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'name' => 'Pop Art',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'name' => 'Primitivisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'name' => 'Semi-abstrait',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'name' => 'Surréalisme',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'name' => 'Ancien', 
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'Pop Art',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'Figuratif',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'name' => 'Abstrait',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'name' => 'Pop',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'name' => 'Le réalisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'name' => 'Aborigène',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'name' => 'Cubisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'name' => 'Fauvisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'name' => 'Futuriste',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'name' => 'Géométrique',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'name' => 'Impressionnisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'name' => 'Métaphysique',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'name' => 'Minimalisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'name' => 'Naïf',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'name' => 'Oriental',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'name' => 'Outsider',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'name' => 'Primitivisme',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => 'Figuratif',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => 'Abstrait',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'name' => 'Pop Art',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'name' => 'Aborigène',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'name' => 'Cubisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'name' => 'Fauvisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'name' => 'Futuriste',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'name' => 'Géométrique',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'name' => 'Impressionnisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'name' => 'Métaphysique',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'name' => 'Minimalisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'name' => 'Naïf',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'name' => 'Oriental',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'name' => 'Outsider',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'name' => 'Primitivisme',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => 'Abstrait',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'name' => 'Figuratif',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'name' => 'Géométrique',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'name' => 'Aborigène',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'name' => 'Cubisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'name' => 'Fauvisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'name' => 'Futuriste',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'name' => 'Impressionnisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'name' => 'Métaphysique',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'name' => 'Minimalisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'name' => 'Naïf',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'name' => 'Oriental',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'name' => 'Outsider',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'name' => 'Pop Art',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'name' => 'Primitivisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'name' => 'Le réalisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'name' => 'Semi-abstrait',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'name' => 'Surréalisme',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'name' => 'Symbolique',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'name' => 'Figuratif',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'name' => 'Pop Art',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'name' => 'Ancien',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'name' => 'Semi-abstrait',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 126,
                'name' => 'Abstrait',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 127,
                'name' => 'Aborigène',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 128,
                'name' => 'Des bandes dessinées',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 129,
                'name' => 'Cubisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 130,
                'name' => 'Expressionnisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 131,
                'name' => 'Fauvisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 132,
                'name' => 'Futuriste',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 133,
                'name' => 'Géométrique',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 134,
                'name' => 'Impressionnisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 135,
                'name' => 'Métaphysique',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 136,
                'name' => 'Minimalisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 137,
                'name' => 'Naïf',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 138,
                'name' => 'Oriental',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 139,
                'name' => 'Outsider',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 140,
                'name' => 'Primitivisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 141,
                'name' => 'Le réalisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 142,
                'name' => 'Surréalisme',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 143,
                'name' => 'Symbolique',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 144,
                'name' => 'Pop',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 145,
                'name' => 'Ancien',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        //category_technics
        DB::table('category_technics')->insert([
            [
                'id' => 1,
                'name' => 'Acrylique',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Huile',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => 'Peinture en aérosol',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => 'Collage',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => 'Encrer',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => 'Ciment',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => 'Craie',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => 'Charbon',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => 'Crayon de couleur',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => 'Coton',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => 'Terre',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => 'Broderie',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => 'Émail',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'name' => 'Gravure',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'name' => 'Feutre',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'name' => 'Dorure',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'name' => 'Gouache',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'name' => 'Graffiti',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'name' => 'Graphite',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'name' => 'Encre indienne',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'name' => 'Laque',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'name' => 'Cuir',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'name' => 'Lithographie',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'name' => 'Objets',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'name' => 'Pastel à l\'huile',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'name' => 'Pastel',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'name' => 'Perle',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'name' => 'Stylo',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'name' => 'Crayon',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'name' => 'Pigments',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'name' => 'Plâtre',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'name' => 'Résine',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'name' => 'Sable',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'name' => 'Coloration',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'name' => 'Goudron',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'name' => 'Vinyle',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'name' => 'Aquarelle',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'name' => 'La cire',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'name' => 'Laine',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'name' => 'Zinc',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'name' => 'Détrempe',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Acier',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Résine',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'name' => 'Bronze',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'name' => 'Bois',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'name' => 'Acrylique',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'name' => 'Aluminium',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'name' => 'Os',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'name' => 'Papier carton',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'name' => 'Fonte',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'name' => 'Ciment',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'name' => 'Argile',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'name' => 'Feuille d\'or',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'name' => 'Cuir',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'name' => 'Marbre',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'name' => 'Miroir',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'name' => 'Mosaïque',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'name' => 'Tube néon',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'name' => 'Objets',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'name' => 'Papier',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'name' => 'Perle',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'name' => 'Plâtre',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'name' => 'Plastique',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'name' => 'Plexiglas',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'name' => 'Argent',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'name' => 'Acier inoxydable',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'name' => 'Empaillage',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'name' => 'Terre cuite',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'name' => 'Textile',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'name' => 'Zinc',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Numérique',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Hybride',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'name' => 'Analogue',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Pastel',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Crayon',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'name' => 'Encre indienne',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'name' => 'Charbon',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'name' => 'Stylo',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'name' => 'Graphite',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'name' => 'Crayon de couleur',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'name' => 'Craie',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'name' => 'Feutre',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'Lithographie',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'Impression d\'écran',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'name' => 'Impression giclée',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'name' => 'Impression en relief',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'name' => 'Gravure',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'name' => 'Monotype',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => 'Aquarelle',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => 'Collage',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'name' => 'Acrylique',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'name' => 'Pigments',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'name' => 'Encre indienne',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'name' => 'Ciment',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'name' => 'Craie',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'name' => 'Charbon',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'name' => 'Crayon de couleur',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'name' => 'Coton',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'name' => 'Terre',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'name' => 'Broderie',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'name' => 'Émail',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'name' => 'Gravure',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'name' => 'Feutre',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'name' => 'Dorure',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'name' => 'Gouache',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'name' => 'Graffiti',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'name' => 'Graphite',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'name' => 'Laque',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'name' => 'Lithographie',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'name' => 'Objets',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'name' => 'Huile',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'name' => 'Pastel',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'name' => 'Stylo',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'name' => 'Crayon',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'name' => 'Sable',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'name' => 'Peinture en aérosol',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'name' => 'Détrempe',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'name' => 'Vinyle',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'name' => 'La cire',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'name' => 'Laine',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => 'Laine',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => 'Broderie',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'name' => 'Coton',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'name' => 'Pigments',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'name' => 'Graffiti',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 126,
                'name' => 'Collage',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 127,
                'name' => 'Graffiti',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 128,
                'name' => 'Aquarelle',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 129,
                'name' => 'Crayon',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 130,
                'name' => 'Stylo',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 131,
                'name' => 'Dorure',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 132,
                'name' => 'Gouache',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        //category_themes
        DB::table('category_themes')->insert([
            [
                'id' => 1,
                'name' => 'Portrait',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Vie Courante',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => 'Abstraction',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => 'Paysage',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => 'Nature',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => 'Culture pop',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => 'Animaux',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => 'Fantaisie',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => 'Mode',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => 'Historique et politique',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => 'Marin',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => 'Provocant',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => 'Religion',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'name' => 'Autoportrait',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'name' => 'Nature morte',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'name' => 'Art de rue',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'name' => 'Urbain',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'name' => 'Vanité',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'name' => 'Conceptuel',
                'artwork_category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Forme Humaine',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Nature',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'name' => 'Abstraction',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'name' => 'Conceptuel',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'name' => 'Nu',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'name' => 'Animaux',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'name' => 'Architecture',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'name' => 'Fantaisie',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'name' => 'Historique et politique',
                'artwork_category_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Paysage',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Urbain',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'name' => 'Beaux-Arts',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'name' => 'Portrait',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'name' => 'Nature',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'name' => 'Abstrait',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'name' => 'Animaux',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'name' => 'Conceptuel',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'name' => 'Documentaire',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'name' => 'Mode',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'name' => 'Nu',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'name' => 'Photo journalisme',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'name' => 'Mise en scène',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'name' => 'Voyage',
                'artwork_category_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Fantaisie',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Abstraction',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'name' => 'Portrait',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'name' => 'Paysage',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'name' => 'Conceptuel',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'name' => 'Animaux',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'name' => 'Vie courante',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'name' => 'Mode',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'name' => 'Marin',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'name' => 'Nu',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'name' => 'Religion',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'name' => 'Autoportrait',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'name' => 'Nature morte',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'name' => 'Urbain',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'name' => 'Vanité',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'name' => 'Provocant',
                'artwork_category_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'Vie Courante',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'Urbain',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'name' => 'Portrait',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'name' => 'Paysage',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'name' => 'Fantaisie',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'name' => 'Animaux',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'name' => 'Conceptuel',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'name' => 'Mode',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'name' => 'Marin',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'name' => 'Nu',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'name' => 'Religion',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'name' => 'Autoportrait',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'name' => 'Nature morte',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'name' => 'Vanité',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'name' => 'Provocant',
                'artwork_category_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => 'Paysage',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => 'Art De Rue',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'name' => 'Abstraction',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'name' => 'Portrait',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'name' => 'Conceptuel',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'name' => 'Animaux',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'name' => 'Vie courante',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'name' => 'Fantaisie',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'name' => 'Mode',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'name' => 'Marin',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'name' => 'Nu',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'name' => 'Provocant',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'name' => 'Religion',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'name' => 'Autoportrait',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'name' => 'Nature morte',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'name' => 'Urbain',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'name' => 'Vanité',
                'artwork_category_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => 'Animaux',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => 'Portrait',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'name' => 'Abstraction',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'name' => 'Nature morte',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'name' => 'Fantaisie',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'name' => 'Conceptuel',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'name' => 'Vie courante',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'name' => 'Mode',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'name' => 'Paysage',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'name' => 'Marin',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'name' => 'Nu',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'name' => 'Provocant',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'name' => 'Religion',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'name' => 'Autoportrait',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'name' => 'Urbain',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'name' => 'Vanité',
                'artwork_category_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'name' => 'Abstraction',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'name' => 'Marin',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'name' => 'Portrait',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'name' => 'Paysage',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'name' => 'Conceptuel',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'name' => 'Animaux',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'name' => 'Vie courante',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'name' => 'Fantaisie',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'name' => 'Mode',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'name' => 'Nu',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'name' => 'Provocant',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'name' => 'Religion',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'name' => 'Autoportrait',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'name' => 'Nature morte',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'name' => 'Urbain',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'name' => 'Vanité',
                'artwork_category_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
