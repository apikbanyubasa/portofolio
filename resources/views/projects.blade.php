<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apikby - Portofolio</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/a.png') }}" />
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-100 via-blue-100 to-white text-gray-800 font-[Poppins] overflow-x-hidden">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <header id="navbar" class="navbar-blur fixed top-0 w-full z-50 border-none">
            <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-blue-700">Apikby</h1>

                <!-- Tombol Hamburger -->
                <button id="hamburger" class="hamburger hamburger--collapse md:hidden" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <!-- Menu Utama -->
                <nav class="hidden md:flex md:items-center space-x-6 text-base text-xl font-extrabold">
                    <a href="{{ url('/') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('/') ? 'text-blue-600 ' : 'text-gray-700' }}">
                        Home
                    </a>
                    <a href="{{ url('/resumeed') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeed') ? 'text-blue-600 ' : 'text-gray-700' }}">
                        Resume
                    </a>
                    <a href="{{ url('/projects') }}"
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('projects') ? 'text-blue-600 ' : 'text-gray-700' }}">
                        Projects
                    </a>
                </nav>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden md:hidden px-4 py-4 space-y-2 backdrop-blur-md text-right rounded-b-xl shadow-lg font-extrabold">
                <a href="{{ url('/') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('/') ? 'text-blue-600 ' : 'text-gray-700' }}">
                    Home
                </a>
                <a href="{{ url('/resumeed') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumeed') ? 'text-blue-600 ' : 'text-gray-700' }}">
                    Resume
                </a>
                <a href="{{ url('/projects') }}"
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('projects') ? 'text-blue-600 ' : 'text-gray-700' }}">
                    Projects
                </a>
            </div>
        </header>

        <!-- Spacing because navbar is fixed -->
        <div class="h-20"></div>

        <!-- Konten Utama -->
        <main class="flex-grow">
            <!-- Projects Section -->
            <section id="projects" class="py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <h3 class="text-3xl font-bold mb-10 text-center text-gray-800 animate-fadeInUp">Projects</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                        <!-- Project 1 -->
                        <a href="https://github.com/apikbanyubasa/login-buahku.git" target="_blank">
                            <div
                                class="bg-white p-4 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition duration-300 animate-fadeInUp delay-1">
                                <img src="{{ asset('assets/img/2.png') }}" alt="Project 1" class="rounded mb-4">
                                <h4 class="text-xl text-center font-semibold mb-2 text-gray-800">Buahku</h4>
                            </div>
                        </a>

                        <!-- Project 2 -->
                        <a href="https://github.com/apikbanyubasa/Bioskop.git" target="_blank">
                            <div
                                class="bg-white p-4 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition duration-300 animate-fadeInUp delay-1">
                                <img src="{{ asset('assets/img/1.png') }}" alt="Project 1" class="rounded mb-4">
                                <h4 class="text-xl text-center font-semibold mb-2 text-gray-800">Bogor Cinemap</h4>
                            </div>
                        </a>

                        <!-- Project 3 -->
                        <a href="https://github.com/apikbanyubasa/yuma-laundry.git" target="_blank">
                            <div
                                class="bg-white p-4  rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition duration-300 animate-fadeInUp delay-1">
                                <img src="{{ asset('assets/img/3.png') }}" alt="Project 1" class="rounded mb-4">
                                <h4 class="text-xl text-center font-semibold mb-2 text-gray-800">Yuma Laundry</h4>
                            </div>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Project 1 -->
                        <a href="https://github.com/apikbanyubasa/scanmask.git" target="_blank">
                            <div
                                class="bg-white p-4 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition duration-300 animate-fadeInUp delay-1">
                                <img src="{{ asset('assets/img/4.png') }}" alt="Project 1" class="rounded mb-4">
                                <h4 class="text-xl text-center font-semibold mb-2 text-gray-800">Scanmask</h4>
                            </div>
                        </a>

                        <!-- Project 2 -->
                        <a href="https://github.com/apikbanyubasa/febri_lestari.git" target="_blank">
                            <div
                                class="bg-white p-4 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition duration-300 animate-fadeInUp delay-1">
                                <img src="{{ asset('assets/img/5.png') }}" alt="Project 1" class="rounded mb-4">
                                <h4 class="text-xl text-center font-semibold mb-2 text-gray-800">Toko Febri Lestari</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-transparent backdrop-blur text-center py-6">
            <p class="text-gray-600">&copy; 2025 Apik Banyubasa.</p>
        </footer>
    </div>

</body>

</html>
