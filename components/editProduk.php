<?php
$produk = $produk ?? [];
$errorMessage = $errorMessage ?? '';
$successMessage = $successMessage ?? '';
$produkId = (int)($produk['id'] ?? 0);
?>

<section class="mx-auto flex w-full max-w-4xl flex-col gap-6 px-4 py-6 lg:px-8 lg:py-10">
  <header class="flex flex-wrap items-center justify-between gap-4">
    <div>
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-black-500/60">
        Edit Produk
      </p>
      <h2 class="text-2xl font-semibold text-black-500">
        Perbarui detail produk
      </h2>
      <p class="mt-1 text-sm text-black-500/70">
        Sesuaikan informasi produk agar tetap relevan di katalog KhrzmiCode.
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

  <?php if ($errorMessage !== ''): ?>
    <div class="rounded-2xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-sm text-red-600">
      <?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?>
    </div>
  <?php endif; ?>

  <?php if ($successMessage !== ''): ?>
    <div class="rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-600">
      <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
    </div>
  <?php endif; ?>

  <form
    method="POST"
    enctype="multipart/form-data"
    class="grid gap-6 rounded-3xl border border-black-500/10 bg-white/80 p-6 shadow-sm backdrop-blur lg:p-8"
  >
    <input type="hidden" name="id" value="<?php echo $produkId; ?>" />

    <div class="grid gap-2">
      <label for="produkTitle" class="text-sm font-medium text-black-500">Title Produk</label>
      <input
        type="text"
        id="produkTitle"
        name="title"
        value="<?php echo htmlspecialchars((string)($produk['title'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
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
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
        required
      ><?php echo htmlspecialchars((string)($produk['subtitle'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="grid gap-2">
      <label for="produkTech" class="text-sm font-medium text-black-500">Tech Stack</label>
      <textarea
        id="produkTech"
        name="tech"
        rows="2"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
        required
      ><?php echo htmlspecialchars((string)($produk['tech'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="grid gap-4 sm:grid-cols-2">
      <div class="grid gap-2">
        <label for="produkHarga" class="text-sm font-medium text-black-500">Harga</label>
        <input
          type="text"
          id="produkHarga"
          name="harga"
          value="<?php echo htmlspecialchars((string)($produk['harga'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
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
          value="<?php echo htmlspecialchars((string)($produk['kategori'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
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
        value="<?php echo htmlspecialchars((string)($produk['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
        class="w-full rounded-2xl border border-black-500/15 bg-white/80 px-4 py-2.5 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/15"
      />
    </div>

    <div class="grid gap-2">
      <label class="text-sm font-medium text-black-500">Gambar Produk</label>
      <div
        class="flex flex-col items-center justify-center gap-4 rounded-2xl border border-dashed border-black-500/20 bg-black-500/5 px-4 py-6 text-center"
      >
        <?php $imagePath = (string)($produk['image_path'] ?? ''); ?>
        <img
          src="<?php echo htmlspecialchars($imagePath !== '' ? '../' . ltrim($imagePath, '/') : 'https://via.placeholder.com/120x120?text=No+Image', ENT_QUOTES, 'UTF-8'); ?>"
          alt="Pratinjau produk"
          class="h-24 w-24 rounded-2xl object-cover shadow-sm"
        />
        <label
          for="produkGambar"
          class="inline-flex cursor-pointer items-center gap-2 rounded-2xl bg-black-500 px-4 py-2 text-xs font-semibold text-white transition hover:bg-black-500/90"
        >
          <span>Ganti Gambar</span>
          <input type="file" id="produkGambar" name="image" accept="image/*" class="hidden" />
        </label>
        <p class="text-xs text-black-500/60">Biarkan kosong jika tidak ingin mengubah gambar.</p>
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
        Simpan Perubahan
      </button>
    </div>
  </form>
</section>
