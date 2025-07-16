<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Spooky Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="bat"></div>
            <div class="bat"></div>
            <div class="bat"></div>
            <div class="spider-web top-10 left-10"></div>
            <div class="spider-web bottom-20 right-10"></div>
            <div class="floating-potion"></div>
        </div>

        <!-- Main Registration Card -->
        <div class="max-w-md w-full space-y-8 bg-gray-800 p-8 rounded-xl shadow-lg border-2 border-purple-500 relative z-10 transform transition-all hover:scale-[1.01] hover:shadow-purple-500/20">
            <!-- Magic Star Icon -->
            <div class="text-center">
                <svg class="mx-auto h-16 w-16 text-purple-500 hover:animate-spin-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                
                <!-- Spooky Title -->
                <h2 class="mt-4 text-center text-3xl font-extrabold text-purple-400 font-creepster tracking-wide">
                    <span class="text-shadow-purple">Brew a New Potion</span>
                </h2>
                
                <!-- Login Link -->
                <p class="mt-2 text-center text-sm text-gray-300">
                    Or
                    <a href="{{ route('login') }}" class="font-medium text-orange-400 hover:text-orange-300 hover:underline hover:underline-offset-4 transition-all">
                        sign in to your cauldron
                    </a>
                </p>
            </div>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Registration Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Form Inputs with Spooky Placeholders -->
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <div class="relative">
                            <input id="name" name="name" type="text" autocomplete="name" required
                                   class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white rounded-t-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 focus:z-10 sm:text-sm transition-all pl-10"
                                   placeholder="🧙 Witch or Warlock name" value="{{ old('name') }}">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <div class="relative">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 focus:z-10 sm:text-sm transition-all pl-10"
                                   placeholder="📜 Coven email" value="{{ old('email') }}">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="new-password" required
                                   class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 focus:z-10 sm:text-sm transition-all pl-10"
                                   placeholder="🔮 Magic spell">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <div class="relative">
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                                   class="appearance-none rounded-none relative block w-full px-3 py-3 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white rounded-b-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 focus:z-10 sm:text-sm transition-all pl-10"
                                   placeholder="✨ Confirm spell">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-purple-600 to-orange-600 hover:from-purple-700 hover:to-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 shadow-lg hover:shadow-purple-500/30 transition-all transform hover:-translate-y-0.5">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-purple-200 group-hover:text-orange-200 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </span>
                        Brew Potion 🧪
                    </button>
                </div>
            </form>
            
            <!-- Footer Bats -->
            <div class="text-center pt-4">
                <div class="inline-flex space-x-2">
                    <span class="text-gray-500 text-sm">🦇</span>
                    <span class="text-gray-500 text-sm">🦇</span>
                    <span class="text-gray-500 text-sm">🦇</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Creepster&display=swap');
        
        .font-creepster {
            font-family: 'Creepster', cursive;
        }
        
        .text-shadow-purple {
            text-shadow: 2px 2px 0 #6b21a8, 4px 4px 0 #000;
        }
        
        .bat {
            position: absolute;
            width: 30px;
            height: 30px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%239d174d" d="M510.28,285.05c-5.91-12.89-19.56-19.35-32.45-13.46c-6.42,2.94-10.89,8.59-14.05,14.05 c-13.17-10.31-27.96-18.07-43.82-22.36V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v35.48c-22.43-5.6-45.61-5.59-68.04,0V48.01 c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48c-22.43-5.6-45.61-5.59-68.04,0V48.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v131.48 c-22.43-5.6-45.61-5.59-68.04,0V144.01c0-8.84-7.16-16-16-16s-16,7.16-16,16v119.27c-15.86,4.29-30.65,12.05-43.82,22.36 c-3.16-5.46-7.63-11.11-14.05-14.05c-12.89-5.91-26.54,0.57-32.45,13.46c-5.91,12.89-0.57,26.54,12.33,32.45 c2.59,1.19,5.24,2.05,7.89,2.63c-2.11,6.08-3.51,12.48-4.12,19.07c-4.68,50.26,31.58,93.67,80.66,101.97 c1.19,0.2,2.38,0.3,3.57,0.3c12.41,0,23.72-7.23,29.02-18.83c6.13-13.47,2.78-29.54-8.19-39.52 c-9.16-8.29-21.84-11.45-33.99-8.39c2.43-15.29,9.33-29.5,19.97-40.67c8.31-8.72,18.41-15.41,29.62-19.63 c8.27,15.02,22.66,25.29,39.38,27.21V464c0,8.84,7.16,16,16,16s16-7.16,16-16V316.18c16.72-1.92,31.11-12.19,39.38-27.21 c11.21,4.22,21.31,10.91,29.62,19.63c10.64,11.17,17.54,25.38,19.97,40.67c-12.15-3.06-24.83,0.1-33.99,8.39 c-10.97,9.98-14.32,26.05-8.19,39.52c5.3,11.6,16.61,18.83,29.02,18.83c1.19,0,2.38-0.1,3.57-0.3 c49.08-8.3,85.34-51.71,80.66-101.97c-0.61-6.59-2.01-12.99-4.12-19.07c2.65-0.58,5.3-1.44,7.89-2.63 C510.85,311.59,516.19,297.94,510.28,285.05z"/></svg>');
            background-size: contain;
            animation: fly 15s linear infinite;
            opacity: 0.7;
            z-index: 0;
        }
        
        .spider-web {
            position: absolute;
            width: 80px;
            height: 80px;
            background-image: radial-gradient(circle, transparent 40%, rgba(255,255,255,0.1) 40%, rgba(255,255,255,0.1) 42%, transparent 42%),
                            linear-gradient(0deg, transparent 48%, rgba(255,255,255,0.1) 48%, rgba(255,255,255,0.1) 52%, transparent 52%),
                            linear-gradient(45deg, transparent 48%, rgba(255,255,255,0.1) 48%, rgba(255,255,255,0.1) 52%, transparent 52%),
                            linear-gradient(90deg, transparent 48%, rgba(255,255,255,0.1) 48%, rgba(255,255,255,0.1) 52%, transparent 52%),
                            linear-gradient(135deg, transparent 48%, rgba(255,255,255,0.1) 48%, rgba(255,255,255,0.1) 52%, transparent 52%);
            opacity: 0.6;
        }
        
        .floating-potion {
            position: absolute;
            width: 40px;
            height: 60px;
            background-color: rgba(156, 163, 175, 0.2);
            border-radius: 50% 50% 10% 10%;
            animation: float 10s ease-in-out infinite;
            z-index: 0;
        }
        
        .floating-potion::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 20px;
            background-color: rgba(156, 163, 175, 0.3);
            border-radius: 0 0 50% 50%;
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
        
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .animate-spin-slow {
            animation: spin-slow 3s linear infinite;
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
            
            // Create floating potion
            const potion = document.querySelector('.floating-potion');
            if (potion) {
                potion.style.left = Math.random() * 100 + 'vw';
                potion.style.top = Math.random() * 100 + 'vh';
                potion.style.animationDuration = (Math.random() * 8 + 8) + 's';
                potion.style.animationDelay = (Math.random() * 5) + 's';
            }
        });
    </script>
</x-guest-layout>
