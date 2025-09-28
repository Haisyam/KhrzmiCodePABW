<div
  id="sidebarOverlay"
  class="fixed inset-0 z-30 bg-black/40 opacity-0 transition-opacity duration-200 pointer-events-none lg:hidden"
  aria-hidden="true"></div>

<aside
  id="sidebar"
  class="fixed inset-y-0 left-0 z-40 flex w-72 -translate-x-full transform flex-col bg-white/95 shadow-xl transition-transform duration-200 ease-in-out lg:static lg:w-80 lg:translate-x-0 lg:bg-white/80 lg:shadow-none"
  aria-label="Navigasi produk">
  <div class="flex items-center justify-between border-b border-black-500/10 px-6 py-5">
    <div class="flex items-center gap-3">
      <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-black-500 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-7 w-7" fill="currentColor">
          <path
            d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z" />
        </svg>
      </div>
      <div>
        <p class="text-xs font-semibold uppercase tracking-[0.3em]">Navigasi</p>
        <h2 class="text-lg font-semibold text-black-500">Produk</h2>
      </div>
    </div>
    <button
      id="closeSidebarButton"
      type="button"
      class="inline-flex items-center justify-center rounded-xl border border-black-500/10 bg-white px-2 py-1 text-black-500 transition hover:border-black-500/20 lg:hidden"
      aria-label="Tutup menu navigasi">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
      </svg>
    </button>
  </div>

  <nav class="px-6 py-6">
    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-black-500/60">
      Menu
    </p>
    <ul class="mt-4 space-y-2">
      <li>
        <a
          href="#produk"
          class="flex items-center gap-3 rounded-2xl bg-black-500 px-4 py-3 text-sm font-medium text-white shadow-sm transition hover:bg-black-500/90">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
            <path d="M4 5a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v14l-6-3-6 3V5z" />
          </svg>
          <span>Produk</span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="mt-auto border-t border-black-500/10 px-6 py-6">
    <a
      href="/logout"
      class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-black-500 transition hover:bg-black-500/5">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
        <path
          d="M15 3h-2a3 3 0 0 0-3 3v3h3V6h2v12h-2v-3h-3v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zM9 11H4v2h5l-1.5 1.5 1.06 1.06L11.12 12l-2.56-2.56L7.5 10.5 9 12z" />
      </svg>
      <span>Keluar</span>
    </a>
  </div>
</aside>