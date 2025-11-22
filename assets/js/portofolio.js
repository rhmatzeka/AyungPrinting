// Extracted JS from portofolio1.php
// This file expects AOS script to be loaded before it is executed (keep the AOS <script> include).

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
  if (window.AOS && typeof AOS.init === 'function') {
    AOS.init({ duration: 800, once: true });
  }
  loadContent();
});

function loadContent() {
  const titleEl = document.getElementById('project-title');
  if (titleEl) titleEl.innerText = portfolioData.title;

  const galleryContainer = document.getElementById('gallery-grid');
  if (galleryContainer) {
    portfolioData.images.forEach((imgUrl, index) => {
      const div = document.createElement('div');
      div.className = `thumbnail w-full aspect-square bg-cover bg-center rounded-xl ${index === 0 ? 'active-thumb' : ''}`;
      div.style.backgroundImage = `url('${imgUrl}')`;
      div.onclick = () => changeMainImage(imgUrl, div);
      galleryContainer.appendChild(div);
    });
  }

  const detailsContainer = document.getElementById('project-details');
  if (detailsContainer) {
    portfolioData.details.forEach(item => {
      const html = `
        <div data-aos="fade-up" class="w-full break-words">
          <h2 class="text-xl sm:text-2xl font-bold mb-2 text-slate-900 dark:text-white">${item.title}</h2>
          <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed text-justify sm:text-left">${item.text}</p>
        </div>`;
      detailsContainer.innerHTML += html;
    });
  }

  const specsContainer = document.getElementById('project-specs');
  if (specsContainer) {
    portfolioData.specs.forEach(spec => {
      const html = `
        <li class="flex flex-col border-b border-slate-100 dark:border-slate-800 pb-2">
          <span class="font-semibold text-slate-800 dark:text-slate-200">${spec.label}</span>
          <span class="text-slate-600 dark:text-slate-300">${spec.value}</span>
        </li>`;
      specsContainer.innerHTML += html;
    });
  }
}

function changeMainImage(url, clickedElement) {
  const mainImg = document.getElementById('main-image');
  if (!mainImg) return;
  mainImg.style.opacity = '0.5';
  setTimeout(() => {
    mainImg.style.backgroundImage = `url('${url}')`;
    mainImg.style.opacity = '1';
  }, 200);
  document.querySelectorAll('.thumbnail').forEach(el => el.classList.remove('active-thumb'));
  if (clickedElement && clickedElement.classList) clickedElement.classList.add('active-thumb');
}

function toggleMenu() {
  const menu = document.getElementById('mobile-menu');
  if (menu) menu.classList.toggle('hidden');
}

// expose toggleMenu for inline onclick handlers (keeps compatibility)
window.toggleMenu = toggleMenu;
