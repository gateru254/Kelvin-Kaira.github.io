<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Spotify Wrapped Dashboard',
            'description' => 'Analyzing user listening patterns, top artists, and seasonal trends.',
            'tools' => 'Excel · Power BI · Figma',
            'dashboard_url' => '#',
            'article_url' => '#',
            'thumbnail' => 'images/spotify.jpg',
        ]);

        Project::create([
            'title' => 'Hotel Booking Analysis',
            'description' => 'Understanding cancellations: lead time, seasonality, and channel effects.',
            'tools' => 'Excel · Power BI · Figma',
            'dashboard_url' => '#',
            'article_url' => '#',
            'thumbnail' => 'images/hotel.jpg',
        ]);

        Project::create([
            'title' => 'Pharmaceutical Sales Trends',
            'description' => 'Power BI analysis of demand drivers and product mix for a retail pharmacy.',
            'tools' => 'Excel · Power BI',
            'dashboard_url' => '#',
            'article_url' => '#',
            'thumbnail' => 'images/pharma.jpg',
        ]);
    }
}
