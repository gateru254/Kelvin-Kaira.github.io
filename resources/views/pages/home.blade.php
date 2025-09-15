@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')

<!-- Top Header -->
<header class="top-header">
    <div class="header-container">
        <a href="{{ url('/') }}" class="logo">
            <strong>Kelvin Kiarie Kaira</strong> 
            <span class="portfolio-text">Portfolio</span>
        </a>

        <!-- Social Icons -->
        <div class="header-socials">
            <a href="https://x.com/nash_kevoh" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/kelvin-kiarie-906b09135/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://dev.to/gateru" target="_blank"><i class="fab fa-medium"></i></a>
            <a href="https://github.com/gateru254" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </div>
    <div class="blue-line"></div>
</header>

<!-- Hero Section -->
<section id="bio" class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h2>Hi, I'm Kaira Kelvin</h2>
            <p>
                I am a <strong>Certified Data and Business Intelligence Analyst</strong> 
                with a passion for transforming complex datasets into clear, actionable insights. 
                With over 2 years of experience, I empower businesses to make informed decisions 
                through the power of analysis and visualization. My expertise also lies in creating interactive 
                dashboards with Tableau and Power BI. Besides transforming data I provide frontline 
                technical support, achieving a 90% first-call resolution rate in resolving technical issues 
                leading to improved user satisfaction. 
            </p>
            <a href="{{ url('/contact') }}" class="contact-btn">Contact Me</a>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/kiarie.jpeg') }}" alt="Kaira Kelvin">
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section">
    <h2>Skills and Experiences</h2>
    <div class="skills-divider"></div>

    <div class="skills-grid">

        <!-- Data Analysis -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src ="{{ asset('images/daq.png') }}" alt="Data Analysis">
            </div>
            <div class="skill-info">
                <h3>Data Analysis</h3>
                <p>Using Power BI, SQL, and Excel, I analyze data to extract insights that are essential for making decisions.</p>
            </div>
        </div>

        <!-- Data Visualization -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src ="{{ asset('images/vis.png') }}" alt="Data Visualization">
            </div>
            <div class="skill-info">
                <h3>Data Visualization</h3>
                <p>I use Power BI, Tableau, and Excel to create dashboards and reports. Power BI allows for interactive dashboards, 
                    and Tableau provides advanced visualization.
                </p>
            </div>
        </div>

        <!-- Communication & Mentoring -->
        <div class="skill-card">
            <div class="skill-icon">
                 <img src="{{ asset('images/communication.png') }}" alt="Communication and Mentoring">
            </div>
            <div class="skill-info">
                <h3>Communication & Mentoring</h3>
                <p>I effectively share insights and train team members.</p>
                <p>Ability to handle Q&A, excellent listening and questioning skills.</p>
            </div>
        </div>

        <!-- Biometric Installation -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/biom.png') }}" alt="Biometric Installation">
            </div>
            <div class="skill-info">
                <h3>Biometric Installation</h3>
                <p>Install and configure biometric systems for access control.</p>
            </div>
        </div>

        <!-- CCTV Installation -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/camera.png') }}" alt="CCTV Installation">
            </div>
            <div class="skill-info">
                <h3>CCTV Installation</h3>
                <p>Install and configure NVR/DVR for optimal video storage and playback.</p>
                <p>Configure and maintain IP cameras, cable pulling, and full setup.</p>
            </div>
        </div>

        <!-- End User Support -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/IT.png') }}" alt="End User Support">
            </div>
            <div class="skill-info">
                <h3>End User Support</h3>
                <p>Utilize ITSM tools, monitor MPLS links, and provide IT troubleshooting.</p>
            </div>
        </div>

        <!-- Repeat End User Support Cards (if needed) -->
        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/project.png') }}" alt="End User Support">
            </div>
            <div class="skill-info">
                <h3>Project Management</h3>
                <p>I use AutoCAD to design data points.Also, I oversaw the LAN upgrade at JKIA Forodha House, 
                    leveraging my expertise in network design, implementation, and team collaboration .</p>
            </div>
        </div>

        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/time.png') }}" alt="Time Management">
            </div>
            <div class="skill-info">
                <h3>Time management and leadership </h3>
                <p>Proven track record of delivering projects on schedule without compromising quality.Also,
                Experienced in guiding and motivating teams to achieve common goals
                </p>
            </div>
        </div>

        <div class="skill-card">
            <div class="skill-icon">
                <img src="{{ asset('images/writing.png') }}" alt="Technical Writer">
            </div>
            <div class="skill-info">
                <h3>Technical Writer</h3>
                <p>Excel at demystifying complex topics, making them easy to understand for everyone.</p>
            </div>
        </div>

    </div>
</section>

@endsection
