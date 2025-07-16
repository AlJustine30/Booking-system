<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Animated Elements -->
        <div class="bat"></div>
        <div class="bat"></div>
        <div class="ghost"></div>
        <div class="ghost"></div>
        
        <!-- Main Card -->
        <div class="max-w-md w-full space-y-8 bg-gray-800 p-8 rounded-xl shadow-lg border-2 border-orange-500 relative z-10 transform transition-all hover:scale-[1.01]">
            <!-- Pumpkin Decoration -->
            <div class="absolute -top-4 -left-4 w-12 h-12 bg-orange-500 rounded-full">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-green-600 rounded-full"></div>
                <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-black rounded-full"></div>
                <div class="absolute top-1/4 right-1/4 w-2 h-2 bg-black rounded-full"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 w-6 h-2 bg-black rounded-full"></div>
            </div>
            
            <div class="text-center">
                <!-- Cauldron Icon -->
                <svg class="mx-auto h-16 w-16 text-orange-500 hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                </svg>
                
                <!-- Title with Spooky Text Effect -->
                <h2 class="mt-4 text-center text-3xl font-extrabold text-orange-500 font-creepster tracking-wide">
                    <span class="text-shadow-orange">Sign in to your cauldron</span>
                </h2>
                
                <!-- Subtitle with Magic Potion Link -->
                <p class="mt-2 text-center text-sm text-gray-300">
                    Or
                    <a href="{{ route('register') }}" class="font-medium text-purple-400 hover:text-purple-300 hover:underline hover:underline-offset-4 transition-all">
                        brew a new potion
                    </a>
                </p>
            </div>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Login Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="remember" value="true">
                
                <!-- Form Inputs with Spooky Placeholders -->
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white rounded-t-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 focus:z-10 sm:text-sm transition-all"
                               placeholder="🧙‍♀️ Witch's email" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white rounded-b-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 focus:z-10 sm:text-sm transition-all"
                               placeholder="🔮 Magic spell">
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                               class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-600 rounded bg-gray-700">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-300 hover:text-gray-200 transition-colors">
                            Remember my broom 🧹
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-purple-400 hover:text-purple-300 hover:underline hover:underline-offset-4 transition-all">
                            Forgot your spell? 😵
                        </a>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-orange-600 to-purple-600 hover:from-orange-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 shadow-lg hover:shadow-orange-500/50 transition-all transform hover:-translate-y-0.5">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-orange-300 group-hover:text-orange-200 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </span>
                        Enter the Haunt 🏰
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Footer Bats -->
        <div class="absolute bottom-4 right-4 flex space-x-2">
            <span class="text-gray-500">🦇</span>
            <span class="text-gray-500">🦇</span>
            <span class="text-gray-500">🦇</span>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Creepster&display=swap');
        
        .font-creepster {
            font-family: 'Creepster', cursive;
        }
        
        .text-shadow-orange {
            text-shadow: 2px 2px 0 #f57e1a, 4px 4px 0 #6a1b9a;
        }
        
        .bat {
            position: absolute;
            width: 30px;
            height: 30px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23f57e1a" d="M510.28,285.05c-5.91-12.89-19.56-19.35-32.45-13.46c-6.42,2.94-10.89,8.59-14.05,14.05 c-13.17-10.31-27.96-18.07-43.82-22.36V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v35.48c-22.43-5.6-45.61-5.59-68.04,0V48.01 c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48c-22.43-5.6-45.61-5.59-68.04,0V48.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48 c-22.43-5.6-45.61-5.59-68.04,0V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v119.27c-15.86,4.29-30.65,12.05-43.82,22.36 c-3.16-5.46-7.63-11.11-14.05-14.05c-12.89-5.91-26.54,0.57-32.45,13.46c-5.91,12.89-0.57,26.54,12.33,32.45 c2.59,1.19,5.24,2.05,7.89,2.63c-2.11,6.08-3.51,12.48-4.12,19.07c-4.68,50.26,31.58,93.67,80.66,101.97 c1.19,0.2,2.38,0.3,3.57,0.3c12.41,0,23.72-7.23,29.02-18.83c6.13-13.47,2.78-29.54-8.19-39.52 c-9.16-8.29-21.84-11.45-33.99-8.39c2.43-15.29,9.33-29.5,19.97-40.67c8.31-8.72,18.41-15.41,29.62-19.63 c8.27,15.02,22.66,25.29,39.38,27.21V464c0,8.84,7.16,16,16,16s16-7.16,16-16V316.18c16.72-1.92,31.11-12.19,39.38-27.21 c11.21,4.22,21.31,10.91,29.62,19.63c10.64,11.17,17.54,25.38,19.97,40.67c-12.15-3.06-24.83,0.1-33.99,8.39 c-10.97,9.98-14.32,26.05-8.19,39.52c5.3,11.6,16.61,18.83,29.02,18.83c1.19,0,2.38-0.1,3.57-0.3 c49.08-8.3,85.34-51.71,80.66-101.97c-0.61-6.59-2.01-12.99-4.12-19.07c2.65-0.58,5.3-1.44,7.89-2.63 C510.85,311.59,516.19,297.94,510.28,285.05z"/></svg>');
            background-size: contain;
            animation: fly 15s linear infinite;
            opacity: 0.7;
            z-index: 0;
        }
        
        .ghost {
            position: absolute;
            width: 40px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50% 50% 0 0;
            animation: float 8s ease-in-out infinite;
            z-index: 0;
        }
        
        .ghost::before {
            content: "";
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            top: 20px;
            left: 5px;
            box-shadow: 15px 0 0 0 rgba(0, 0, 0, 0.3);
        }
        
        .ghost::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 15px;
            background: 
                radial-gradient(circle at 7px 0, transparent 7px, rgba(255, 255, 255, 0.2) 7px),
                radial-gradient(circle at 21px 0, transparent 7px, rgba(255, 255, 255, 0.2) 7px);
        }
        
        @keyframes fly {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(100px, 50px) rotate(90deg); }
            50% { transform: translate(200px, 0) rotate(180deg); }
            75% { transform: translate(100px, -50px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Position bats randomly
            document.querySelectorAll('.bat').forEach(bat => {
                bat.style.left = Math.random() * 100 + 'vw';
                bat.style.top = Math.random() * 100 + 'vh';
                bat.style.animationDuration = (Math.random() * 10 + 10) + 's';
                bat.style.animationDelay = (Math.random() * 5) + 's';
            });
            
            // Position ghosts randomly
            document.querySelectorAll('.ghost').forEach(ghost => {
                ghost.style.left = Math.random() * 100 + 'vw';
                ghost.style.top = Math.random() * 100 + 'vh';
                ghost.style.animationDuration = (Math.random() * 6 + 6) + 's';
                ghost.style.animationDelay = (Math.random() * 5) + 's';
                ghost.style.opacity = Math.random() * 0.3 + 0.1;
            });
        });
    </script>
</x-guest-layout>
