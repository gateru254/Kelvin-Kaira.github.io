@extends('layouts.app')

@section('content')
<section class="projects">
    <h1>Projects</h1>

    <div class="projects-grid">
        @php
            $projects = [
                [
                    'img' => asset('images/fas.png'),
                    'title' => 'Fashion Dashboard',
                    'desc' => 'Submission for Fashion Analysis Challenge (APR 2025)',
                    'article_url' => '#',
                    'dashboard_url' => asset('files/fashion.pptx') // Downloadable
                ],
                [
                    'img' => asset('images/cust.png'),
                    'title' => 'Customer Churn Analysis',
                    'desc' => 'Power BI dashboard analyzing customer churn patterns.',
                    'article_url' => '#',
                    'dashboard_url' => 'https://app.powerbi.com/links/s2cnqgFn_0?ctid=e9fd2f4e-d7d8-40ff-8e75-de7ab6185b42&pbi_source=linkShare'
                ],
                [
                    'img' => asset('images/crime.png'),
                    'title' => 'Women Crime Analysis in India',
                    'desc' => 'Dashboard visualizing crime trends affecting women across India.',
                    'article_url' => '#',
                    'dashboard_url' => 'https://app.powerbi.com/links/SYwUa1m6mi?ctid=e9fd2f4e-d7d8-40ff-8e75-de7ab6185b42&pbi_source=linkShare'
                ],
                [
                    'img' => asset('images/cb.png'),
                    'title' => 'Wote County Budget Analysis',
                    'desc' => 'Interactive Power BI dashboard for Wote County budget breakdown.',
                    'article_url' => '#',
                    'dashboard_url' => 'https://app.powerbi.com/links/l-0WUEEGte?ctid=e9fd2f4e-d7d8-40ff-8e75-de7ab6185b42&pbi_source=linkShare'
                ],
                [
                    'img' => asset('images/dcleaning.png'),
                    'title' => 'Busara R&A',
                    'desc' => 'Busara research analysis project overview.',
                    'article_url' => '#',
                    'dashboard_url' => asset('files/Busara report.pptx') // Downloadable
                ],
                [
                    'img' => asset('images/Machine.png'),
                    'title' => 'Machine Downtime',
                    'desc' => 'Analysis of machine downtime in Mook Industry.',
                    'article_url' => '#',
                    'dashboard_url' => '#' // No link yet
                ],
            ];
        @endphp

        @foreach($projects as $project)
            <div class="project-card">
                @if(!empty($project['img']))
                    <img src="{{ $project['img'] }}" alt="{{ $project['title'] }}">
                @else
                    <div class="no-image">No Image</div>
                @endif

                <h3>{{ $project['title'] }}</h3>
                <p>{{ $project['desc'] }}</p>

                <div class="project-buttons">
                    {{-- Read Article --}}
                    <a href="{{ $project['article_url'] }}" class="btn-read" target="_blank">Read More</a>

                    {{-- Dashboard/Script Buttons --}}
                    @if(Str::contains($project['dashboard_url'], '.pptx'))
                        <a href="{{ $project['dashboard_url'] }}" class="btn-dashboard" download>Download Dashboard</a>
                    @elseif($project['title'] === 'Machine Downtime')
                        <a href="{{ $project['dashboard_url'] }}" class="btn-dashboard">View Script</a>
                    @elseif($project['dashboard_url'] !== '#')
                        <a href="{{ $project['dashboard_url'] }}" class="btn-dashboard" target="_blank">View Dashboard</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
