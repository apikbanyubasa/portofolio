<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apikby - Portofolio</title>
    <link rel="icon" type="image/png"
        href="https://media-hosting.imagekit.io/c0c210aeac324604/a.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=dWjrmYv6feb2J4EsRwLsRiWHPshD~JWBx7iWZ0doAIzqdkhY2tussPfSPrKR4JLy~NjCGIB4eSzOYESVthIl~1cDMw1pdNKNgZ4iyng1p7wE4tYILzZo1NdFFE4Zyu9jUSukSW3ZWDV4i7NJUNbdSgvUGYiDzzxFMAggOpS8iqyJDZvqzH3TH7dqj9ZG~qgqnbhbVqz3FSx5hoqQerom~cujG4tBL9qbSjMKbtR2b~SMS0uIQRP~axdx3IiClL7XQ4AUioyFUNXuCM8nBUi-DT7zjp1F1EXCCO3OLEQ108V-LCy3NE6KsfPkgdufuY0INO2QZcJFacbEpvmChHvXew__" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeDown {
            0% {
                opacity: 0;
                transform: translateY(-16px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(-16px);
            }
        }

        .animate-fade-down {
            animation: fadeDown 1.2s ease-out forwards;
        }

        .animate-fade-up {
            animation: fadeUp 1.2s ease-in forwards;
        }

        /* #mobile-menu default, tanpa opacity/transform lagi */
        #mobile-menu {
            pointer-events: none;
            z-index: 50;
        }

        /* saat open, hanya aktifkan pointer dan biarkan animasi yang atur opacity/posisi */
        #mobile-menu.open {
            pointer-events: auto;
        }

        .hamburger-line {
            transition: all 2s ease;
        }

        .hamburger-active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger-active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger-active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        .navbar-blur {
            backdrop-filter: blur(10px);
            background-color: transparent;
            box-shadow: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-scrolled {
            @apply backdrop-blur-2xl bg-white/70 shadow-md;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .hide-scrollbar {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE 10+ */
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-100 via-blue-100 to-white text-gray-800 font-[Poppins] overflow-x-hidden">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <header id="navbar" class="navbar-blur fixed top-0 w-full z-50 border-none">
            <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-xl sm:text-3xl lg:text-4xl font-extrabold text-blue-700">Apikby</h1>

                <button id="hamburger"
                    class="md:hidden relative w-8 h-8 flex flex-col justify-center items-center group">
                    <span
                        class="hamburger-line transition duration-300 ease-in-out w-6 h-0.5 bg-gray-800 absolute top-2"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out w-6 h-0.5 bg-gray-800"></span>
                    <span
                        class="hamburger-line transition duration-300 ease-in-out w-6 h-0.5 bg-gray-800 absolute bottom-2"></span>
                </button>


                <nav class="hidden md:flex md:items-center space-x-6 text-xl font-extrabold">
                    <a href="{{ url('/') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('/') ? 'text-blue-600' : 'text-gray-700' }}">
                        Home
                    </a>
                    <a href="{{ url('/resumeed') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeex') ? 'text-blue-600' : 'text-gray-700' }}">
                        Resume
                    </a>
                    <a href="{{ url('/projects') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('projects') ? 'text-blue-600' : 'text-gray-700' }}">
                        Projects
                    </a>
                </nav>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden md:hidden px-4 py-4 space-y-2 backdrop-blur-md text-right rounded-b-xl shadow-lg font-extrabold">
                <a href="{{ url('/') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('/') ? 'text-blue-600' : 'text-gray-700' }}">
                    Home
                </a>
                <a href="{{ url('/resumeed') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeex') ? 'text-blue-600' : 'text-gray-700' }}">
                    Resume
                </a>
                <a href="{{ url('/projects') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('projects') ? 'text-blue-600' : 'text-gray-700' }}">
                    Projects
                </a>
            </div>
        </header>

        <!-- Spacing because navbar is fixed -->
        <div class="h-16 sm:h-20"></div>

        <!-- Konten Utama -->
        <main class="flex-grow">
            <!-- Projects Section -->
            <section id="projects" class="py-8 sm:py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-8 text-center text-gray-800">Resume</h3>

                    <!-- Tambahan overflow-x-auto untuk mobile -->
                    <div class="overflow-x-auto hide-scrollbar">
                        <div
                            class="flex text-xs lg:text-lg space-x-4 max-w-xl mx-auto md:justify-center flex-nowrap min-w-max">
                            <a href="{{ url('/resumeed') }}"
                                class="text-center bg-gray-800 text-white px-4 py-2 rounded-md flex-shrink-0 hover:bg-blue-600 transition duration-300">
                                Education
                            </a>

                            <a href="{{ url('/resumeex') }}"
                                class="text-center bg-blue-600 text-white px-4 py-2 rounded-md flex-shrink-0 transition duration-300 ring-2 ring-blue-400">
                                Experience
                            </a>

                            <a href="{{ url('/resumeac') }}"
                                class="text-center bg-gray-800 text-white px-4 py-2 rounded-md flex-shrink-0 hover:bg-blue-600 transition duration-300">
                                Achievement
                            </a>

                            <a href="{{ url('/resumepu') }}"
                                class="text-center bg-gray-800 text-white px-4 py-2 rounded-md flex-shrink-0 hover:bg-blue-600 transition duration-300">
                                Publication
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section id="experience" class="text-gray-800 mb-8 px-6">
                <div class="max-w-4xl mx-auto">
                    <h2
                        class="text-xl sm:text-2xl lg:text-3xl font-bold mb-6 border-b-4 border-purple-500 inline-block text-center">
                        💼
                        Experience</h2>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-3 sm:p-6 shadow-md">
                            <h3 class="text-base lg:text-xl font-semibold text-purple-700">Himavo Micro IT</h3>
                            <p class="text-xs lg:text-sm text-gray-600 italic">Web Master Member</p>
                            <p class="text-xs lg:text-sm text-gray-600">2023 - 2024</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-transparent backdrop-blur text-center py-6">
            <p class="text-xs lg:text-lg text-gray-600">&copy; 2025 Apik Banyubasa.</p>
        </footer>
    </div>

    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');

        // SINGLE event listener, no duplicate
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger-active');

            if (mobileMenu.classList.contains('open')) {
                // Tambahkan animasi keluar
                mobileMenu.classList.add('animate-fade-up');
                setTimeout(() => {
                    mobileMenu.classList.remove('open', 'animate-fade-up');
                    mobileMenu.classList.add('hidden');
                }, 1200); // tunggu animasi fade-up selesai (1.2s)
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('open', 'animate-fade-down');

                // Hapus animasi biar bisa diulang lagi
                setTimeout(() => {
                    mobileMenu.classList.remove('animate-fade-down');
                }, 1200);
            }
        });


        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 20);
        });

        // Fade-up effect on scroll
        const fadeEls = document.querySelectorAll('.fade-up');
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });
        fadeEls.forEach(el => fadeObserver.observe(el));
    </script>
</body>

</html>
