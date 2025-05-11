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
            <!-- Projects Section for Portfolio-->
            <section id="projects" class="py-8 sm:py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <h3
                        class="text-xl sm:text-2xl lg:text-3xl font-bold mb-10 text-center text-gray-800 animate-fadeInUp">
                        Projects
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-10 items-stretch">

                        <!-- Project Card -->
                        <a href="https://github.com/apikbanyubasa/login-buahku.git" target="_blank">
                            <div
                                class="flex flex-col h-full bg-white p-4 rounded-lg shadow hover:shadow-xl transition transform hover:-translate-y-1 duration-300 animate-fadeInUp delay-1">
                                <div class="mb-4">
                                    <img src="https://media-hosting.imagekit.io/3f55e547516b4953/2.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=BF6lAdh09krq3JouoQvpFIyd4bgzrHxjPJVU4P-Y153FgmTEKavbYmu6xqJLwDQ6lZ1IrZbD6Qq2wb4XczrzgfrDJI5e6s98QBhanVGER-27dtEnwQI90OSqLRISEorg4eMS2xfSYwZp14qwozHp41K5TUU9JDqpBK~OdiU9bOr1znA~8RYY-IjR89hH08UAJKZEFCTlnDOFbcGzn84olzEBm3H29HuDWOiGm5Rg13NnJ9py1EGNofV~Q6GWfU2eu~pmhz8KQT-ptmJLcQWp10~tlIqQn8t9PvwEcmVp4JrDLiFeZDA5ITcbpcOQl6j9585nxLa6yB-juiSrFdqnFw__"
                                        alt="Buahku" class="rounded w-full">
                                </div>
                                <h4 class="text-base lg:text-xl text-center font-semibold text-gray-800 min-h-[3rem]">
                                    Buahku
                                </h4>
                            </div>
                        </a>

                        <a href="https://github.com/apikbanyubasa/Bioskop.git" target="_blank">
                            <div
                                class="flex flex-col h-full bg-white p-4 rounded-lg shadow hover:shadow-xl transition transform hover:-translate-y-1 duration-300 animate-fadeInUp delay-1">
                                <div class="mb-4">
                                    <img src="https://media-hosting.imagekit.io/5e32f2e464a944dd/1.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=GL5hxRHFaMnuAlgp~vEs1jrn3Td385jr5NSHCUfPqvjZ-6Tfst~tR9uM4eckrUeXTh3d2Ei0ztqgsF9rvksYRCJUT~3JVG5hjnB7D94NLHwCepgssJntHhU6SCv-CssllBCxaMm5E~Z8YKOv2RGD8cqQLtLVEtGLiuUS7hrWbaHRLtJbyONH-PCCu8VHj~5s1SxqeQTrNgCg9cc8u3K3wYLKXnMMrRZ4mjLrjX9U8tepGqUqaoDyLl9Y6bHnRV86NpkOwV92jwcRkycyANWw86NMzFSOPoetOFxXAUut8-RtluZUrBJCeSrL~goJpk6tFh8aY9Vmsbwj6~QTtRXs6g__"
                                        alt="Bogor Cinemap" class="rounded w-full">
                                </div>
                                <h4 class="text-base lg:text-xl text-center font-semibold text-gray-800 min-h-[3rem]">
                                    Bogor Cinemap
                                </h4>
                            </div>
                        </a>

                        <a href="https://github.com/apikbanyubasa/yuma-laundry.git" target="_blank">
                            <div
                                class="flex flex-col h-full bg-white p-4 rounded-lg shadow hover:shadow-xl transition transform hover:-translate-y-1 duration-300 animate-fadeInUp delay-1">
                                <div class="mb-4">
                                    <img src="https://media-hosting.imagekit.io/b3a345716ea6423b/3.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=QLRg~2vPDG8~FWj~NFvcyi3dEw7E-U6HFKZ9nxIzctSCdF1tG0BfTgGrfuH3MS5YqNEf2wHT1tSB-W3B1P4YRIUkKrTQqDsx-f6YcAkNv9-89NhGphbsxPS6E3E~x9j3FSRABinGpoiW9xhaBlKHjzpCANeEe0hfeOVuwSx2LVO6QbAGlm0x-hfTPLV7n-JQ2gDZiUUr7AcTzhyVqGH6y42drxM9tTwQamZ6QpUrZVrusmo~6NtIvfFhMPT9UskV9sqYaxoWjVlYVHFUHmmmzhsmFIw-~ul1vUPAIwI9OnR1p~pUiJxxSFQOzKs~wKK9KqSna4LUbHbIWdkius3L6w__"
                                        alt="Yuma Laundry" class="rounded w-full">
                                </div>
                                <h4 class="text-base lg:text-xl text-center font-semibold text-gray-800 min-h-[3rem]">
                                    Yuma Laundry
                                </h4>
                            </div>
                        </a>

                        <a href="https://github.com/apikbanyubasa/scanmask.git" target="_blank">
                            <div
                                class="flex flex-col h-full bg-white p-4 rounded-lg shadow hover:shadow-xl transition transform hover:-translate-y-1 duration-300 animate-fadeInUp delay-1">
                                <div class="mb-4">
                                    <img src="https://media-hosting.imagekit.io/2f4d8a83e1fb4629/4.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=OPKP6OQNDMT7LYUMopDYquLmyT5Hj52mecAe2XOfnVMjNUQAGBAg7zVq~A-QZEbVKPsnGpA2FAwAXU2cl0tYfZmIwdNz1l-y3l~~kazI0ImW2m5S-KMKapGnZzuIV-v-30XkOmTTBAPC9ScOhT6WCSiOWTC7UO8VnjMRI4VoJ5CB-vAeS6IkGx5WCSbc9ACEkERNNOdJwR8ZIbVuTsZSGyr4Jnw~rTgw-ocNfEBqy6d1BkyVA14E67k5c0SOdhqKB7r22T8FjN0Rd3eWWExkZYuSGU4T73ndR2FbCagOxtcyohF2ZPmVrbKfy~qGq9wWOWdU56eZgwt9HqQ1u0G51A__"
                                        alt="Scanmask" class="rounded w-full">
                                </div>
                                <h4 class="text-base lg:text-xl text-center font-semibold text-gray-800 min-h-[3rem]">
                                    Scanmask
                                </h4>
                            </div>
                        </a>

                        <a href="https://github.com/apikbanyubasa/febri_lestari.git" target="_blank">
                            <div
                                class="flex flex-col h-full bg-white p-4 rounded-lg shadow hover:shadow-xl transition transform hover:-translate-y-1 duration-300 animate-fadeInUp delay-1">
                                <div class="mb-4">
                                    <img src="https://media-hosting.imagekit.io/7c491cac97f74077/5.png?Expires=1841581989&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=Ti8nMt5PuQJ3HTDFgQrUM9ue8nl~PlSi4hSRv6ZgTLJ4Gtte5xg~x83-4k8CvdjNAcJ5yYZCzVMqbCtuwzTabtKAn1luh4XAWubX5vbLLObBTKXkT7svYsCJu09KdD546H4TeWezfG2D0nYa07g7ZHXVxcN9TvUacG5ex6aVgO~r58TMvK9jUtvfZ3EQ3OG2ldsRvsP5jTE5Mo4A1SxyPgUuaMXNje5MOotHCgJFiSpuV8ovB2O0s3mbooPMvXzSjSVwfkkZr6Jav6ITbpz44zkK4AcQFSzLp9K8sNAiNrgcDjTpGX1vRKu3v1AkdCLFyhiO1FdJtQI1G8GGiZGaOg__"
                                        alt="Febri Lestari" class="rounded w-full">
                                </div>
                                <h4 class="text-base lg:text-xl text-center font-semibold text-gray-800 min-h-[3rem]">
                                    Febri Lestari
                                </h4>
                            </div>
                        </a>

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
