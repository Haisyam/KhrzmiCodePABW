<section class="mx-auto flex w-full max-w-4xl flex-col gap-6 px-4 py-6 lg:px-8 lg:py-10">
  <header class="flex flex-wrap items-center justify-between gap-4">
    <div>
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-black-500/60">
        Tambah Produk
      </p>
      <h2 class="text-2xl font-semibold text-black-500">
        Buat entri produk baru
      </h2>
      <p class="mt-1 text-sm text-black-500/70">
        Lengkapi informasi produk agar langsung tampil di katalog KhrzmiCode.
      </p>
    </div>
    <a
      href="admin.php"
      class="inline-flex items-center gap-2 rounded-2xl border border-black-500/15 px-4 py-2 text-xs font-medium text-black-500 transition hover:border-black-500/30"
    >
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor">
        <path d="m15.41 7.41-1.41-1.41L8.59 11l5.41 5.41 1.41-1.41L11.41 12z" />
      </svg>
      Kembali
    </a>
  </header>

  <form
    method="POST"
    enctype="multipart/form-data"
    class="grid gap-6 rounded-3xl border border-black-500/10 bg-white/80 p-6 shadow-sm backdrop-blur lg:p-8"
  >
    <div class="grid gap-2">
      <label for="produkTitle" class="text-sm font-medium text-black-500">Title Produk</label>
      <input
        type="text"
        id="produkTitle"
        name="title"
        autocomplete="off"
        placeholder="Misal: KhrzmiCode Commerce Suite"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
        required
      />
    </div>

    <div class="grid gap-2">
      <label for="produkSubtitle" class="text-sm font-medium text-black-500">Sub Title</label>
      <textarea
        id="produkSubtitle"
        name="subtitle"
        rows="3"
        placeholder="Deskripsi singkat produk"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
        required
      ></textarea>
    </div>

    <div class="grid gap-2">
      <label for="produkTech" class="text-sm font-medium text-black-500">Tech Stack</label>
      <textarea
        id="produkTech"
        name="tech"
        rows="2"
        placeholder="Pisahkan teknologi dengan koma, contoh: Laravel, Tailwind, MySQL"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
        required
      ></textarea>
    </div>

    <div class="grid gap-4 sm:grid-cols-2">
      <div class="grid gap-2">
        <label for="produkHarga" class="text-sm font-medium text-black-500">Harga</label>
        <input
          type="text"
          id="produkHarga"
          name="harga"
          placeholder="Rp 0"
          class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
          required
        />
      </div>

      <div class="grid gap-2">
        <label for="produkKategori" class="text-sm font-medium text-black-500">Kategori</label>
        <input
          type="text"
          id="produkKategori"
          name="kategori"
          placeholder="Misal: E-Commerce"
          class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
          required
        />
      </div>
    </div>

    <div class="grid gap-2">
      <label for="produkLabel" class="text-sm font-medium text-black-500">Label Produk (opsional)</label>
      <input
        type="text"
        id="produkLabel"
        name="label"
        placeholder="Misal: Best Seller"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
      />
    </div>

    <div class="grid gap-2">
      <label for="produkGambar" class="text-sm font-medium text-black-500">Gambar Produk</label>
      <div
        class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-dashed border-black-500/20 bg-black-500/5 px-4 py-6 text-center"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          class="h-10 w-10 text-black-500/50"
          fill="currentColor"
        >
          <path d="M19 5v14H5V5h14zm0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 13-2.5-3.01L7 17h10l-3.5-4.51zM13 8h-2v3h2V8z" />
        </svg>
        <label
          for="produkGambar"
          class="inline-flex cursor-pointer items-center gap-2 rounded-2xl bg-black-500 px-4 py-2 text-xs font-semibold text-white transition hover:bg-black-500/90"
        >
          <span>Pilih Gambar</span>
          <input type="file" id="produkGambar" name="image" accept="image/*" class="hidden" required />
        </label>
        <p class="text-xs text-black-500/60">Format PNG atau JPG, maksimal 2MB.</p>
      </div>
    </div>

    <div class="flex flex-wrap items-center justify-end gap-3 border-t border-black-500/10 pt-5">
      <a
        href="admin.php"
        class="inline-flex items-center gap-2 rounded-2xl border border-black-500/15 px-4 py-2 text-sm font-medium text-black-500 transition hover:border-black-500/30"
      >
        Batal
      </a>
      <button
        type="submit"
        name="submit"
        class="inline-flex items-center gap-2 rounded-2xl bg-black-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-black-500/90"
      >
        Simpan Produk
      </button>
    </div>
  </form>
</section>
