<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AYU PRINTING - Solusi Cetak Modern</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuBR8dzkJU-YFlwHQF-Hvrq8siouGwXOFSYN5deCtr8599Q8On_MPV-wzuEvIX8TFc8YYe-ZzpFRxb1Arxt4uNs01FlZUs0SaWUZ9KMLxvevK7e7ZjxHhtI0T7ZEwgZJ5f69JmPq7oCnLa1Wb0lH7DFq4qSJXQHDJAuw8tXa2tYvmYFL7Rf3IrWwmu_uf6-eUO4laYgG-gGyd_ZKI2fOEHntj_9rpmbXY7ijVop-f7LlY1yMYOl0yI0KPEO4e2-qe_X_6pCJP8ZD42K-');
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4F46E5", // Indigo
                        "secondary": "#EC4899", // Pink
                        "accent": "#F59E0B", // Amber
                        "background-light": "#F9FAFB", // Gray 50
                        "background-dark": "#111827", // Gray 900
                        "text-light": "#1F2937", // Gray 800
                        "text-dark": "#F9FAFB", // Gray 50
                        "card-light": "#FFFFFF",
                        "card-dark": "#1F2937", // Gray 800
                        "border-light": "#E5E7EB", // Gray 200
                        "border-dark": "#374151", // Gray 700
                        "gold": "#F59E0B",
                    },
                    fontFamily: {
                        "display": ["Poppins", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px",
                    },
                    boxShadow: {
                        'card': '0 10px 15px -3px rgb(0 0 0 / 0.05), 0 4px 6px -4px rgb(0 0 0 / 0.05)',
                        'card-dark': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)'
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="sticky top-0 z-50 w-full bg-card-light/80 dark:bg-card-dark/80 backdrop-blur-lg border-b border-border-light dark:border-border-dark"
                id="home">
                <div
                    class="flex items-center justify-between whitespace-nowrap px-4 sm:px-6 lg:px-8 py-4 max-w-7xl mx-auto">
                    <div class="flex items-center gap-3 text-text-light dark:text-text-dark">
                        <div class="size-8 text-primary">
                            <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold tracking-tight">AYUNG PRINTING</h2>
                    </div>
                    <nav class="hidden md:flex flex-1 justify-end items-center gap-8">
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-secondary transition-colors"
                            href="#home">Beranda</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-secondary transition-colors"
                            href="#services">Layanan</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-secondary transition-colors"
                            href="#our-work">Galeri</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-secondary transition-colors"
                            href="#testimonials">Testimoni</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-secondary transition-colors"
                            href="#contact">Kontak</a>
                    </nav>
                    <div class="hidden md:flex items-center gap-2 ml-8">
                        <a aria-label="WhatsApp"
                            class="flex cursor-pointer items-center justify-center rounded-full size-10 bg-gray-100 dark:bg-gray-800 text-green-500 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-xl">sms</span>
                        </a>
                        <a aria-label="Instagram"
                            class="flex cursor-pointer items-center justify-center rounded-full size-10 bg-gray-100 dark:bg-gray-800 text-pink-500 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-xl">photo_camera</span>
                        </a>
                    </div>
                </div>
            </header>
            <main class="flex-1">
                <section
                    class="relative w-full h-[70vh] min-h-[500px] flex items-center justify-center text-center text-white hero-bg bg-cover bg-center bg-no-repeat">
                    <div class="px-4 md:px-6 max-w-7xl mx-auto">
                        <div class="flex flex-col gap-6 items-center">
                            <h1 class="text-4xl font-extrabold tracking-tight sm:text-6xl md:text-7xl">Wujudkan Ide Anda
                            </h1>
                            <p class="max-w-[700px] text-lg font-light text-gray-200 md:text-xl">Solusi lengkap untuk
                                layanan cetak berkualitas tinggi, cepat, dan andal. Dari kartu nama hingga spanduk
                                besar, kami mencetak dengan presisi dan semangat.</p>
                            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                                <a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 px-8 bg-primary hover:bg-opacity-90 text-white text-base font-semibold tracking-wide transition-all shadow-lg"
                                    href="#contact">
                                    <span class="truncate">Hubungi Kami</span>
                                </a>
                                <a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 px-8 bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 text-white text-base font-semibold tracking-wide transition-colors"
                                    href="#our-work">
                                    <span class="truncate">Lihat Portofolio</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="w-full py-16 md:py-28" id="about">
                    <div class="px-4 md:px-6 max-w-7xl mx-auto">
                        <div class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="flex flex-col gap-4">
                                <span
                                    class="font-semibold text-primary dark:text-secondary uppercase tracking-wider">Tentang
                                    Kami</span>
                                <h2
                                    class="text-3xl font-bold tracking-tight sm:text-4xl text-text-light dark:text-text-dark">
                                    Apa itu AYU PRINTING?</h2>
                                <p
                                    class="text-base font-normal leading-relaxed text-text-light/80 dark:text-text-dark/80">
                                    AYU PRINTING adalah mitra terpercaya Anda untuk semua kebutuhan percetakan. Kami
                                    berdedikasi untuk memberikan kualitas dan layanan yang luar biasa, mulai dari kartu
                                    nama hingga spanduk format besar. Misi kami adalah mewujudkan visi Anda dengan
                                    presisi, warna-warna cerah, dan bahan-bahan premium.</p>
                                <p
                                    class="text-base font-normal leading-relaxed text-text-light/80 dark:text-text-dark/80">
                                    Menggunakan teknologi canggih dan tim ahli yang bersemangat, kami memastikan setiap
                                    proyek adalah sebuah mahakarya.</p>
                            </div>
                            <div class="w-full h-80 rounded-xl bg-cover bg-center"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB2K4QSTPrqwaNGYyIHUc855lQFjk23NfkSie9nkyyhT89V05nD9gsajdS2xnrBBWxQSMjk4uAH8ijIEVEmb5yFw2k_8-MyOPCf7ERb8SrdSWv_TjvRf76i_mfK1JNoDlMnS7NnSZiYQnvUQvJXnZb8Vr8mAtxpsgoHuYsS7R23EgbccKzb2RvJ8Vykk1zq4omItqtIFoIGmdpNx632NcV8xMTaFAZIjVBcZvy9pFpQ9U0cFbUUoGVXVsaXAE2mDoY11yKYiEW_sSLB");'>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="w-full py-16 md:py-28 bg-card-light dark:bg-card-dark" id="services">
                    <div class="px-4 md:px-6 max-w-7xl mx-auto">
                        <div class="flex flex-col gap-12">
                            <div class="flex flex-col gap-2 text-center items-center">
                                <span
                                    class="font-semibold text-primary dark:text-secondary uppercase tracking-wider">Layanan
                                    Kami</span>
                                <h2
                                    class="text-3xl font-bold tracking-tight sm:text-4xl text-text-light dark:text-text-dark">
                                    Apa yang Kami Tawarkan</h2>
                                <p
                                    class="text-base font-normal leading-relaxed max-w-3xl text-text-light/80 dark:text-text-dark/80">
                                    Kami menawarkan berbagai layanan cetak untuk memenuhi setiap kebutuhan Anda. Tim
                                    kami dilengkapi dengan teknologi terkini untuk memastikan hasil terbaik.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div
                                    class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 text-center items-center shadow-card dark:shadow-card-dark">
                                    <div
                                        class="flex items-center justify-center size-16 rounded-full bg-primary/10 text-primary dark:bg-secondary/10 dark:text-secondary text-4xl mb-2">
                                        <span class="material-symbols-outlined !text-4xl">print</span></div>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-xl font-bold">Cetak Digital</h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">
                                            Sempurna untuk cetak jumlah sedikit, data variabel, dan pengerjaan cepat.
                                            Ideal untuk pamflet, brosur, dan kartu nama.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 text-center items-center shadow-card dark:shadow-card-dark">
                                    <div
                                        class="flex items-center justify-center size-16 rounded-full bg-primary/10 text-primary dark:bg-secondary/10 dark:text-secondary text-4xl mb-2">
                                        <span class="material-symbols-outlined !text-4xl">layers</span></div>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-xl font-bold">Cetak Offset</h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Pilihan
                                            utama untuk proyek volume tinggi, memberikan kualitas superior dan akurasi
                                            warna untuk buku dan majalah.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 text-center items-center shadow-card dark:shadow-card-dark">
                                    <div
                                        class="flex items-center justify-center size-16 rounded-full bg-primary/10 text-primary dark:bg-secondary/10 dark:text-secondary text-4xl mb-2">
                                        <span class="material-symbols-outlined !text-4xl">aspect_ratio</span></div>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-xl font-bold">Format Besar</h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Buat
                                            dampak besar dengan cetak format besar kami untuk spanduk, poster, papan
                                            nama, dan display pameran.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- PORTOFOLIO -->

                <section class="w-full py-16 md:py-28" id="our-work">
                    <div class="px-4 md:px-6 max-w-7xl mx-auto">
                        <div class="flex flex-col gap-12">
                            <div class="flex flex-col gap-2 text-center items-center">
                                <span
                                    class="font-semibold text-primary dark:text-secondary uppercase tracking-wider">Galeri</span>
                                <h2
                                    class="text-3xl font-bold tracking-tight text-text-light dark:text-text-dark sm:text-4xl">
                                    Portofolio Kami</h2>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB2K4QSTPrqwaNGYyIHUc855lQFjk23NfkSie9nkyyhT89V05nD9gsajdS2xnrBBWxQSMjk4uAH8ijIEVEmb5yFw2k_8-MyOPCf7ERb8SrdSWv_TjvRf76i_mfK1JNoDlMnS7NnSZiYQnvUQvJXnZb8Vr8mAtxpsgoHuYsS7R23EgbccKzb2RvJ8Vykk1zq4omItqtIFoIGmdpNx632NcV8xMTaFAZIjVBcZvy9pFpQ9U0cFbUUoGVXVsaXAE2mDoY11yKYiEW_sSLB");'>
                                    </div>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Brosur Promosi
                                        </h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Cetak
                                            brosur berkualitas tinggi dengan finishing glossy untuk promosi bisnis yang
                                            efektif.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuChZ64ag007CRkrp-R7cTT-ODvJosV3eP_SM6UrNMGSPEZBaLQYABrqiK8uhyyLcnPmLJksFsm4rJ7U9EL96h3IMeQeUD12KZxL1b6I-WdQW7RbgMEPqCQUMCd8ly8QIpqUiZhY2jA2b0WYqYxAIZMzpFtVEEy0W-WNjaNHjxJ6ArB4NR99nB5-pf-G35lxy8mH4a1hkyacL5hT_Iez1oJwV9uv4wGJ86ZBwof7TQTqg21C4KC7P3qLdzyX0GSnESB6dbhAvHcETlmB");'>
                                    </div>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Kartu Nama
                                            Profesional</h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Desain
                                            dan cetak kartu nama yang elegan dan profesional untuk kesan pertama yang
                                            memukau.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <a href="code2.php">
                                        <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBR8dzkJU-YFlwHQF-Hvrq8siouGwXOFSYN5deCtr8599Q8On_MPV-wzuEvIX8TFc8YYe-ZzpFRxb1Arxt4uNs01FlZUs0SaWUZ9KMLxvevK7e7ZjxHhtI0T7ZEwgZJ5f69JmPq7oCnLa1Wb0lH7DFq4qSJXQHDJAuw8tXa2tYvmYFL7Rf3IrWwmu_uf6-eUO4laYgG-gGyd_ZKI2fOEHntj_9rpmbXY7ijVop-f7LlY1yMYOl0yI0KPEO4e2-qe_X_6pCJP8ZD42K-");'>
                                        </div>
                                    </a>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Spanduk Vinyl
                                        </h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Spanduk
                                            vinyl format besar yang tahan lama, sempurna untuk acara di dalam dan luar
                                            ruangan.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9STlytfM39c0EcPEOH1gbhBObWKKCnCUQGEXHnOSWifGmig4VWzOJ1K7J7AIToTsl1r1O1x4nl-UVJF33h6EK2xQa9BimSIXsI0QR3wxLmLR_Z7asNsTM-spbBClZEmvCrnz5dCgCZSGZzLF_EYJ1a-LKG_fJIEnqPDoic_gvT2PvLNrjqgQmoNqToKx65HchmLTwesky63Aq3gJgPuRdAvg1BjyD6VAv_COUXhJRUML8lAAN82eQ25Lly8URkt2vhjKjMi2_9x3m");'>
                                    </div>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Kaos Custom
                                        </h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Cetak
                                            kaos custom dengan logo perusahaan atau desain unik untuk seragam atau
                                            merchandise.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDNc4oYJwZAiN4xjjuefX6lhSajg5XtNoPVfJNXgeY9ol0zekeTWohTh4Z66L8wCjziEufP16WbpSxFe9IZsFyAASHXxljl9rv1bbxZYT85dezWq5wLT1jVmKSuRCJWQuzueC5JYGOw_Jx8opMFFlLRPn0jU_EyQOp_QSjSkmy9NungvAtwxkVluXExKbpadC7DhrYH7DVnZIN209CCS_2jR5CBEOZFwqrop-Wzq21Zkn5rfpW-2oaMrUBIS10Zbaqgb4ZchDC2Jp55");'>
                                    </div>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Stiker
                                            Warna-warni</h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">Koleksi
                                            stiker cetak dengan berbagai bentuk dan ukuran, cocok untuk branding produk.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-4 rounded-xl overflow-hidden border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-card dark:shadow-card-dark">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCqI7swZ5kZFwVZiUe5mhFtj3Pfrun3CEUYtYzDfveNb_w4cIPbR6L8CcOy-RJfy9Y5EVJe9WOqJs2W81kGDLtq-rgYOkN3vklACzQCgULVY_uTSY2X0vgppKWrdelHzVf6l_Q2PvoclEIjc8p8rXTnzF3DEXZ_ec7Q5tqLr3Q-_GL2TWrOD4JvnovTztjcgsoyNBDvVGB0S6X67qKG5SbR5pP0FQ_q5V2KtkpVAFsH-QUPBOasnVS72-JnHS1Jx0D-gF0sLdXKD4P1");'>
                                    </div>
                                    <div class="p-6 pt-0 flex flex-col gap-2">
                                        <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Undangan Acara
                                        </h3>
                                        <p class="text-sm font-normal text-text-light/80 dark:text-text-dark/80">
                                            Undangan acara yang dicetak dengan elegan untuk momen-momen spesial Anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="w-full py-16 md:py-28 bg-card-light dark:bg-card-dark" id="testimonials">
                    <div class="px-4 md:px-6 max-w-7xl mx-auto">
                        <div class="flex flex-col gap-12">
                            <div class="flex flex-col gap-2 text-center items-center">
                                <span
                                    class="font-semibold text-primary dark:text-secondary uppercase tracking-wider">Testimoni</span>
                                <h2
                                    class="text-3xl font-bold tracking-tight sm:text-4xl text-text-light dark:text-text-dark">
                                    Kata Klien Kami</h2>
                                <p
                                    class="text-base font-normal leading-relaxed max-w-3xl text-text-light/80 dark:text-text-dark/80">
                                    Kami bangga memberikan layanan dan kualitas yang luar biasa. Inilah yang dikatakan
                                    pelanggan kami.</p>
                            </div>
                            <div class="relative overflow-hidden">
                                <div class="flex gap-8 animate-scroll">
                                    <div
                                        class="flex flex-col flex-shrink-0 w-full md:w-[calc(33.333%-1.33rem)] gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 shadow-card dark:shadow-card-dark">
                                        <div class="flex items-center gap-1 text-gold"><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span></div>
                                        <p class="text-base font-normal text-text-light/80 dark:text-text-dark/80">
                                            "Kualitas kartu namanya luar biasa, dan waktu pengerjaannya sangat cepat.
                                            Sangat direkomendasikan!"</p>
                                        <p class="text-sm font-bold text-text-light dark:text-text-dark">- Sarah J.,
                                            Direktur Kreatif</p>
                                    </div>
                                    <div
                                        class="flex flex-col flex-shrink-0 w-full md:w-[calc(33.333%-1.33rem)] gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 shadow-card dark:shadow-card-dark">
                                        <div class="flex items-center gap-1 text-gold"><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span></div>
                                        <p class="text-base font-normal text-text-light/80 dark:text-text-dark/80">"AYU
                                            PRINTING menangani pesanan spanduk besar kami dengan sempurna. Warnanya
                                            cerah dan bahannya tahan lama. Pelayanan prima."</p>
                                        <p class="text-sm font-bold text-text-light dark:text-text-dark">- Michael B.,
                                            Koordinator Acara</p>
                                    </div>
                                    <div
                                        class="flex flex-col flex-shrink-0 w-full md:w-[calc(33.333%-1.33rem)] gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-gray-900/50 p-8 shadow-card dark:shadow-card-dark">
                                        <div class="flex items-center gap-1 text-gold"><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span><span
                                                class="material-symbols-outlined !text-xl"
                                                style="font-variation-settings: 'FILL' 1">star</span></div>
                                        <p class="text-base font-normal text-text-light/80 dark:text-text-dark/80">"Tim
                                            mereka membantu kami dengan desain untuk brosur baru kami, dan produk
                                            akhirnya melebihi ekspektasi kami. Profesional dan kreatif."</p>
                                        <p class="text-sm font-bold text-text-light dark:text-text-dark">- Emily R.,
                                            Pemilik Usaha Kecil</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="w-full bg-card-dark text-text-dark/80 py-16" id="contact">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
                    <div class="flex flex-col gap-4 md:col-span-2">
                        <h3 class="font-bold text-xl text-white">AYU PRINTING</h3>
                        <p class="text-sm leading-relaxed max-w-md">Mitra Anda untuk solusi cetak premium. Kami
                            berkomitmen pada kualitas, kecepatan, dan kepuasan pelanggan. Mari ciptakan sesuatu yang
                            luar biasa bersama.</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="font-bold text-lg text-white">Info Kontak</h3>
                        <div class="flex items-center gap-3 text-sm"><span
                                class="material-symbols-outlined">call</span><span>+62 123 4567 890</span></div>
                        <div class="flex items-center gap-3 text-sm"><span
                                class="material-symbols-outlined">sms</span><span>+62 123 4567 891</span></div>
                        <div class="flex items-center gap-3 text-sm"><span
                                class="material-symbols-outlined">alternate_email</span><span>kontak@ayuprinting.com</span>
                        </div>
                        <div class="flex items-start gap-3 text-sm mt-2"><span
                                class="material-symbols-outlined mt-1">location_on</span><span>Jl. Percetakan No.
                                123,<br />Kota Kreatif, ID 12345</span></div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="font-bold text-lg text-white">Metode Pembayaran</h3>
                        <p class="text-sm">Kami menerima berbagai metode pembayaran untuk kenyamanan Anda.</p>
                        <div class="flex items-center gap-4 text-3xl text-gray-400">
                            <svg class="h-6" fill="currentColor" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Visa</title>
                                <path
                                    d="M6.113 5.438L3.68 18.562h3.204l2.433-13.124H6.113zM20.32 5.438h-2.528l-3.328 13.124h3.204l.605-2.52h2.528l.363 2.52h3.083L20.32 5.438zm-1.74 8.082l1.088-5.04 1.088 5.04h-2.176zM13.438 5.438l-2.292 13.124h3.204l2.292-13.124h-3.204z">
                                </path>
                            </svg>
                            <svg class="h-6" fill="currentColor" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Mastercard</title>
                                <path
                                    d="M12 5.592a6.408 6.408 0 1 0 0 12.816 6.408 6.408 0 0 0 0-12.816zM9.36 12a2.64 2.64 0 1 1 5.28 0 2.64 2.64 0 0 1-5.28 0z">
                                </path>
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12c.168 0 .335-.004.5-.01A12.002 12.002 0 0 1 12 0z"
                                    fill="#FF5F00"></path>
                                <path
                                    d="M17.136 12c0-1.042-.32-2.004-.863-2.828.163.003.327.006.495.006.29 0 .574-.015.854-.042A6.41 6.41 0 0 0 12 5.592v12.816a6.41 6.41 0 0 0 5.136-9.236z"
                                    fill="#EB001B"></path>
                            </svg>
                            <svg class="h-6" fill="currentColor" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>PayPal</title>
                                <path
                                    d="M3.333 3.149C3.12 3.142 2.56.333 1.15.333H.98L.333 4V20h5.333c5.035 0 7.82-2.31 7.182-7.054-.34-2.48-2.22-4.11-4.78-4.434-.582-.07-1.12-.03-1.61.12-.51.15-1.16.4-1.16.4l-.1.05c-.12.06-.23.12-.34.19a.44.44 0 00-.23.4l.64 3.99s.11.75.9.75h.5s.32-.04.4-.41l.22-1.35.03-.12.06-.41c.1-.64.7-1.03 1.34-1.03.95 0 1.68.64 1.5 1.58-.12.65-.68 1.05-1.3 1.1l-1.34.11c-2.3.2-3.4 1.54-3.8 3.5-.3 1.4-.04 2.52 1.13 3.17.6.33 1.4.35 2.22.35h.02c.2 0 .4-.01.58-.02 1.35-.12 2.6-.72 3.32-1.78.23-.34.42-.72.56-1.14l.05-.15s.2-1.03 1.1-1.03h.02c.23 0 .44.02.64.05.2.03.4.07.57.12l.13.04.14.05.2.07.1.04c.16.07.3.15.42.24l.02.02c.07.05.14.1.2.16l.06.06.05.06.02.02.04.05.02.03.02.03s.01.01.01.01l1.58-9.8S18.06.333 16.66.333h-2.1c-.2.03-.4.1-.58.17-.18.08-.34.18-.5.29-.16.12-.3.24-.42.38-.12.14-.24.3-.34.46l-3.3 5.02c-.13.2-.26.4-.38.6-.12.2-.24.4-.35.6-.1.18-.2.36-.3.55-.08.17-.16.34-.23.51-.06.16-.12.32-.18.47-.04.13-.08.25-.12.38-.04.13-.08.25-.12.38l-.02.02z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-border-dark/20 text-center text-sm w-full">
                    <p>© 2024 AYU PRINTING. Hak Cipta Dilindungi.</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>