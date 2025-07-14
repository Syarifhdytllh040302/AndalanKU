@extends('user.main')

@section('content')
<section id="hero-section" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); transition: background 1s; min-height: 70vh; display: flex; align-items: center; position: relative; overflow: hidden;">
    <div class="container py-5 text-white">
        <div class="row">
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-start" data-aos="fade-right" data-aos-duration="1000">
                <h1>Welcome to AndalanKu</h1>
                <p>Your one-stop solution for all your needs.</p>
                <span id="countdown" style="font-size:2rem; font-weight:bold;"></span>
                <a href="#" class="btn btn-light mt-4 px-4 py-2" style="font-weight:600;">
                    Go to Dashboard
                </a>
            </div>
        </div>
    </div>
    <!-- Animated line at the bottom -->
    <div id="progress-bar"></div>
    <style>
        #progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 6px;
            width: 0;
            background: linear-gradient(90deg, #fff 0%, #e0e0e0 100%);
            border-radius: 3px;
            transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1), background 0.5s;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        #progress-bar.full {
            width: 100%;
        }
    </style>
</section>
<script>
    const backgrounds = [
        'linear-gradient(135deg, #6a11cb 0%, #2575fc 100%)',
        'linear-gradient(135deg, #ff512f 0%, #dd2476 100%)',
        'linear-gradient(135deg, #43cea2 0%, #185a9d 100%)'
    ];
    let currentBg = 0;
    let countdown = 5;
    const heroSection = document.getElementById('hero-section');
    const countdownEl = document.getElementById('countdown');
    const progressBar = document.getElementById('progress-bar');

    function updateCountdown() {
        countdownEl.textContent = `Next background in ${countdown}...`;
    }

    function animateProgressBarAndBackground() {
        // Reset progress bar instantly before starting animation
        progressBar.style.transition = 'none';
        progressBar.style.width = '0';
        void progressBar.offsetWidth;
        setTimeout(() => {
            progressBar.style.transition = 'width 5s linear';
            progressBar.style.width = '100%';
        }, 50);

        let localCountdown = 5;
        updateCountdown();
        const timer = setInterval(() => {
            localCountdown--;
            if (localCountdown <= 0) {
                clearInterval(timer);
                // Change background
                currentBg = (currentBg + 1) % backgrounds.length;
                heroSection.style.background = backgrounds[currentBg];
                // Reset progress bar instantly
                progressBar.style.transition = 'none';
                progressBar.style.width = '0';
                void progressBar.offsetWidth;
                setTimeout(() => {
                    progressBar.style.transition = 'width 5s linear';
                    progressBar.style.width = '100%';
                }, 50);
                // Restart countdown and animation
                animateProgressBarAndBackground();
            } else {
                countdownEl.textContent = `Next background in ${localCountdown}...`;
            }
        }, 1000);
    }

    animateProgressBarAndBackground();
</script>
@endsection
