<?php

use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'pages.home')->name('home');

// Static pages
Route::view('/resume', 'pages.resume')->name('resume');

// Datasets page (using Blade)
Route::view('/datasets', 'pages.datasets')->name('datasets');

// Blog redirect
Route::get('/blog', function () {
    return redirect()->away('https://dev.to/gateru');
})->name('blog');

// Projects page with data
Route::get('/projects', function() {
    $projects = [
        [
            'img' => asset('images/fas.png'),
            'title' => 'Fashion Dashboard',
            'desc' => 'Submission for Fashion Analysis Challenge (APR 2025)',
            'tools' => 'Microsoft Excel, Microsoft Power BI, Figma, SQL, Microsoft power point',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
        [
            'img' => asset('images/crime.png'),
            'title' => 'Women Crime Analysis in India',
            'desc' => 'Understanding the crimes affecting women in India',
            'tools' => 'Microsoft Excel, Microsoft Power BI',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
        [
            'img' => asset('images/cust.png'),
            'title' => 'Customer Churn Analysis',
            'desc' => 'A Power BI Analysis of Customer Churn analysis',
            'tools' => 'Microsoft Excel, Microsoft Power BI',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
        [
            'img' => asset('images/Machine.png'),
            'title' => 'Machine Downtime',
            'desc' => 'Analysis of machine downtime in Mook Industry',
            'tools' => 'SQL, Python, Numpy, Seaborn',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
        [
            'img' => asset('images/cb.png'),
            'title' => 'Wote County Budget Analysis',
            'desc' => 'A Power BI Analysis of Wote County budget analysis',
            'tools' => 'Microsoft Excel, Microsoft Power BI',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
        [
            'img' => asset('images/dcleaning.png'),
            'title' => 'Busara R&A',
            'desc' => 'Busara research analysis',
            'tools' => 'Microsoft Excel, PowerPoint, Python',
            'article_url' => '#',
            'dashboard_url' => '#'
        ],
    ];

    return view('pages.projects', compact('projects'));
})->name('projects');
