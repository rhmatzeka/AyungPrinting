<!DOCTYPE html>
<html class="light" lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Detail Portofolio - Desain Kemasan Produk XYZ</title>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#137fec",
            "background-light": "#f6f7f8",
            "background-dark": "#101922",
          },
          fontFamily: { "display": ["Inter", "sans-serif"] },
        },
      },
    }
  </script>

  <style>
    /* Smooth Scrolling untuk seluruh halaman */
    html { scroll-behavior: smooth; }
    
    /* CSS Tambahan untuk efek hover gambar */
    .thumbnail { transition: all 0.3s ease; cursor: pointer; border: 2px solid transparent; }
    .thumbnail:hover { transform: scale(1.05); border-color: #137fec; }
    .active-thumb { border-color: #137fec; opacity: 0.7; }
  </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 overflow-x-hidden">

  <header class="fixed top-0 w-full z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-all duration-300">
    <div class="flex items-center justify-between px-4 sm:px-10 py-3 max-w-7xl mx-auto">
      <div class="flex items-center gap-2 sm:gap-4">
        <div class="size-5 sm:size-6 text-primary animate-bounce">
          <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path></svg>
        </div>
        <h2 class="text-base sm:text-lg font-bold tracking-[-0.015em]">AYU PRINTING</h2>
      </div>

      <div class="hidden lg:flex flex-1 justify-end gap-8 items-center">
        <nav class="flex gap-8">
          <a class="text-sm font-medium hover:text-primary transition-colors" href="index.php">Beranda</a>
          <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Portofolio</a>
          <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Kontak</a>
        </nav>
      </div>

      <div class="lg:hidden flex gap-1">
        <button onclick="toggleMenu()" class="p-2 rounded-md hover:bg-slate-200 dark:hover:bg-slate-800 transition">
          <span class="material-symbols-outlined text-[24px]">menu</span>
        </button>
      </div>
    </div>

    <div id="mobile-menu" class="hidden bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 p-4 lg:hidden flex flex-col gap-4 shadow-lg absolute w-full left-0">
        <a class="text-sm font-medium hover:text-primary" href="index.php">Beranda</a>
        <a class="text-sm font-medium hover:text-primary" href="#">Portofolio</a>
        <a class="text-sm font-medium hover:text-primary" href="#">Kontak</a>
    </div>
  </header>

  <main class="flex flex-col gap-8 px-4 sm:px-10 py-20 sm:py-28 max-w-5xl mx-auto w-full overflow-hidden">
    
    <div class="flex flex-col gap-3 sm:gap-4" data-aos="fade-down">
      <div class="flex flex-wrap gap-2 text-xs sm:text-sm text-slate-500 dark:text-slate-400">
        <a class="hover:text-primary" href="#">Portofolio</a> / <span>Cetak Kemasan</span>
      </div>
      <h1 class="text-3xl sm:text-5xl font-black tracking-tighter leading-tight" id="project-title">Loading...</h1>
    </div>

    <div class="flex flex-col gap-3 sm:gap-4">
      <div class="w-full aspect-video bg-center bg-no-repeat bg-cover rounded-xl shadow-lg transition-all duration-500 ease-in-out"
           id="main-image"
           data-aos="zoom-in"
           style="background-image: url('https://images.unsplash.com/photo-1631679706909-1844bbd07221?q=80&w=1920&auto=format&fit=crop');">
      </div>

      <div class="grid grid-cols-4 gap-2 sm:gap-4" id="gallery-grid" data-aos="fade-up" data-aos-delay="100">
        </div>
    </div>

    <div class="flex flex-col lg:grid lg:grid-cols-3 gap-8 lg:gap-10">
      
      <div class="lg:col-span-2 flex flex-col gap-6 sm:gap-8">
        <div id="project-details" class="flex flex-col gap-6 sm:gap-8">
           </div>
      </div>

      <div class="lg:col-span-1 order-first lg:order-last" data-aos="fade-left">
        <div class="bg-white dark:bg-slate-900/50 p-5 sm:p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
          <h3 class="text-lg sm:text-xl font-bold mb-4 sm:mb-6">Spesifikasi</h3>
          <ul class="space-y-3 sm:space-y-4 text-sm" id="project-specs">
            </ul>
        </div>
      </div>
    </div>

    <div class="border-t border-slate-200 dark:border-slate-800 pt-8 sm:pt-12 text-center flex flex-col items-center gap-3 sm:gap-4" data-aos="fade-up">
      <h2 class="text-2xl sm:text-3xl font-bold px-2">Siap mewujudkan ide Anda?</h2>
      <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 max-w-md">Konsultasi gratis dengan tim ahli kami sekarang juga.</p>
      <button class="mt-2 w-full sm:w-auto px-8 py-3 bg-primary text-white font-bold rounded-lg hover:bg-blue-600 transition-all shadow-lg">
        Diskusikan Proyek
      </button>
    </div>

  </main>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // ... (Gunakan script JS yang sama persis dari jawaban sebelumnya) ...
    // Paste ulang script JS dari jawaban sebelumnya di sini
     const portfolioData = {
      title: "Desain Kemasan Premium XYZ",
      category: "Packaging",
      description: "Proyek ini bertujuan untuk menciptakan identitas visual kemasan yang mewah dan modern.",
      details: [
        { title: "Tantangan", text: "Klien butuh kemasan yang tahan banting tapi tetap terlihat mahal di rak supermarket." },
        { title: "Solusi", text: "Kami menggunakan bahan Art Carton 310gsm dengan finishing Hot Foil Gold." },
        { title: "Hasil", text: "Penjualan meningkat 25% di bulan pertama peluncuran." }
      ],
      specs: [
        { label: "Klien", value: "XYZ Cosmetics Inc." },
        { label: "Bahan", value: "Art Carton 310gsm" },
        { label: "Teknik", value: "Offset, Hot Foil, Emboss" }
      ],
      images: [
        "https://images.unsplash.com/photo-1631679706909-1844bbd07221?q=80&w=1920&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=800&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1605610916719-e62bd6910981?q=80&w=800&auto=format&fit=crop",
        "https://images.unsplash.com/photo-1556742524-8c066e228ab2?q=80&w=800&auto=format&fit=crop"
      ]
    };

    document.addEventListener('DOMContentLoaded', () => {
      AOS.init({ duration: 800, once: true });
      loadContent();
    });
    
    function loadContent() {
      document.getElementById('project-title').innerText = portfolioData.title;
      const galleryContainer = document.getElementById('gallery-grid');
      portfolioData.images.forEach((imgUrl, index) => {
        const div = document.createElement('div');
        div.className = `thumbnail w-full aspect-square bg-cover bg-center rounded-xl ${index === 0 ? 'active-thumb' : ''}`;
        div.style.backgroundImage = `url('${imgUrl}')`;
        div.onclick = () => changeMainImage(imgUrl, div);
        galleryContainer.appendChild(div);
      });

      const detailsContainer = document.getElementById('project-details');
      portfolioData.details.forEach(item => {
        // PERBAIKAN DI SINI: Menambahkan class break-words agar teks tidak bablas
        const html = `
          <div data-aos="fade-up" class="w-full break-words">
            <h2 class="text-xl sm:text-2xl font-bold mb-2 text-slate-900 dark:text-white">${item.title}</h2>
            <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed text-justify sm:text-left">${item.text}</p>
          </div>`;
        detailsContainer.innerHTML += html;
      });

      const specsContainer = document.getElementById('project-specs');
      portfolioData.specs.forEach(spec => {
        const html = `
          <li class="flex flex-col border-b border-slate-100 dark:border-slate-800 pb-2">
            <span class="font-semibold text-slate-800 dark:text-slate-200">${spec.label}</span>
            <span class="text-slate-600 dark:text-slate-300">${spec.value}</span>
          </li>`;
        specsContainer.innerHTML += html;
      });
    }

    function changeMainImage(url, clickedElement) {
      const mainImg = document.getElementById('main-image');
      mainImg.style.opacity = '0.5';
      setTimeout(() => {
        mainImg.style.backgroundImage = `url('${url}')`;
        mainImg.style.opacity = '1';
      }, 200);
      document.querySelectorAll('.thumbnail').forEach(el => el.classList.remove('active-thumb'));
      clickedElement.classList.add('active-thumb');
    }

    function toggleMenu() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    }
  </script>
</body>
</html>