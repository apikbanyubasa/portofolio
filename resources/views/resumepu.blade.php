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
                        class="transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumepu') ? 'text-blue-600' : 'text-gray-700' }}">
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
                    class="block py-2 transition transform hover:scale-105 hover:text-blue-600 {{ Request::is('resumepu') ? 'text-blue-600' : 'text-gray-700' }}">
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
                                class="text-center bg-gray-800 text-white px-4 py-2 rounded-md flex-shrink-0 hover:bg-blue-600 transition duration-300">
                                Experience
                            </a>

                            <a href="{{ url('/resumeac') }}"
                                class="text-center bg-gray-800 text-white px-4 py-2 rounded-md flex-shrink-0 hover:bg-blue-600 transition duration-300">
                                Achievement
                            </a>

                            <a href="{{ url('/resumepu') }}"
                                class="text-center bg-blue-600 text-white px-4 py-2 rounded-md flex-shrink-0 transition duration-300 ring-2 ring-blue-400">
                                Publication
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Publication Section -->
            <section id="publication" class="text-gray-800 mb-8 px-6">
                <div class="max-w-4xl mx-auto">
                    <h2
                        class="text-xl sm:text-2xl lg:text-3xl font-bold mb-6 border-b-4 border-purple-500 inline-block text-center">
                        📚
                        Publications
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-3 sm:p-6 shadow-md">
                            <h3 class="text-base lg:text-xl font-semibold text-purple-700">"Blackbox Testing of the
                                Garuda Farm
                                Website
                                Using
                                the Equivalence Partitioning Technique"</h3>
                            <p class="text-xs lg:text-sm text-gray-600 italic">JURNAL KRIDATAMA SAINS DAN TEKNOLOGI,
                                Desember 2024
                            </p>
                            <a href="https://jurnal.umnu.ac.id/index.php/kst/article/view/1420"
                                class="text-xs lg:text-sm text-purple-500 hover:text-purple-700">Read Full Paper</a>
                        </div>
                        <div class="bg-white rounded-xl p-3 sm:p-6 shadow-md">
                            <h3 class="text-base lg:text-xl font-semibold text-purple-700">"THE INFLUENCE OF TIKTOK
                                SHORT-FORM VIDEOS
                                ON
                                ATTENTION SPAN AND STUDY HABITS OF STUDENTS IN COLLEGE OF VOCATIONAL STUDIES IPB
                                UNIVERSITY"
                            </h3>
                            <p class="text-xs lg:text-sm text-gray-600 italic">Edutech: Jurnal Teknologi Pendidikan,
                                Juni 2024</p>
                            <a href="https://ejournal.upi.edu/index.php/edutech/article/view/69229"
                                class="text-xs lg:text-sm text-purple-500 hover:text-purple-700">Read Full Paper</a>
                        </div>
                        <div class="bg-white rounded-xl p-3 sm:p-6 shadow-md">
                            <h3 class="text-base lg:text-xl font-semibold text-purple-700">"Analisis Business Model
                                Canvas pada
                                Bisnis
                                Creative Package di Industri Kreatif Digital"</h3>
                            <p class="text-xs lg:text-sm text-gray-600 italic">Populer: Jurnal Penelitian Mahasiswa,
                                Desember 2024
                            </p>
                            <a href="https://journal.unimar-amni.ac.id/index.php/Populer/article/view/2767"
                                class="text-xs lg:text-sm text-purple-500 hover:text-purple-700">Read Full Paper</a>
                        </div>
                        <div class="bg-white rounded-xl p-3 sm:p-6 shadow-md">
                            <h3 class="text-base lg:text-xl font-semibold text-purple-700">"Penerapan Klasifikasi Gambar
                                Buah dalam
                                Aplikasi
                                FruityLens Menggunakan Metode CNN"</h3>
                            <p class="text-xs lg:text-sm text-gray-600 italic">Jurnal Sistem Informasi dan Ilmu
                                Komputer, November
                                2024
                            </p>
                            <a href="https://ifrelresearch.org/index.php/jusiik-widyakarya/article/view/4275?articlesBySimilarityPage=7"
                                class="text-xs lg:text-sm text-purple-500 hover:text-purple-700">Read Full Paper</a>
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

</body>

</html>
