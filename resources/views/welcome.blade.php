<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karoseri Maju Jaya - Manufaktur Karoseri Truk Terpercaya Sejak 1997</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/Logo.jpeg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/Logo.jpeg') }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Karoseri Maju Jaya - Manufaktur karoseri truk terpercaya sejak 1997. Spesialis pembuatan box tertutup, bak terbuka, tangki, trailer & dump truck. 4 lokasi pabrik di Temanggung, Semarang, Aceh & Padang.">
    <meta name="keywords" content="karoseri, karoseri maju jaya, karoseri truk, manufaktur karoseri, box truk, bak terbuka, tangki truk, trailer, dump truck, karoseri temanggung, karoseri semarang">
    <meta name="author" content="CV Maju Jaya">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://karoserimajujaya.com">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Karoseri Maju Jaya - Manufaktur Karoseri Truk Terpercaya Sejak 1997">
    <meta property="og:description" content="Spesialis pembuatan karoseri truk: box tertutup, bak terbuka, tangki, trailer & dump truck. 27+ tahun pengalaman, 4 lokasi pabrik.">
    <meta property="og:url" content="https://karoserimajujaya.com">
    <meta property="og:image" content="{{ asset('images/main.jpeg') }}">
    <meta property="og:locale" content="id_ID">

    <!-- Structured Data untuk Google -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "Karoseri Maju Jaya",
        "description": "Manufaktur karoseri truk terpercaya sejak 1997",
        "url": "https://karoserimajujaya.com",
        "telephone": "+62-812-2864-1062",
        "email": "majujayaperkasa1@gmail.com",
        "foundingDate": "1997",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Temanggung",
            "addressRegion": "Jawa Tengah",
            "addressCountry": "ID"
        },
        "sameAs": [
            "https://www.instagram.com/maju_jaya_karoseri/"
        ]
    }
    </script>

    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-white font-sans text-slate-900">
    <nav class="flex items-center justify-between px-6 lg:px-20 py-4 bg-white shadow-sm sticky top-0 z-50">
        <div class="flex items-center gap-4">
            <a href="/">
                <img src="{{ asset('images/Logo.jpeg') }}" alt="Logo Karoseri Maju Jaya"
                    class="h-14 w-auto object-contain">
            </a>
            <div>
                <h1 class="font-black text-2xl leading-none tracking-tight text-slate-800">KAROSERI MAJU JAYA</h1>
                <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mt-1">Established 1997</p>
            </div>
        </div>

        <div class="hidden lg:flex items-center gap-10 font-bold text-slate-600">
            <a href="#" class="hover:text-red-600 transition">Home</a>
            <a href="#products" class="hover:text-red-600 transition">Products</a>
            <a href="#services" class="hover:text-blue-600 transition">Services</a>
            <a href="#gallery" class="hover:text-blue-600 transition">Gallery</a>
            <a href="#about" class="hover:text-blue-600 transition">About</a>
            <a href="#contact"
                class="bg-red-600 text-white px-8 py-3 rounded-full hover:bg-red-700 shadow-lg shadow-red-200 transition">Contact
                Us</a>
        </div>
    </nav>

    <main class="flex flex-col lg:flex-row min-h-[calc(100vh-100px)]">
        <div class="w-full lg:w-1/2 px-6 lg:px-24 py-12 flex flex-col justify-start">
            <div
                class="inline-flex items-center gap-2 bg-blue-700 text-white px-5 py-2 rounded-full text-xs font-bold mb-4 w-fit uppercase tracking-wider">
                Established 1997 | 4 Lokasi Pabrik
            </div>

            <h2 class="text-6xl lg:text-7xl font-black text-slate-900 leading-[1.05] mb-4">
                27 Tahun <br>
                Pengalaman <br>
                <span class="text-blue-700">Manufaktur Karoseri <br> Truk</span>
            </h2>

            <p class="text-lg font-bold text-slate-800 mb-2">
                Sejak 1997 — Dipercaya Ribuan Perusahaan Logistik
            </p>

            <p class="text-md text-slate-500 leading-relaxed mb-8 max-w-xl">
                Dari bengkel body repair hingga manufaktur karoseri terbesar di Indonesia. Karoseri Maju Jaya
                menghadirkan solusi truk komersial dengan presisi tinggi, didukung 4 lokasi produksi strategis di
                Temanggung, Semarang, Aceh, dan Padang.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="text-green-500 text-2xl font-bold italic">✓</div>
                    <div>
                        <h4 class="font-bold text-slate-800">Material Premium</h4>
                        <p class="text-sm text-slate-400">Konstruksi berkualitas tinggi</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                    <div class="text-green-500 text-2xl font-bold italic">✓</div>
                    <div>
                        <h4 class="font-bold text-slate-800">Desain Custom</h4>
                        <p class="text-sm text-slate-400">Sesuai kebutuhan spesifik</p>
                    </div>
                </div>
                <a href="{{ asset('documents/npwp.pdf') }}" target="_blank" class="block group/card">
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4 hover:border-blue-200 hover:shadow-md transition duration-300">
                        <div class="text-green-500 text-2xl font-bold italic group-hover/card:scale-110 transition">✓
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 group-hover/card:text-blue-700 transition">NPWP</h4>
                            <p class="text-sm text-slate-400">Klik untuk melihat dokumen</p>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('documents/srut.pdf') }}" target="_blank" class="block group/card">
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4 hover:border-blue-200 hover:shadow-md transition duration-300">
                        <div class="text-blue-700 text-2xl font-bold italic group-hover/card:scale-110 transition">⬡
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 group-hover/card:text-blue-700 transition">SRUT Resmi
                            </h4>
                            <p class="text-sm text-slate-400">Legal & bersertifikat</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex flex-wrap gap-5">
                <a href="#contact"
                    class="bg-red-600 text-white px-10 py-5 rounded-2xl font-black text-lg hover:bg-red-700 shadow-2xl shadow-red-200 transition flex items-center gap-3 group">
                    Request Penawaran
                    <span class="group-hover:translate-x-1 transition">→</span>
                </a>
                <a href="#products"
                    class="bg-white border-2 border-blue-700 text-blue-700 px-10 py-5 rounded-2xl font-black text-lg hover:bg-slate-50 transition">
                    Lihat Produk
                </a>
            </div>
        </div>

        <div class="w-full lg:w-1/2 p-6 lg:p-12 flex items-center justify-center">
            <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl">
                <img src="{{ asset('images/main.jpeg') }}" alt="Truck Karoseri Maju Jaya"
                    class="w-full h-auto object-cover object-center">
                <div
                    class="absolute bottom-10 right-10 bg-white p-6 rounded-2xl shadow-2xl text-center border-t-4 border-blue-700">
                    <p class="text-blue-700 font-black text-4xl leading-none">1997</p>
                    <p class="text-slate-400 font-bold text-xs uppercase mt-2 tracking-widest">Berdiri Sejak</p>
                </div>
                <div class="absolute inset-0 border-8 border-blue-700/10 pointer-events-none rounded-3xl"></div>
            </div>
        </div>
    </main>
    <section id="products" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-bold mb-4">
                    Produk Kami
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-4">
                    Solusi Karoseri Truk Lengkap
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                    Pilih dari beragam jenis karoseri yang dirancang dan diproduksi dengan standar kualitas industri
                    terbaik.
                </p>
            </div>

            <div id="product-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="col-span-full text-center py-20">
                    <div
                        class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-blue-700 border-t-transparent">
                    </div>
                    <p class="mt-4 text-slate-400 font-medium">Loading...</p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <div class="text-center mb-20">
                <div class="inline-block bg-blue-100 text-blue-600 px-6 py-2 rounded-full text-sm font-bold mb-6">
                    Our Services
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-6">
                    KENAPA PILIH CV MAJU JAYA
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Kami menyediakan solusi lengkap untuk kebutuhan bodi truk Anda dengan layanan profesional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Service 1: Custom Design -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-blue-200 group-hover:scale-110 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-ruler">
                            <path
                                d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z" />
                            <path d="m14.5 12.5 2-2" />
                            <path d="m11.5 9.5 2-2" />
                            <path d="m8.5 6.5 2-2" />
                            <path d="m17.5 15.5 2-2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Desain Kustom</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Desain bodi truk yang disesuaikan untuk memenuhi kebutuhan dan preferensi bisnis Anda
                    </p>
                </div>

                <!-- Service 2: Expert Installation -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-blue-200 group-hover:scale-110 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-wrench">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Pemasangan Ahli</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Pemasangan profesional oleh teknisi terampil kami memastikan kesesuaian dan hasil akhir yang
                        sempurna
                    </p>
                </div>

                <!-- Service 3: Quality Assurance -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-blue-200 group-hover:scale-110 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shield-check">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Jaminan Kualitas</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Pemeriksaan kualitas dan pengujian yang ketat untuk memastikan daya tahan dan standar
                        keselamatan
                    </p>
                </div>

                <!-- Service 4: Fast Turnaround -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-blue-200 group-hover:scale-110 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Proses Cepat</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Proses produksi yang efisien memastikan pengiriman tepat waktu tanpa mengorbankan kualitas
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-600 px-6 py-2 rounded-full text-sm font-bold mb-6">
                    Galeri Produk
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-4">
                    Portofolio Karoseri Kami
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Lihat berbagai hasil produksi karoseri truk berkualitas yang telah kami selesaikan.
                </p>
            </div>

            <div id="gallery-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="col-span-full text-center py-20">
                    <div
                        class="animate-spin inline-block w-8 h-8 border-4 border-blue-600 border-t-transparent rounded-full mb-4">
                    </div>
                    <p class="text-slate-400">loading...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <div class="inline-block bg-blue-100 text-blue-600 px-6 py-2 rounded-full text-sm font-bold mb-6">
                        Tentang Kami
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-8 leading-tight">
                        Perjalanan 27 Tahun Membangun Kepercayaan
                    </h2>
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            <span class="font-bold text-slate-900">Karoseri Maju Jaya</span> berawal dari sebuah bengkel
                            mesin dan body repair sederhana di Desa Tegalroso, Parakan, Temanggung pada tahun 1997.
                            Perjalanan panjang dengan berbagai tantangan <span class="font-bold text-slate-900">jatuh
                                bangun</span> menjadi penempa mental usaha kami, membentuk ketangguhan dan komitmen
                            untuk terus berkembang mengikuti kebutuhan industri transportasi. Tonggak penting dimulai
                            tahun 2010 ketika kami mendapat kepercayaan pertama untuk memproduksi beberapa unit dump
                            truck, yang kemudian membuka jalan bagi ratusan unit karoseri berbagai jenis—dari bak besi,
                            drop side, mobil box, tangki, hingga crane—yang kini melayani perusahaan logistik di seluruh
                            Indonesia.
                        </p>
                        <p>
                            Kini dengan <span class="font-bold text-slate-900">4 lokasi produksi strategis di
                                Temanggung, Semarang, Aceh, dan Padang</span>, kami telah bertransformasi menjadi
                            manufaktur karoseri terpercaya dengan kapasitas produksi berskala besar. Setiap pabrik
                            dilengkapi dengan peralatan modern dan tenaga ahli berpengalaman yang mampu mengerjakan
                            proyek karoseri dengan presisi tinggi dan standar kualitas industri.
                        </p>
                        <p>
                            Komitmen kami adalah menghadirkan produk karoseri dengan standar kualitas terbaik,
                            dilengkapi legalitas SRUT resmi dari Kemenhub, dan didukung garansi komprehensif. Dari
                            konsultasi, produksi, hingga after-sales service—Karoseri Maju Jaya siap menjadi partner
                            jangka panjang yang mendukung pertumbuhan bisnis logistik Anda dengan solusi karoseri yang
                            andal dan efisien.
                        </p>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Stat 1 -->
                        <div
                            class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 text-center hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-medal">
                                    <path
                                        d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15" />
                                    <path d="M11 12 5.12 2.2" />
                                    <path d="m13 12 5.88-9.8" />
                                    <path d="M8 7h8" />
                                    <circle cx="12" cy="17" r="5" />
                                    <path d="M12 18v-2h-.5" />
                                </svg>
                            </div>
                            <h3 class="text-4xl font-black text-slate-900 mb-2">27+</h3>
                            <p class="text-slate-500 font-medium">Tahun Pengalaman</p>
                        </div>

                        <!-- Stat 2 -->
                        <div
                            class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 text-center hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <h3 class="text-4xl font-black text-slate-900 mb-2">1000+</h3>
                            <p class="text-slate-500 font-medium">Klien B2B</p>
                        </div>

                        <!-- Stat 3 -->
                        <div
                            class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 text-center hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-factory">
                                    <path
                                        d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                                    <path d="M17 18h1" />
                                    <path d="M12 18h1" />
                                    <path d="M7 18h1" />
                                </svg>
                            </div>
                            <h3 class="text-4xl font-black text-slate-900 mb-2">2500+</h3>
                            <p class="text-slate-500 font-medium">Unit Terproduksi</p>
                        </div>

                        <!-- Stat 4 -->
                        <div
                            class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 text-center hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <h3 class="text-4xl font-black text-slate-900 mb-2">4</h3>
                            <p class="text-slate-500 font-medium">Lokasi Pabrik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-600 px-6 py-2 rounded-full text-sm font-bold mb-6">
                    Klien Kami
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-6">
                    Dipercaya Oleh Perusahaan Ternama
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Termasuk BUMN dan perusahaan logistik terbesar di Indonesia telah mempercayakan kebutuhan karoseri
                    truk
                    mereka kepada Karoseri Maju Jaya
                </p>
            </div>

            <!-- Clients Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-20">
                <!-- Client 1 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-building-2">
                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                            <path d="M10 6h4" />
                            <path d="M10 10h4" />
                            <path d="M10 14h4" />
                            <path d="M10 18h4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Adil Jaya</h3>
                    <p class="text-xs text-slate-400">Pengangkutan Darat</p>
                </div>

                <!-- Client 2 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-truck">
                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                            <path d="M15 18H9" />
                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                            <circle cx="17" cy="18" r="2" />
                            <circle cx="7" cy="18" r="2" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Energi Bumi Sakti</h3>
                    <p class="text-xs text-slate-400">Angkutan Darat,Kontraktor Pertambangan, Rental Alat</p>
                </div>

                <!-- Client 3 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-wheat">
                            <path d="M2 22 16 8" />
                            <path
                                d="M3.47 12.53 5 11l1.53 1.53a3.5 3.5 0 0 1 0 4.94L2 22l4.53-4.53a3.5 3.5 0 0 1 4.94 0L13 19l1.53-1.53" />
                            <path d="M2 22 19 5" />
                            <path
                                d="M5.47 9.53 8 7l1.53 1.53a3.5 3.5 0 0 1 0 4.94L5 18l4.53-4.53a3.5 3.5 0 0 1 4.94 0L16 15l1.53-1.53" />
                            <path d="M12 2 22 11" />
                            <path d="M8 6h.01" />
                            <path d="M11 9h.01" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Siba Surya</h3>
                    <p class="text-xs text-slate-400">Agribusiness</p>
                </div>

                <!-- Client 4 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-container">
                            <path
                                d="M22 7.7c0-.6-.4-1.2-1-1.5L12 1l-9 5.2c-.6.3-1 .9-1 1.5v9.2c0 .6.4 1.2 1 1.5l9 5.2 9-5.2c.6-.3 1-.9 1-1.5V7.7Z" />
                            <path d="M12 1v22" />
                            <path d="M22 8 2 8" />
                            <path d="M17 19v-9" />
                            <path d="M7 19v-9" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Anggada Perkasa</h3>
                    <p class="text-xs text-slate-400">Logistics & Transport</p>
                </div>

                <!-- Client 5 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-wrench">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Wiguna Perkasa</h3>
                    <p class="text-xs text-slate-400">Industrial Manufacturing</p>
                </div>

                <!-- Client 6 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition text-center group">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-globe">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                            <path d="M2 12h20" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">PT. Bumi Lestari Logistik</h3>
                    <p class="text-xs text-slate-400">Logistics Solutions</p>
                </div>
            </div>


        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-4">
                    Konsultasi Proyek Karoseri Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Tim profesional kami siap membantu Anda menemukan solusi karoseri truk yang tepat untuk bisnis Anda
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column: Contact Info -->
                <div class="w-full lg:w-1/3 flex flex-col gap-6">
                    <!-- Phone -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-lg flex items-start gap-6">
                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-phone">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Telepon</h3>
                            <p class="text-slate-500 text-sm mb-1">Hubungi tim sales kami</p>
                            <p class="text-blue-600 font-bold text-lg">+62 852-0031-3235</p>
                            <p class="text-blue-600 font-bold text-lg">+62 812-2864-1062</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-lg flex items-start gap-6">
                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Email</h3>
                            <p class="text-slate-500 text-sm mb-1">Kirim pertanyaan Anda</p>
                            <p class="text-blue-600 font-bold">majujayaperkasa1@gmail.com</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-lg flex items-start gap-6">
                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-map-pin">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Lokasi Pabrik</h3>
                            <ul class="space-y-2 text-slate-500 text-sm">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-red-500 rounded-full"></span> Temanggung, Jawa Tengah
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                    <a href="https://maps.app.goo.gl/jYAAAqZTJYKrNaSR9" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition">Semarang, Jawa Tengah</a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-red-500 rounded-full"></span> Aceh
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-red-500 rounded-full"></span> Padang, Sumatera Barat
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Form -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-white p-8 lg:p-10 rounded-3xl border border-slate-100 shadow-xl">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-send">
                                    <path d="m22 2-7 20-4-9-9-4Z" />
                                    <path d="M22 2 11 13" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900">Request Penawaran</h3>
                        </div>

                        <p class="text-slate-500 mb-8">
                            Isi formulir di bawah ini dan tim kami akan menghubungi Anda dalam 1x24 jam untuk memberikan
                            penawaran terbaik
                        </p>

                        <form id="offerForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Perusahaan *</label>
                                    <div class="relative">
                                        <input type="text" id="company_name" required
                                            placeholder="PT / CV Nama Perusahaan"
                                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 outline-none transition text-slate-700">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap *</label>
                                    <div class="relative">
                                        <input type="text" id="full_name" required placeholder="Nama Anda"
                                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 outline-none transition text-slate-700">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Jenis Karoseri *</label>
                                    <div class="relative">
                                        <select id="karoseri_type" required
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none transition text-slate-700 appearance-none bg-white">
                                            <option value="">Pilih jenis karoseri</option>
                                            <option value="Box Alumunium">Box Alumunium</option>
                                            <option value="Box Besi">Box Besi</option>
                                            <option value="Wingbox">Wingbox</option>
                                            <option value="Dump Truck">Dump Truck</option>
                                            <option value="Tangki">Tangki</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Jumlah Unit</label>
                                    <input type="number" id="unit_amount" value="1" min="1"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none transition text-slate-700">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Detail Kebutuhan</label>
                                <textarea id="detail_needs" rows="4" placeholder="Jelaskan spesifikasi..."
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none transition text-slate-700 resize-none"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-red-600 text-white font-black text-lg py-4 rounded-xl hover:bg-red-700 transition duration-300 flex items-center justify-center gap-2">
                                Kirim Permintaan Penawaran Via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6aa2a306bc444e3446a90314/1k25kpl4a';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>