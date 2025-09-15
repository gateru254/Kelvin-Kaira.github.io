@extends('layouts.app')

@section('content')
<section class="datasets-section" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding-top: 50px;">
    <h1>Redirecting to Sample Datasets...</h1>
    <p>If you are not redirected automatically, 
        <a href="https://drive.google.com/drive/folders/1Zu15S5BZ2lG6enOLuVyJ9Ubuks-Qcv4y?usp=sharing" target="_blank">
            click here
        </a>.
    </p>
</section>

<script>
    // Delay redirect by 5 seconds (5000ms)
    setTimeout(function() {
        window.location.href = "https://drive.google.com/drive/folders/1Zu15S5BZ2lG6enOLuVyJ9Ubuks-Qcv4y?usp=sharing";
    }, 1200);
</script>
@endsection
