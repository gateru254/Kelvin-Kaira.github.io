@extends('layouts.app')

@section('content')
<section id="contact" class="contact-section">
    <h2 class="section-title">Get In Touch</h2>
    <p class="section-subtitle">Feel free to reach out via email, LinkedIn, or the form below.</p>

    <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:yourname@email.com">yourname@email.com</a></p>
        <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/yourprofile" target="_blank">linkedin.com/in/yourprofile</a></p>
    </div>

    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
</section>
@endsection
