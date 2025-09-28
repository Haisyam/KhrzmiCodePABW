<?php
include "../db.php";
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

$produkId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($produkId <= 0) {
  echo "<script>alert('Produk tidak valid.'); window.location.href='admin.php';</script>";
  exit();
}

$produk = null;
$result = $conn->query("SELECT * FROM produk WHERE id = $produkId LIMIT 1");
if ($result) {
  $produk = $result->fetch_assoc();
  $result->free();
}

if (!$produk) {
  echo "<script>alert('Produk tidak ditemukan.'); window.location.href='admin.php';</script>";
  exit();
}

if (isset($_POST['submit'])) {
  $title = $_POST['title'] ?? $produk['title'];
  $subtitle = $_POST['subtitle'] ?? $produk['subtitle'];
  $tech = $_POST['tech'] ?? $produk['tech'];
  $harga = $_POST['harga'] ?? $produk['harga'];
  $kategori = $_POST['kategori'] ?? $produk['kategori'];
  $label = $_POST['label'] ?? $produk['label'];

  $imagePath = $produk['image_path'];

  if (!empty($_FILES['image']['name'])) {
    $target_dir = '../assets/produk/uploads/';
    if (!is_dir($target_dir)) {
      mkdir($target_dir, 0755, true);
    }
    $image = $_FILES['image']['name'];
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      $newPath = 'assets/produk/uploads/' . basename($image);

      if (!empty($produk['image_path'])) {
        $oldFile = '../' . $produk['image_path'];
        if (file_exists($oldFile)) {
          @unlink($oldFile);
        }
      }

      $imagePath = $newPath;
    } else {
      echo "Error uploading file.";
    }
  }

  $sql = "UPDATE produk SET title='$title', subtitle='$subtitle', tech='$tech', harga='$harga', kategori='$kategori', label='$label', image_path='$imagePath' WHERE id=$produkId";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Produk berhasil diperbarui.'); window.location.href='admin.php';</script>";
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $produk['title'] = $title;
  $produk['subtitle'] = $subtitle;
  $produk['tech'] = $tech;
  $produk['harga'] = $harga;
  $produk['kategori'] = $kategori;
  $produk['label'] = $label;
  $produk['image_path'] = $imagePath;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Produk</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-white min-h-screen">
  <nav class="flex justify-center pt-6">
    <div class="flex items-center gap-4 rounded-full border border-white/20 bg-white/5 px-6 py-2 backdrop-blur">
      <a href="admin.php" class="text-sm font-medium hover:text-white/70">Kembali</a>
      <a href="logout.php" class="text-sm font-semibold text-emerald-400 hover:text-emerald-300">Logout</a>
    </div>
  </nav>

  <main class="mx-auto mt-10 w-full max-w-3xl rounded-3xl border border-white/10 bg-white/5 p-8 shadow-xl backdrop-blur">
    <h1 class="text-center text-2xl font-semibold text-white">Edit Produk</h1>

    <?php if (!empty($produk['image_path'])): ?>
      <div class="mt-8 flex justify-center">
        <img src="<?php echo '../' . htmlspecialchars($produk['image_path'], ENT_QUOTES, 'UTF-8'); ?>" alt="Pratinjau"
          class="h-32 w-32 rounded-2xl border border-white/20 object-cover" />
      </div>
    <?php endif; ?>

    <form action="editProduk.php?id=<?php echo $produkId; ?>" method="POST" enctype="multipart/form-data" class="mt-8 grid gap-5">
      <label class="grid gap-2 text-sm">
        <span class="font-medium text-white/80">Judul Produk</span>
        <input type="text" name="title" value="<?php echo htmlspecialchars($produk['title'], ENT_QUOTES, 'UTF-8'); ?>"
          class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" required />
      </label>

      <label class="grid gap-2 text-sm">
        <span class="font-medium text-white/80">Sub Title</span>
        <textarea name="subtitle" rows="3"
          class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" required><?php echo htmlspecialchars($produk['subtitle'], ENT_QUOTES, 'UTF-8'); ?></textarea>
      </label>

      <label class="grid gap-2 text-sm">
        <span class="font-medium text-white/80">Tech Stack</span>
        <textarea name="tech" rows="2"
          class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" required><?php echo htmlspecialchars($produk['tech'], ENT_QUOTES, 'UTF-8'); ?></textarea>
      </label>

      <div class="grid gap-4 md:grid-cols-2">
        <label class="grid gap-2 text-sm">
          <span class="font-medium text-white/80">Harga</span>
          <input type="text" name="harga" value="<?php echo htmlspecialchars($produk['harga'], ENT_QUOTES, 'UTF-8'); ?>"
            class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" required />
        </label>

        <label class="grid gap-2 text-sm">
          <span class="font-medium text-white/80">Kategori</span>
          <input type="text" name="kategori" value="<?php echo htmlspecialchars($produk['kategori'], ENT_QUOTES, 'UTF-8'); ?>"
            class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" required />
        </label>
      </div>

      <label class="grid gap-2 text-sm">
        <span class="font-medium text-white/80">Label (opsional)</span>
        <input type="text" name="label" value="<?php echo htmlspecialchars($produk['label'], ENT_QUOTES, 'UTF-8'); ?>"
          class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" />
      </label>

      <label class="grid gap-2 text-sm">
        <span class="font-medium text-white/80">Ganti Gambar</span>
        <input type="file" name="image" accept="image/*"
          class="rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm text-white focus:border-white/40 focus:outline-none" />
        <span class="text-xs text-white/50">Biarkan kosong bila tidak ingin mengubah gambar.</span>
      </label>

      <div class="flex justify-between gap-3 pt-4">
        <a href="admin.php" class="inline-flex items-center justify-center rounded-2xl border border-white/20 px-5 py-2 text-sm font-medium text-white hover:bg-white/10">
          Batal
        </a>
        <button type="submit" name="submit"
          class="inline-flex items-center justify-center rounded-2xl bg-emerald-500 px-6 py-2 text-sm font-semibold text-black transition hover:bg-emerald-400">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </main>
</body>

</html>
