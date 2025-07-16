<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            :root {
                --halloween-orange: #f57e1a;
                --halloween-purple: #6a1b9a;
                --halloween-green: #2e7d32;
                --halloween-black: #1a1a1a;
            }
            
            body {
                background-color: var(--halloween-black);
                background-image: 
                    radial-gradient(circle at 10% 20%, var(--halloween-purple) 0%, transparent 20%),
                    radial-gradient(circle at 90% 30%, var(--halloween-orange) 0%, transparent 20%),
                    radial-gradient(circle at 50% 80%, var(--halloween-green) 0%, transparent 20%);
                color: #f5f5f5;
                font-family: 'Nunito', sans-serif;
            }
            
            .halloween-title {
                font-family: 'Creepster', cursive;
                color: var(--halloween-orange);
                text-shadow: 3px 3px 0 var(--halloween-purple), 
                             6px 6px 0 #000;
                letter-spacing: 2px;
            }
            
            .spooky-border {
                border: 3px dashed var(--halloween-orange);
                border-radius: 10px;
                position: relative;
                padding: 20px;
            }
            
            .spooky-border::before {
                content: "✻ ✻ ✻";
                position: absolute;
                top: -15px;
                left: 50%;
                transform: translateX(-50%);
                background: var(--halloween-black);
                padding: 0 10px;
                color: var(--halloween-orange);
                font-size: 1.2rem;
            }
            
            .bat {
                position: absolute;
                width: 30px;
                height: 30px;
                background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%231a1a1a" d="M510.28,285.05c-5.91-12.89-19.56-19.35-32.45-13.46c-6.42,2.94-10.89,8.59-14.05,14.05 c-13.17-10.31-27.96-18.07-43.82-22.36V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v35.48c-22.43-5.6-45.61-5.59-68.04,0V48.01 c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48c-22.43-5.6-45.61-5.59-68.04,0V48.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48 c-22.43-5.6-45.61-5.59-68.04,0V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v119.27c-15.86,4.29-30.65,12.05-43.82,22.36 c-3.16-5.46-7.63-11.11-14.05-14.05c-12.89-5.91-26.54,0.57-32.45,13.46c-5.91,12.89-0.57,26.54,12.33,32.45 c2.59,1.19,5.24,2.05,7.89,2.63c-2.11,6.08-3.51,12.48-4.12,19.07c-4.68,50.26,31.58,93.67,80.66,101.97 c1.19,0.2,2.38,0.3,3.57,0.3c12.41,0,23.72-7.23,29.02-18.83c6.13-13.47,2.78-29.54-8.19-39.52 c-9.16-8.29-21.84-11.45-33.99-8.39c2.43-15.29,9.33-29.5,19.97-40.67c8.31-8.72,18.41-15.41,29.62-19.63 c8.27,15.02,22.66,25.29,39.38,27.21V464c0,8.84,7.16,16,16,16s16-7.16,16-16V316.18c16.72-1.92,31.11-12.19,39.38-27.21 c11.21,4.22,21.31,10.91,29.62,19.63c10.64,11.17,17.54,25.38,19.97,40.67c-12.15-3.06-24.83,0.1-33.99,8.39 c-10.97,9.98-14.32,26.05-8.19,39.52c5.3,11.6,16.61,18.83,29.02,18.83c1.19,0,2.38-0.1,3.57-0.3 c49.08-8.3,85.34-51.71,80.66-101.97c-0.61-6.59-2.01-12.99-4.12-19.07c2.65-0.58,5.3-1.44,7.89-2.63 C510.85,311.59,516.19,297.94,510.28,285.05z"/></svg>');
                background-size: contain;
                animation: fly 15s linear infinite;
                opacity: 0.7;
                z-index: -1;
            }
            
            @keyframes fly {
                0% {
                    transform: translate(0, 0) rotate(0deg);
                }
                25% {
                    transform: translate(200px, 100px) rotate(90deg);
                }
                50% {
                    transform: translate(400px, 0) rotate(180deg);
                }
                75% {
                    transform: translate(200px, -100px) rotate(270deg);
                }
                100% {
                    transform: translate(0, 0) rotate(360deg);
                }
            }
            
            .pumpkin-btn {
                background-color: var(--halloween-orange);
                color: var(--halloween-black);
                border: 2px solid var(--halloween-black);
                border-radius: 20px;
                padding: 10px 25px;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: all 0.3s;
                position: relative;
                overflow: hidden;
                font-family: 'Eater', cursive;
            }
            
            .pumpkin-btn:hover {
                background-color: var(--halloween-purple);
                color: #fff;
                transform: scale(1.05);
                box-shadow: 0 0 15px var(--halloween-orange);
            }
            
            .pumpkin-btn::before {
                content: "";
                position: absolute;
                top: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 20px;
                height: 10px;
                background-color: var(--halloween-green);
                border-radius: 50% 50% 0 0;
            }
            
            .ghost {
                position: absolute;
                width: 60px;
                height: 80px;
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 50% 50% 0 0;
                animation: float 8s ease-in-out infinite;
                z-index: -1;
            }
            
            .ghost::before {
                content: "";
                position: absolute;
                width: 20px;
                height: 20px;
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 50%;
                top: 30px;
                left: 5px;
                box-shadow: 20px 0 0 0 rgba(255, 255, 255, 0.8);
            }
            
            .ghost::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 20px;
                background: 
                    radial-gradient(circle at 10px 0, transparent 10px, rgba(255, 255, 255, 0.8) 10px),
                    radial-gradient(circle at 30px 0, transparent 10px, rgba(255, 255, 255, 0.8) 10px),
                    radial-gradient(circle at 50px 0, transparent 10px, rgba(255, 255, 255, 0.8) 10px);
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(-20px) rotate(5deg);
                }
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add bats
                for (let i = 0; i < 5; i++) {
                    createBat();
                }
                
                // Add ghosts
                for (let i = 0; i < 3; i++) {
                    createGhost();
                }
                
                function createBat() {
                    const bat = document.createElement('div');
                    bat.className = 'bat';
                    bat.style.left = Math.random() * 100 + 'vw';
                    bat.style.top = Math.random() * 100 + 'vh';
                    bat.style.transform = 'scale(' + (Math.random() * 0.5 + 0.5) + ')';
                    bat.style.animationDuration = (Math.random() * 10 + 10) + 's';
                    document.body.appendChild(bat);
                }
                
                function createGhost() {
                    const ghost = document.createElement('div');
                    ghost.className = 'ghost';
                    ghost.style.left = Math.random() * 100 + 'vw';
                    ghost.style.top = Math.random() * 100 + 'vh';
                    ghost.style.opacity = Math.random() * 0.5 + 0.3;
                    ghost.style.animationDuration = (Math.random() * 5 + 5) + 's';
                    ghost.style.animationDelay = (Math.random() * 5) + 's';
                    ghost.style.width = (Math.random() * 40 + 40) + 'px';
                    ghost.style.height = (Math.random() * 60 + 60) + 'px';
                    document.body.appendChild(ghost);
                }
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            <!-- Halloween Header -->
            <header class="text-center py-8">
                <h1 class="halloween-title text-5xl md:text-6xl mb-4">{{ config('app.name', 'Laravel') }}</h1>
                <div class="spooky-border max-w-4xl mx-auto">
                    <p class="text-xl">Welcome to our spooky Halloween application!</p>
                </div>
            </header>

            <!-- Page Content -->
            <main class="container mx-auto px-4 pb-12">
                <div class="bg-black bg-opacity-70 rounded-lg p-6 shadow-lg">
                    {{ $slot }}
                </div>
            </main>

            <!-- Halloween Footer -->
            <footer class="text-center py-6 border-t border-orange-800 mt-12">
                <p class="text-orange-400">© {{ date('Y') }} Spooky Halloween App - Boo!</p>
            </footer>
        </div>
    </body>
</html>
