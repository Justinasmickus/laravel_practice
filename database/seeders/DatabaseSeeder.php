<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user =User::factory()->create([
            'name' => 'john doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel ,javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Kuršėnai',
        //     'email' => 'email@email.com',
        //     'website' => 'kuršinkelio@acme.com',
        //     'description' => 'It was popularised in the 1960s
        //      with the release of Letraset sheets containing Lorem 
        //      Ipsum passages, and more recently with desktop publishing
        //       software like Aldus PageMaker including versions of Lorem Ipsum.',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel ,javascript, php',
        //     'company' => 'Senukai crop',
        //     'location' => 'Radviliskis',
        //     'email' => 'emails@email.com',
        //     'website' => 'radviliskio@acme.com',
        //     'description' => 'It was popularised in the 1960s
        //      with the release of Letraset sheets containing Lorem 
        //      Ipsum passages, and more recently with desktop publishing
        //       software like Aldus PageMaker including versions of Lorem Ipsum.',
        // ]);
    }
}
