<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apikby - Portofolio</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/a.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeed') ? 'text-blue-600' : 'text-gray-700' }}">
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
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeed') ? 'text-blue-600' : 'text-gray-700' }}">
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
            <!-- Hero Section -->
            <section class="py-16 text-center fade-up">
                <div class="max-w-4xl mx-auto px-4">
                    <img src="https://media-hosting.imagekit.io/fa6805023e5147a2/pp2.png?Expires=1841581047&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=gu2H0H~JuInpkqBfvmyQVbaCiqvmsnb5ClqA~MWjIxefMWyaIN6H0WLyteAXVTw65qCSHhgt74EcBKJfcDE6REJJvJPKRmo1NJ5F5ugqx6hCooGMz5wWJMbdajJiKao27MC0vESVrG8cpkojcGJDnG1Z74KpE5Lmo~p5Ka-S20MiLpYzVK87nlmkROZZlC-nyQEeUK8hFurLXixzesu39NeSrKyU0FM60J3U4XnZyuRUQndarKzFbtlNEPDOhqnNgVJTdawr9J~Od3570gX5nk9k4tuFug5iL26FVA6KMgfWywG~3ovrwLJmR8-Pbla45H4V9HPruxbcxAF9FcSTpQ__"
                        class="w-40 h-40 md:w-52 md:h-52 mx-auto rounded-full border-4 border-white shadow-xl" />
                    <h2 class="text-xl sm:text-3xl lg:text-4xl font-bold mt-6 text-blue-800">Apik Banyubasa</h2>
                    <!-- Jobdesk Section -->
                    <div
                        class="flex flex-wrap justify-center items-center text-gray-600 text-xs lg:text-lg mt-2 space-x-4">
                        <div class="flex items-center">
                            <span class="inline-block w-2 h-2 bg-gray-800 rounded-full mr-2 align-middle"></span>
                            <span>Front-End Developer</span>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-block w-2 h-2 bg-gray-800 rounded-full mr-2 align-middle"></span>
                            <span>Web Developer</span>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-block w-2 h-2 bg-gray-800 rounded-full mr-2 align-middle"></span>
                            <span>UI/UX Enthusiast</span>
                        </div>
                    </div>


                </div>
            </section>

            <!-- Social Buttons -->
            <div class="flex justify-center items-center fade-up">
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/in/apik-banyubasa-b92a5b353/"
                        class="w-12 h-12 flex items-center justify-center bg-blue-700 text-white rounded-full hover:scale-110 transition transform">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/bybybann?igsh=MTZsMWJwd3ZzNjI3Yw=="
                        class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white rounded-full hover:scale-110 transition transform">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://github.com/apikbanyubasa"
                        class="w-12 h-12 flex items-center justify-center bg-gray-900 text-white rounded-full hover:scale-110 transition transform">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- About Section -->
            <section class="py-12 px-4 fade-up">
                <div class="max-w-4xl mx-auto text-center">
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800 mb-6">About Me</h3>
                    <p class="text-xs lg:text-lg text-gray-700 text-justify leading-relaxed">
                        Hello, I’m Apik Banyubasa, a Software Engineering student at IPB University with a strong
                        passion
                        for Web Development. I specialize in front-end development and have proficiency in technologies
                        like
                        HTML, CSS, and JavaScript. With these skills, I am able to create responsive, interactive, and
                        user-friendly interfaces.
                    </p>
                    <p class="text-xs lg:text-lg text-gray-700 text-justify mt-4 leading-relaxed">
                        Looking ahead, I am committed to expanding my expertise in backend development and aspire to
                        become
                        a
                        Full-Stack Developer. I am excited to continue learning, growing, and contributing to meaningful
                        technology projects.
                    </p>
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
