<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Produk - Khrzmi Code</title>

    <!-- tailwind cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="styles.css" />

    <style type="text/tailwindcss">
      @theme {
        --color-black-500: #101828;
        --color-white: #fdfbf7;
      }
    </style>
  </head>
  <body class="h-full bg-white text-gray-900 antialiased">
    <div
      class="pointer-events-none fixed inset-0 -z-10 bg-ornament"
      aria-hidden="true"
    >
      <div class="blob"></div>
      <div class="grid-overlay"></div>
    </div>

    <header
      class="sticky top-0 z-50 border-b border-black-500/10 bg-white/80 backdrop-blur"
    >
      <div class="mx-auto max-w-[1120px] px-4">
        <nav class="flex items-center justify-between gap-4 py-4">
          <h1 class="flex items-center text-black-500">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 640 640"
              class="block h-10 w-10 md:hidden"
              fill="currentColor"
            >
              <path
                d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z"
              />
            </svg>
            <span class="hidden text-2xl font-semibold md:inline"
              >Khrzmi Code</span
            >
          </h1>
          <div class="relative mx-5">
            <input
              type="text"
              placeholder="Search..."
              class="h-12 w-full rounded-2xl border border-[#ece5d8] bg-white/80 pl-12 pr-4 text-base text-gray-700 placeholder:text-gray-400 outline-none transition-colors focus:border-[#d8c9b7] focus:bg-white"
            />
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-[#b8ad9c]"
                viewBox="0 0 640 640"
                fill="currentColor"
              >
                <path
                  d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"
                />
              </svg>
            </div>
          </div>
          <div class="rounded-xl bg-black-500">
            <a
              href="#"
              class="flex items-center gap-2 px-5 py-3 text-base leading-none text-gray-100"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                class="h-4 w-4"
                fill="currentColor"
              >
                <path
                  d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"
                />
              </svg>
              <span>Login</span>
            </a>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <section class="mx-auto max-w-[1120px] px-4 py-8">
        <nav class="text-sm text-gray-500">
          <ol class="flex flex-wrap items-center gap-2">
            <li>
              <a
                href="index.html"
                class="flex items-center gap-1 text-gray-600 transition hover:text-black-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-4 w-4"
                  fill="currentColor"
                >
                  <path
                    d="M12 3.1 2.6 10.6c-.5.4-.6 1.1-.2 1.6.2.3.6.5 1 .5H6v5.3c0 .9.7 1.6 1.6 1.6H10v-4.3c0-.3.2-.5.5-.5h3c.3 0 .5.2.5.5v4.3h2.4c.9 0 1.6-.7 1.6-1.6V12.7h2.5c.6 0 1.1-.5 1.1-1.1 0-.3-.1-.6-.4-.8L12 3.1Z"
                  />
                </svg>
                Beranda
              </a>
            </li>
            <li class="text-gray-400">/</li>
            <li>
              <a href="#" class="transition hover:text-black-500"
                >Laravel Project</a
              >
            </li>
            <li class="text-gray-400">/</li>
            <li
              class="max-w-[200px] truncate text-black-500 font-medium sm:max-w-none"
            >
              Sistem Informasi Manajemen SEMA FT
            </li>
          </ol>
        </nav>

        <div
          class="mt-6 grid gap-8 lg:grid-cols-[minmax(0,580px)_minmax(0,1fr)]"
        >
          <div class="space-y-4">
            <div class="relative overflow-hidden rounded-3xl">
              <img
                id="productPreviewImage"
                src="assets/produk/semaft/home.png"
                alt="Sistem Informasi Manajemen SEMA FT"
                class="h-[420px] w-full object-cover"
              />
              <span
                id="productPreviewCounter"
                class="absolute right-6 top-6 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white"
                >1 / 4</span
              >
            </div>
            <div class="flex items-center gap-3">
              <button
                type="button"
                data-carousel="prev"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition hover:text-black-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-5 w-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                >
                  <path
                    d="M15 6L9 12L15 18"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </button>
              <div
                class="flex flex-1 justify-center gap-3 overflow-x-auto pb-2"
              >
                <button
                  class="thumbnail-button rounded-2xl border-2 border-black-500 p-1 transition hover:border-black-500/80"
                  data-preview-src="assets/produk/semaft/home.png"
                  data-active
                >
                  <img
                    src="assets/produk/semaft/home.png"
                    alt="Beranda"
                    class="h-16 w-24 rounded-xl object-cover"
                  />
                </button>
                <button
                  class="thumbnail-button rounded-2xl border-2 border-transparent p-1 transition hover:border-black-500/40"
                  data-preview-src="assets/produk/semaft/hero.png"
                >
                  <img
                    src="assets/produk/semaft/hero.png"
                    alt="Halaman Hero"
                    class="h-16 w-24 rounded-xl object-cover"
                  />
                </button>
                <button
                  class="thumbnail-button rounded-2xl border-2 border-transparent p-1 transition hover:border-black-500/40"
                  data-preview-src="assets/produk/semaft/kabinet.png"
                >
                  <img
                    src="assets/produk/semaft/kabinet.png"
                    alt="Halaman Kabinet"
                    class="h-16 w-24 rounded-xl object-cover"
                  />
                </button>
                <button
                  class="thumbnail-button rounded-2xl border-2 border-transparent p-1 transition hover:border-black-500/40"
                  data-preview-src="assets/produk/semaft/visimisi.png"
                >
                  <img
                    src="assets/produk/semaft/visimisi.png"
                    alt="Halaman Visi Misi"
                    class="h-16 w-24 rounded-xl object-cover"
                  />
                </button>
              </div>
              <button
                type="button"
                data-carousel="next"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition hover:text-black-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-5 w-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                >
                  <path
                    d="M9 6L15 12L9 18"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </button>
            </div>
          </div>

          <div class="space-y-6">
            <div class="space-y-3">
              <div
                class="flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-gray-500"
              >
                <span>Laravel Project</span>
              </div>
              <div class="flex flex-wrap items-center gap-3">
                <h1 class="text-3xl font-semibold text-black-500 md:text-4xl">
                  Sistem Informasi Manajemen SEMA FT
                </h1>
                <span
                  class="rounded-full bg-black-500 px-3 py-1 text-xs font-medium uppercase tracking-wide text-white"
                  >Best Seller</span
                >
              </div>
              <p class="text-sm text-gray-600">by Khrzmi Code Studio</p>
            </div>

            <div class="text-3xl font-semibold text-black-500">
              Rp 2.000.000
            </div>

            <div class="space-y-5 border-t border-gray-200 pt-6">
              <div class="grid gap-4 text-sm text-gray-600 sm:grid-cols-2">
                <div class="space-y-1">
                  <p class="font-semibold text-black-500">Kategori</p>
                  <p>Laravel Project</p>
                </div>
                <div class="space-y-1">
                  <p class="font-semibold text-black-500">Tech Stack</p>
                  <p>Laravel, Blade, Vite, MySQL</p>
                </div>
                <div class="space-y-1">
                  <p class="font-semibold text-black-500">Update Terakhir</p>
                  <p>21 Agustus 2025</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 sm:flex-row">
                <button
                  class="w-full rounded-xl bg-black-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-black-500/90"
                >
                  Beli Sekarang
                </button>
              </div>
            </div>

            <div class="space-y-4 border-t border-gray-200 pt-6">
              <h2 class="text-lg font-semibold text-black-500">
                Deskripsi Produk
              </h2>
              <dl class="gap-4 text-sm text-gray-600">
                <div class="space-y-1">
                  <h2 class="text-black-500">
                    Sistem Informasi Manajemen SEMA FT
                  </h2>
                  <p>
                    Website Profil dan Sistem Manajemen Konten untuk Senat
                    Mahasiswa Fakultas Teknik (SEMA FT).
                  </p>
                  <p>
                    Aplikasi ini dibangun untuk berfungsi sebagai pusat
                    informasi publik sekaligus sebagai alat manajemen internal
                    untuk kepengurusan organisasi.
                  </p>
                </div>
              </dl>
            </div>

            <div class="space-y-4 border-t border-gray-200 pt-6">
              <h2 class="text-lg font-semibold text-black-500">
                Apa yang Anda Dapatkan
              </h2>
              <ul class="grid gap-3 text-sm text-gray-600">
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="h-3.5 w-3.5"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        d="M5 12l5 5L20 7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                  <span
                    >Source code full project dengan struktur modular dan
                    reusable components.</span
                  >
                </li>
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="h-3.5 w-3.5"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        d="M5 12l5 5L20 7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                  <span
                    >Dokumentasi setup dan panduan deployment langkah demi
                    langkah.</span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script>
      const previewImageEl = document.getElementById("productPreviewImage");
      const previewCounterEl = document.getElementById("productPreviewCounter");
      const thumbnailButtons = Array.from(
        document.querySelectorAll(".thumbnail-button")
      );
      const totalSlides = thumbnailButtons.length;
      let activeSlideIndex = thumbnailButtons.findIndex((btn) =>
        btn.hasAttribute("data-active")
      );

      if (activeSlideIndex < 0) {
        activeSlideIndex = 0;
      }

      function setSlide(nextIndex) {
        if (!previewImageEl || totalSlides === 0) return;

        let newIndex = nextIndex;
        if (newIndex < 0) newIndex = totalSlides - 1;
        if (newIndex >= totalSlides) newIndex = 0;

        const targetBtn = thumbnailButtons[newIndex];
        const newSrc = targetBtn?.getAttribute("data-preview-src");

        if (newSrc) {
          previewImageEl.src = newSrc;
        }

        thumbnailButtons.forEach((btn, idx) => {
          btn.classList.toggle("border-black-500", idx === newIndex);
          btn.classList.toggle("border-transparent", idx !== newIndex);
          if (idx === newIndex) {
            btn.setAttribute("data-active", "");
          } else {
            btn.removeAttribute("data-active");
          }
        });

        if (previewCounterEl) {
          previewCounterEl.textContent = `${newIndex + 1} / ${totalSlides}`;
        }

        activeSlideIndex = newIndex;
      }

      const prevButton = document.querySelector("[data-carousel='prev']");
      const nextButton = document.querySelector("[data-carousel='next']");

      prevButton?.addEventListener("click", () =>
        setSlide(activeSlideIndex - 1)
      );
      nextButton?.addEventListener("click", () =>
        setSlide(activeSlideIndex + 1)
      );

      thumbnailButtons.forEach((btn, idx) => {
        btn.addEventListener("click", () => setSlide(idx));
      });

      setSlide(activeSlideIndex);
    </script>
  </body>
</html>
