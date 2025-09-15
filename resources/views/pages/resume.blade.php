@extends('layouts.app')

@section('content')
<section id="resume" class="resume-section">
    <h2 class="section-title">My Resume</h2>
    <p class="section-subtitle">Here’s my professional experience,core skills, and academic qualifications.</p>

    <div class="resume-container">
        <!-- Embedded PDF Resume -->
        <iframe src="{{ asset('files/resume.pdf') }}" width="100%" height="700px"></iframe>
    </div>

    <div class="resume-download">
        <a href="{{ asset('files/resume.pdf') }}" download class="resume-btn">Download Resume (PDF)</a>
    </div>
</section>
@endsection