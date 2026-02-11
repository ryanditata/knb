<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNB Scholarship</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link href="{{ asset('build/app-f6761a2f.css') }}" rel="text/css">
    <script type="module" src="{{ asset('build/assets/app-b7a14a82.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="bg-[003D7A]">
        <!-- Navbar -->
        <section id="navbar" class="bg-[#003D7A] z-50 top-0 sticky">
            <nav class="relative py-3 flex justify-between items-center mx-10 lg:mx-20 xl:mx-32">
                <a title="logo-udinus" class="text-3xl font-bold leading-none" href="#">
                    <img src="{{ asset('assets/logo.png') }}" alt="" class="h-16 w-16 rounded-full">
                </a>
                <div class="flex items-center">
                    <a href="https://knb.kemdiktisaintek.go.id/"
                        class="btn btn-sm mx-3 bg-yellow-500 hover:bg-yellow-400 ease-in-out text-black text-sm font-semibold rounded-full transition duration-200">Register
                    </a>
                    <button title="button-1" class="navbar-burger flex items-center text-blue-600 p-3 lg:hidden">
                        <svg class="block h-8 w-8 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul
                    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-4 xl:space-x-6">
                    <li><a class="text-sm font-bold text-white hover:text-gray-200" href="#home">Home</a></li>
                    <li></li>
                    <li><a class="text-sm font-bold text-white hover:text-gray-200" href="#program">Program</a></li>
                    <li></li>
                    <li><a class="text-sm font-bold text-white hover:text-gray-200" href="#info">Info</a></li>
                    <li></li>
                    <li><a class="text-sm font-bold text-white hover:text-gray-200"
                            href="#departements">Departements</a></li>
                    <li></li>
                    <li><a class="text-sm font-bold text-white hover:text-gray-200" href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="navbar-menu relative z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm pt-6 px-6 bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a title="icon" class="mr-auto text-3xl font-bold leading-none" href="#">
                            <img src="{{ asset('assets/logo.png') }}" class="h-10 w-10" alt="" srcset="">
                        </a>
                        <button title="button" class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#home">Home</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#program">Program</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#info">Info</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#departements">Departements</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="mt-auto">

                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © {{ date('Y') }}</span>
                        </p>
                    </div>
                </nav>
            </div>
        </section>
        <!-- Hero -->
        <section id="home" class="text-white"
            style="background: url('{{ asset('assets/mahasiswa2.jpg') }}') center/cover no-repeat; background-size: cover; min-height: 100vh;">
            <div class="container mx-auto flex items-center justify-between p-6 sm:py-12 lg:py-24 xl:py-3 gap-6 pt-20">
                <div
                    class="flex flex-col justify-center text-left max-w-xl p-8 rounded-lg shadow-md bg-opacity-50 bg-black mt-20">
                    <h1 class="text-5xl sm:text-6xl font-extrabold text-yellow-500 leading-tight">KNB SCHOLARSHIP</h1>
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-white leading-tight mt-2">PROGRAM</h2>
                    <p class="mt-6 text-lg text-gray-200">KNB offers an experience of studying in top universities in
                        Indonesia while living in one of the world's most diverse and vibrant societies. Dedicated to
                        the pursuit of higher education.</p>
                    <div class="flex flex-wrap justify-start gap-6 mt-6">
                        <a rel="noopener noreferrer" href="https://knb.kemdiktisaintek.go.id/"
                            class="px-6 py-3 text-lg font-semibold rounded-full bg-yellow-500 text-gray-900 hover:bg-yellow-400 hover:shadow-xl hover:scale-105 transition-all duration-300">
                            Register
                        </a>
                        <a rel="noopener noreferrer" href="#program"
                            class="px-6 py-3 text-lg font-semibold border-2 rounded-full border-gray-50 hover:bg-gray-50 hover:text-gray-900 hover:shadow-xl hover:scale-105 transition-all duration-300">
                            Read more
                        </a>
                    </div>
                </div>
                <!--landing 2 foto kucil  -->
                <!-- <div class="flex items-center justify-center w-full max-w-md sm:max-w-lg lg:max-w-lg">
                    <img src="mahasiswa2.jpg" alt="Scholarship Image" class="w-full h-auto rounded-lg shadow-xl transform hover:scale-105 transition-all duration-500">
                </div> -->
            </div>
        </section>

        <!-- Scholarship Info -->
        <section id="program" class="container mx-auto p-6 flex flex-wrap">
            <div class="w-full md:w-4/6 p-4">
                <h2 class="text-2xl font-bold text-blue-900" data-aos="fade-up">A Glance at Universitas Dian
                    Nuswantoro</h2>
                <p class="mt-7 text-blue-900 text-sm md:text-base lg:text-lg font-semibold xl:text-xl text-justify"
                    data-aos="fade-up">
                    Universitas Dian Nuswantoro, known as Udinus, is a Private University (PTS) that was officially
                    established in 2001 with the Decree of the Minister of National Education of Indonesia No.
                    196/D/O/2001. Located in the heart of the capital city of Central Java, Semarang City, Udinus is a
                    prominent private university majoring in information technology and entrepreneurial education.
                </p>
                <p class="mt-7 text-blue-900 text-sm md:text-base lg:text-lg font-semibold xl:text-xl text-justify"
                    data-aos="fade-up">
                    To contribute further in the field of education, Udinus provides a Study Program outside the Main
                    Campus (PSDKU) which is located in Kediri City, East Java. Furthermore, there is a Distance Learning
                    program in Lombok where all learning activities are performed online.
                </p>
                <p class="mt-7 text-blue-900 text-sm md:text-base lg:text-lg font-semibold xl:text-xl text-justify"
                    data-aos="fade-up">
                    This technopreneur campus has managed to achieve the Best Institutional Accreditation status, namely
                    Excellent or Unggul, which was issued by BAN-PT No. 107/SK/BAN-PT/AK-ISK/PT/III/2022 and also
                    entitled the best private tertiary institution in Central Java in the Unirank 2022 version.
                </p>
                <p class="mt-7 text-blue-900 text-sm md:text-base lg:text-lg font-semibold xl:text-xl text-justify"
                    data-aos="fade-up">
                    The technopreneurship provision given to Udinus students is also balanced with the preservation of
                    cultures which characterizes Indonesia as a nation with a huge diversity of cultures. This was
                    manifested in e-gamelan innovation which succeeded in making Indonesia proud by appearing on the
                    Unesco Culture stage, in Paris, France.
                </p>
                <p class="mt-7 text-blue-900 text-sm md:text-base lg:text-lg font-semibold xl:text-xl text-justify"
                    data-aos="fade-up">
                    Udinus students are representatives of the younger generation who are literate in technology and
                    information and are ready to become entrepreneurs to bring Indonesia to develop even further.
                </p>
            </div>

            <div class="w-full md:w-2/6 p-4">
                <div class="flex flex-col gap-4">
                    <div class="w-full p-2">
                        <img src="{{ asset('assets/udinus_foto.jpeg') }}" alt="Scholarship" class="rounded-lg"
                            data-aos="flip-left">
                    </div>
                    <div class="w-full p-2">
                        <img src="{{ asset('assets/udinus_foto2.jpg') }}" alt="Scholarship" class="rounded-lg"
                            data-aos="flip-left">
                    </div>
                    <div class="w-full p-2">
                        <img src="{{ asset('assets/udinus_foto3.jpg') }}" alt="Scholarship" class="rounded-lg"
                            data-aos="flip-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Scholarship Info -->

        <!-- Additional Info -->
        <section id="info" class="container mx-auto p-6 flex flex-wrap">

            <!-- TIMELINE -->
            <div class="w-full md:w-1/2 xl:w-1/2 p-4">
                <h2 class="text-2xl text-blue-900 font-bold mb-8">Timeline</h2>

                <ul class="space-y-8">

                    <!-- Item 1 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            1
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Registration (Document Submission) (2 February – 31 March 2026)
                        </p>
                    </li>

                    <!-- Item 2 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            2
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Administrative Selection by Indonesian Embassy (6 – 17 April 2026)
                        </p>
                    </li>

                    <!-- Item 3 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            3
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Administrative Selection by DIKTI (20 – 30 April 2026)
                        </p>
                    </li>

                    <!-- Item 4 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            4
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Substantive Selection by University (4 – 28 May 2026)
                        </p>
                    </li>

                    <!-- Item 5 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            5
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Clearing House (3 – 5 June 2026)
                        </p>
                    </li>

                    <!-- Item 6 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            6
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Plenary Meeting (10 – 12 June 2026)
                        </p>
                    </li>

                    <!-- Item 7 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            7
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Announcement of Administrative & Academic Selection Results Phase I (19 June 2026)
                        </p>
                    </li>

                    <!-- Item 8 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            8
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Confirmation by Phase I Awardees (22 – 26 June 2026)
                        </p>
                    </li>

                    <!-- Item 9 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            9
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Announcement of Administrative & Academic Selection Results Phase II (2 July 2026)
                        </p>
                    </li>

                    <!-- Item 10 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            10
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Confirmation by Phase II Awardees (6 – 10 July 2026)
                        </p>
                    </li>

                    <!-- Item 11 -->
                    <li class="relative flex items-start gap-4 pl-10
                            before:absolute before:left-3 before:top-8
                            before:h-full before:w-1 before:bg-yellow-500
                            last:before:hidden">
                        <span
                            class="absolute left-0 top-0 flex items-center justify-center
                                w-8 h-8 rounded-full bg-yellow-500 text-blue-900 font-bold">
                            11
                        </span>
                        <p class="max-w-xl font-bold text-blue-900 leading-relaxed">
                            Final Determination of KNB Selection Results (17 July 2026)
                        </p>
                    </li>

                </ul>
            </div>

            <!-- REQUIREMENTS -->
            <div class="w-full md:w-1/2 xl:w-1/2 p-4">
                <h2 class="text-2xl text-blue-900 font-bold">Requirements</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Applicants must meet the following criteria, including academic qualifications,
                    language proficiency, and document submission. Ensure all requirements are fulfilled
                    before applying.
                </p>

                <a target="_blank"
                href="{{ asset('assets/KNBGuidelines(2025).pdf') }}"
                class="inline-flex mt-6 bg-yellow-500 rounded-md font-semibold
                        text-blue-900 px-4 py-2 transition hover:bg-yellow-400">
                    Read Here
                </a>
            </div>

        </section>

        <!-- Table -->
        <!-- Informatics and Communication Section -->
        <h2 class="text-2xl flex items-center justify-center text-blue-900 font-bold gap-2" data-aos="fade-up">
            Departments</h2>
        <section id="departements" class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-4" data-aos="zoom-in-up">
                <h2 class="text-xl font-semibold text-blue-700 mb-4">Computer Science</h2>
                <div class="overflow-y-auto max-h-48">
                    <table class="table-auto w-full text-left text-black">
                        <thead class="bg-blue-900 text-white">
                            <tr>
                                <th class="px-4 py-2">Departments</th>
                                <th class="px-4 py-2">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Informatics</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-teknik-informatika/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Information System</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-sistem-informasi/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Visual Communication Design</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-ilmu-komunikasi/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Communication Science</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-dkv/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Master of Computer Science</td>
                                <td class="border px-4 py-2"><a
                                        href="https://dinus.ac.id/en/magister-teknik-informatika/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Doctor of Computer Science</td>
                                <td class="border px-4 py-2"><a
                                        href="https://dinus.ac.id/program-doktoral-ilmu-komputer/"
                                        class="text-blue-700 hover:underline">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md p-4" data-aos="zoom-in-up">
                <h2 class="text-xl font-semibold text-orange-700 mb-4">Economics and Business</h2>
                <div class="overflow-y-auto max-h-48">
                    <table class="table-auto w-full text-left text-black">
                        <thead class="bg-orange-700 text-white">
                            <tr>
                                <th class="px-4 py-2">Departments</th>
                                <th class="px-4 py-2">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Accounting</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-akuntansi/"
                                        class="text-orange-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Management</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-manajemen/"
                                        class="text-orange-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Master of Management</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/magister-manajemen/"
                                        class="text-orange-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Doctorate of Management</td>
                                <td class="border px-4 py-2"><a href="https://pdm.dinus.ac.id/"
                                        class="text-orange-700 hover:underline">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md p-4" data-aos="zoom-in-up">
                <h2 class="text-xl font-semibold text-yellow-700 mb-4">Engineering</h2>
                <div class="overflow-y-auto max-h-48">
                    <table class="table-auto w-full text-left text-black">
                        <thead class="bg-yellow-700 text-white">
                            <tr>
                                <th class="px-4 py-2">Departments</th>
                                <th class="px-4 py-2">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Electrical Engineering</td>
                                <td class="border px-4 py-2"><a href="https://elektro.ft.dinus.ac.id/"
                                        class="text-yellow-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Industrial Engineering</td>
                                <td class="border px-4 py-2"><a href="https://industri.ft.dinus.ac.id/"
                                        class="text-yellow-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Biomedic Engineering</td>
                                <td class="border px-4 py-2"><a href="https://biomedis.ft.dinus.ac.id/"
                                        class="text-yellow-700 hover:underline">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md p-4" data-aos="zoom-in-up">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Humanities</h2>
                <div class="overflow-y-auto max-h-48">
                    <table class="table-auto w-full text-left text-black">
                        <thead class="bg-green-700 text-white">
                            <tr>
                                <th class="px-4 py-2">Departments</th>
                                <th class="px-4 py-2">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of English Language</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-bahasa-inggris/"
                                        class="text-green-700 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Japanese Literature</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-sastra-jepang/"
                                        class="text-green-700 hover:underline">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 5 Health Science -->
            <div class="bg-white rounded-lg shadow-md p-4" data-aos="zoom-in-up">
                <h2 class="text-xl font-semibold text-red-600 mb-4">Health Science</h2>
                <div class="overflow-y-auto max-h-48">
                    <table class="table-auto w-full text-left text-black">
                        <thead class="bg-red-600 text-white">
                            <tr>
                                <th class="px-4 py-2">Departments</th>
                                <th class="px-4 py-2">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Public Health</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-kesehatan-masyarakat/"
                                        class="text-red-600 hover:underline">Link</a></td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Bachelor of Environmental Health</td>
                                <td class="border px-4 py-2"><a href="https://dinus.ac.id/en/s1-kesehatan-lingkungan/"
                                        class="text-red-600 hover:underline">Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- contact us -->
        <section id="contact" class="py-10">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-blue-900 mb-8" data-aos="zoom-in">Contact Us</h2>
                <div class="flex flex-col md:flex-row md:flex-wrap items-center justify-center">
                    <!-- Email Contact -->
                    <div class="flex items-center mb-6 md:mb-0 md:mr-10 text-blue-900" data-aos="fade-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <span class="text-lg text-blue-900 font-medium ms-3">international@dinus.id</span>
                    </div>
                    <!-- WhatsApp Contact -->
                    <div class="flex items-center mb-6 md:mb-0 md:mr-10 text-green-500" data-aos="fade-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <a href="https://wa.me/6281391002282" target="_blank"
                            class="text-lg text-blue-900 font-medium ms-3">+62 813-9100-2282</a>
                    </div>
                    <div class="flex items-center text-green-500" data-aos="fade-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <a href="https://wa.me/62895606186259" target="_blank"
                            class="text-lg text-blue-900 font-medium ms-3">+62 895-6061-86259</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white py-4 mt-8 border-t">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <p class="text-gray-600">&copy; {{ date('Y') }} All rights reserved. Developed by UDINUS</p>
                <div class="flex space-x-4">
                    <a title="facebook" href="https://www.facebook.com/udinus.smg"
                        class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-ou hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a title="twitter" href="https://twitter.com/udinusofficial"
                        class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                        </svg>
                    </a>
                    <a title="instagram" href="https://www.instagram.com/udinusofficial/"
                        class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                    <a title="tiktok" href="https://www.tiktok.com/@udinusofficial"
                        class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', function() {
        var menu = document.querySelector('.navbar-menu');
        var menuButton = document.querySelector('.navbar-burger');
        var menuClose = document.querySelector('.navbar-close');

        menuButton.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });

        menuClose.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        let currentIndex = 0;

        const updateCarousel = () => {
            const width = carousel.clientWidth;
            carousel.scrollTo({
                left: currentIndex * width,
                behavior: 'smooth'
            });
        };

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : carousel.children.length - 1;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex < carousel.children.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        });
    });
</script>

</html>
