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
                'name' => 'Categorie#1', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Categorie#2', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Categorie#3', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
