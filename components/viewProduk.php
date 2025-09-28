<?php
$produkList = $produkList ?? [];

$formatHarga = static function ($value) {
    if ($value === null || $value === '') {
        return '-';
    }

    if (is_numeric($value)) {
        return 'Rp ' . number_format((float) $value, 0, ',', '.');
    }

    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>

<section class="mx-auto flex w-full max-w-6xl flex-col gap-6 px-4 py-6 lg:px-8 lg:py-8">
  <header class="flex flex-wrap items-center justify-between gap-4">
    <div>
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-black-500/60">
        Manajemen Produk
      </p>
      <h1 class="text-2xl font-semibold text-black-500">Produk KhrzmiCode</h1>
      <p class="mt-1 text-sm text-black-500/70">
        Kelola katalog produk dan pantau teknologi yang digunakan.
      </p>
    </div>
    <div class="flex flex-wrap items-center gap-2">
      <a
        href="tambahProduk.php"
        class="inline-flex items-center gap-2 rounded-2xl bg-black-500 px-5 py-2.5 text-sm font-medium text-white shadow-sm transition hover:bg-black-500/90"
      >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor">
          <path d="M12 5v14m7-7H5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        Tambah Produk
      </a>
    </div>
  </header>

  <div class="flex flex-col gap-4 rounded-3xl border border-black-500/10 bg-white/80 p-4 shadow-sm backdrop-blur lg:p-6">
    <div class="flex flex-wrap items-center justify-between gap-3">
      <div class="relative w-full max-w-xs">
        <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-black-500/40">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor">
            <path d="M10.5 3a7.5 7.5 0 0 1 6 12.08l4.21 4.21-1.42 1.42-4.21-4.21A7.5 7.5 0 1 1 10.5 3zm0 2a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
          </svg>
        </span>
        <input
          type="search"
          placeholder="Cari produk..."
          class="w-full rounded-2xl border border-black-500/15 bg-white/70 py-2 pl-9 pr-4 text-sm text-black-500 transition placeholder:text-black-500/40 focus:border-black-500/30 focus:outline-none focus:ring-2 focus:ring-black-500/10" />
      </div>

      <div class="text-xs text-black-500/60">
        Total produk: <span class="font-medium text-black-500"><?php echo count($produkList); ?></span>
      </div>
    </div>

    <div class="overflow-hidden rounded-2xl border border-black-500/10">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-black-500/10">
          <thead class="bg-black-500/5">
            <tr class="text-left text-xs font-semibold uppercase tracking-[0.18em] text-black-500/60">
              <th scope="col" class="px-6 py-4">Title</th>
              <th scope="col" class="px-6 py-4">Sub Title</th>
              <th scope="col" class="px-6 py-4">Tech Stack</th>
              <th scope="col" class="px-6 py-4">Harga</th>
              <th scope="col" class="px-6 py-4">Kategori</th>
              <th scope="col" class="px-6 py-4">Gambar</th>
              <th scope="col" class="px-6 py-4 text-right">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-black-500/10 text-sm text-black-500">
            <?php if (empty($produkList)): ?>
              <tr>
                <td colspan="7" class="px-6 py-10 text-center text-sm text-black-500/60">
                  Belum ada produk yang ditambahkan.
                </td>
              </tr>
            <?php else: ?>
              <?php foreach ($produkList as $produk): ?>
                <?php
                  $id = (int)($produk['id'] ?? 0);
                  $title = htmlspecialchars((string)($produk['title'] ?? ''), ENT_QUOTES, 'UTF-8');
                  $subtitle = htmlspecialchars((string)($produk['subtitle'] ?? ''), ENT_QUOTES, 'UTF-8');
                  $kategori = htmlspecialchars((string)($produk['kategori'] ?? ''), ENT_QUOTES, 'UTF-8');
                  $label = htmlspecialchars((string)($produk['label'] ?? ''), ENT_QUOTES, 'UTF-8');
                  $imagePath = (string)($produk['image_path'] ?? '');
                  $imageSrc = $imagePath !== '' ? '../' . ltrim($imagePath, '/') : 'https://via.placeholder.com/80x80?text=No+Image';
                  $techRaw = (string)($produk['tech'] ?? '');
                  $techItems = array_filter(array_map('trim', explode(',', $techRaw)));
                ?>
                <tr class="transition hover:bg-black-500/5">
                  <td class="px-6 py-5 font-semibold">
                    <?php echo $title; ?>
                    <?php if ($label !== ''): ?>
                      <span class="ml-2 rounded-full bg-black-500/10 px-2 py-0.5 text-[11px] font-semibold uppercase tracking-wide text-black-500/70">
                        <?php echo $label; ?>
                      </span>
                    <?php endif; ?>
                  </td>
                  <td class="px-6 py-5 text-black-500/80">
                    <?php echo $subtitle; ?>
                  </td>
                  <td class="px-6 py-5">
                    <div class="flex flex-wrap gap-2">
                      <?php if (empty($techItems)): ?>
                        <span class="text-xs text-black-500/60">-</span>
                      <?php else: ?>
                        <?php foreach ($techItems as $tech): ?>
                          <span class="rounded-full bg-black-500/10 px-3 py-1 text-xs font-medium">
                            <?php echo htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?>
                          </span>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  </td>
                  <td class="px-6 py-5 font-semibold text-black-500">
                    <?php echo $formatHarga($produk['harga'] ?? ''); ?>
                  </td>
                  <td class="px-6 py-5 text-black-500/80">
                    <?php echo $kategori !== '' ? $kategori : '-'; ?>
                  </td>
                  <td class="px-6 py-5">
                    <div class="flex items-center gap-3">
                      <img
                        src="<?php echo htmlspecialchars($imageSrc, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="<?php echo $title; ?>"
                        class="h-12 w-12 rounded-xl object-cover" />
                      <?php if ($imagePath !== ''): ?>
                        <span class="text-xs text-black-500/60"><?php echo htmlspecialchars(basename($imagePath), ENT_QUOTES, 'UTF-8'); ?></span>
                      <?php else: ?>
                        <span class="text-xs text-black-500/60">Tidak ada gambar</span>
                      <?php endif; ?>
                    </div>
                  </td>
                  <td class="px-6 py-5">
                    <div class="flex justify-end gap-2">
                      <a
                        href="editProduk.php?id=<?php echo $id; ?>"
                        class="inline-flex items-center gap-1 rounded-xl border border-black-500/20 px-3 py-2 text-xs font-medium text-black-500 transition hover:border-black-500/40"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          class="h-4 w-4"
                          fill="currentColor">
                          <path
                            d="M5 21h14a1 1 0 0 0 1-1v-9H4v9a1 1 0 0 0 1 1zm14-16h-3.5l-1-1h-4l-1 1H6a1 1 0 0 0-1 1v2h16V6a1 1 0 0 0-1-1z" />
                        </svg>
                        Edit
                      </a>
                      <a
                        href="deleteProduk.php?id=<?php echo $id; ?>"
                        class="inline-flex items-center gap-1 rounded-xl bg-red-500/10 px-3 py-2 text-xs font-medium text-red-600 transition hover:bg-red-500/15"
                        onclick="return confirm('Yakin ingin menghapus produk ini?');"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          class="h-4 w-4"
                          fill="currentColor">
                          <path
                            d="M7 21a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V7H7zm12-15h-3.5l-1-1h-4l-1 1H6v2h14z" />
                        </svg>
                        Delete
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
</section>
