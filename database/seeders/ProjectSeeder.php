<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Gdr Role',
                'url' => 'https://github.com/Beniamino-Soccio/laravel-dc-comics',
                'info' => 'Progetto fatto con Laravel 10 dove mostra in pagina una lista di personaggi editabili e cancellabili',
            ],
            [
                'title' => 'Boolzap',
                'url' => 'https://github.com/Beniamino-Soccio/vue-boolzapp',
                'info' => 'App implementata con Vue 3 dove replica le funzionalità di whatsapp web',
            ],
            [
                'title' => 'Spotify-web',
                'url' => 'https://github.com/Beniamino-Soccio/html-css-spotifyweb',
                'info' => "Progetto implementato con l'utilizzo di html e css che replica la hompage di spotify",
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
