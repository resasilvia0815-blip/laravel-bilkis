<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kompetensi Keahlian | SMK</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-blue-800 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <!-- LOGO / NAMA SEKOLAH -->
                <a href="{{ url('/') }}"
                   class="text-xl font-bold">
                    SMK BILKIS
                </a>

                <!-- MENU -->
                <div class="hidden md:flex items-center gap-8">

                    <a href="{{ url('/') }}"
                       class="hover:text-yellow-300 transition">
                        Beranda
                    </a>

                    <a href="{{ url('/profil') }}"
                       class="hover:text-yellow-300 transition">
                        Profil
                    </a>

                    <a href="{{ url('/jurusan') }}"
                       class="hover:text-yellow-300 transition">
                        Jurusan
                    </a>

                    <a href="{{ url('/guru') }}"
                       class="hover:text-yellow-300 transition">
                        Guru
                    </a>

                </div>

            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="bg-gradient-to-r from-blue-800 to-blue-600 text-white">

        <div class="max-w-7xl mx-auto px-6 py-24">

            <div class="max-w-3xl">

                <p class="text-yellow-300 font-semibold mb-4">
                    SMK BILKIS
                </p>

                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Kompetensi Keahlian
                    <span class="text-yellow-300">
                        Sekolah
                    </span>
                </h1>

                <p class="text-lg md:text-xl text-blue-100 leading-relaxed mb-8">
                    Membekali peserta didik dengan pengetahuan,
                    keterampilan, dan pengalaman untuk menghadapi
                    dunia kerja serta perkembangan teknologi.
                </p>

                <a href="#kompetensi"
                   class="inline-block bg-yellow-400
                          hover:bg-yellow-300
                          text-blue-900
                          font-bold
                          px-7 py-3
                          rounded-lg
                          transition">

                    Lihat Kompetensi
                </a>

            </div>

        </div>

    </section>


    <!-- KOMPETENSI KEAHLIAN -->
    <section id="kompetensi"
             class="py-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            <!-- JUDUL -->
            <div class="text-center mb-14">

                <p class="text-blue-600 font-semibold mb-2">
                    PROGRAM KEAHLIAN
                </p>

                <h2 class="text-3xl md:text-4xl
                           font-bold text-gray-900 mb-4">

                    Kompetensi Keahlian

                </h2>

                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikut adalah beberapa kompetensi yang
                    dipelajari oleh peserta didik selama
                    mengikuti program keahlian.
                </p>

            </div>


            <!-- CARD -->
            <div class="grid grid-cols-1
                        md:grid-cols-2
                        lg:grid-cols-3
                        gap-8">


                <!-- CARD 1 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-blue-100
                                text-blue-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        💻

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Perakitan Komputer

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari komponen komputer,
                        perakitan PC, pemasangan hardware,
                        perawatan, dan troubleshooting.

                    </p>

                </div>


                <!-- CARD 2 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-green-100
                                text-green-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        🌐

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Jaringan Komputer

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari LAN, WAN, IP Address,
                        router, switch, jaringan wireless,
                        dan konfigurasi jaringan.

                    </p>

                </div>


                <!-- CARD 3 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-purple-100
                                text-purple-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        🖥️

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Sistem Operasi

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari instalasi,
                        konfigurasi, dan pengelolaan
                        sistem operasi Windows maupun Linux.

                    </p>

                </div>


                <!-- CARD 4 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-orange-100
                                text-orange-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        🗄️

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Administrasi Server

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari pengelolaan server,
                        konfigurasi layanan, serta
                        administrasi sistem jaringan.

                    </p>

                </div>


                <!-- CARD 5 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-red-100
                                text-red-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        🔐

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Keamanan Jaringan

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari keamanan jaringan,
                        firewall, perlindungan data,
                        dan keamanan sistem.

                    </p>

                </div>


                <!-- CARD 6 -->
                <div class="bg-white rounded-2xl
                            p-8 shadow-md
                            hover:shadow-xl
                            hover:-translate-y-2
                            transition duration-300">

                    <div class="w-16 h-16
                                bg-yellow-100
                                text-yellow-700
                                rounded-xl
                                flex items-center
                                justify-center
                                text-3xl mb-6">

                        👨‍💻

                    </div>

                    <h3 class="text-xl font-bold
                               text-gray-900 mb-3">

                        Pemrograman Dasar

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mempelajari algoritma, logika
                        pemrograman, serta pembuatan
                        aplikasi sederhana.

                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- TENTANG JURUSAN -->
    <section class="py-20 bg-white">

        <div class="max-w-5xl mx-auto px-6 text-center">

            <p class="text-blue-600 font-semibold mb-2">
                TENTANG KAMI
            </p>

            <h2 class="text-3xl md:text-4xl
                       font-bold text-gray-900 mb-6">

                Mempersiapkan Siswa
                untuk Masa Depan

            </h2>

            <p class="text-gray-600
                      text-lg
                      leading-relaxed">

                Jurusan sekolah kami memberikan pembelajaran
                teori dan praktik untuk membantu siswa
                mengembangkan kemampuan sesuai bidang
                keahlian yang dipilih. Dengan pembelajaran
                yang berkualitas, siswa diharapkan mampu
                melanjutkan pendidikan maupun memasuki dunia kerja.

            </p>

        </div>

    </section>


    <!-- CTA -->
    <section class="bg-blue-800 text-white">

        <div class="max-w-7xl mx-auto
                    px-6 py-16
                    text-center">

            <h2 class="text-3xl font-bold mb-4">

                Ingin Mengetahui Lebih Banyak?

            </h2>

            <p class="text-blue-100 mb-8">

                Lihat profil, jurusan, dan informasi
                guru di sekolah kami.

            </p>

            <a href="{{ url('/jurusan') }}"
               class="inline-block
                      bg-yellow-400
                      hover:bg-yellow-300
                      text-blue-900
                      font-bold
                      px-7 py-3
                      rounded-lg
                      transition">

                Lihat Jurusan

            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300">

        <div class="max-w-7xl mx-auto
                    px-6 py-10">

            <div class="grid
                        grid-cols-1
                        md:grid-cols-3
                        gap-8">

                <div>

                    <h3 class="text-white
                               text-xl
                               font-bold mb-3">

                        SMK BILKIS

                    </h3>

                    <p class="text-gray-400">

                        Sekolah yang berkomitmen
                        mencetak generasi unggul,
                        terampil, dan berkarakter.

                    </p>

                </div>


                <div>

                    <h3 class="text-white
                               font-bold mb-3">

                        Navigasi

                    </h3>

                    <div class="space-y-2">

                        <a href="{{ url('/') }}"
                           class="block hover:text-white">

                            Beranda

                        </a>

                        <a href="{{ url('/profil') }}"
                           class="block hover:text-white">

                            Profil

                        </a>

                        <a href="{{ url('/jurusan') }}"
                           class="block hover:text-white">

                            Jurusan

                        </a>

                        <a href="{{ url('/guru') }}"
                           class="block hover:text-white">

                            Guru

                        </a>

                    </div>

                </div>


                <div>

                    <h3 class="text-white
                               font-bold mb-3">

                        Kontak

                    </h3>

                    <p class="text-gray-400">
                        📍 Jl. Pendidikan No. 10
                    </p>

                    <p class="text-gray-400">
                        📞 0812-3456-7890
                    </p>

                    <p class="text-gray-400">
                        ✉️ info@smkbilkis.sch.id
                    </p>

                </div>

            </div>


            <div class="border-t
                        border-gray-800
                        mt-8 pt-6
                        text-center">

                <p class="text-gray-500">

                    © {{ date('Y') }}
                    SMK Bilkis.
                    Semua Hak Dilindungi.

                </p>

            </div>

        </div>

    </footer>

</body>
</html>
