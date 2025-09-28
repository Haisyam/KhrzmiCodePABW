<?php
include "../db.php";
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

if (isset($_POST['submit'])) {
  $title = $_POST['title'] ?? '';
  $subtitle = $_POST['subtitle'] ?? '';
  $tech = $_POST['tech'] ?? '';
  $harga = $_POST['harga'] ?? '';
  $kategori = $_POST['kategori'] ?? '';
  $label = $_POST['label'] ?? '';

  $image = $_FILES['image']['name'] ?? '';
  $target_dir = '../assets/produk/uploads/';
  if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
  }
  $target_file = $target_dir . basename($image);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $imagePath = 'assets/produk/uploads/' . basename($image);
    $sql = "INSERT INTO produk (title, subtitle, tech, harga, kategori, label, image_path) VALUES ('$title', '$subtitle', '$tech', '$harga', '$kategori', '$label', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Produk berhasil ditambahkan.'); window.location.href='admin.php';</script>";
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Error uploading file.";
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Produk - Khrzmi Code</title>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="styles.css" />

  <style type="text/tailwindcss">
    @theme {
        --color-black-500: #101828;
        --color-white: #fdfbf7;
      }
    </style>
</head>

<body class="min-h-screen bg-white text-gray-900 antialiased">
  <div class="pointer-events-none fixed inset-0 -z-10 bg-ornament" aria-hidden="true">
    <div class="blob"></div>
    <div class="grid-overlay"></div>
  </div>

  <div class="flex min-h-screen flex-col">
    <header
      class="flex items-center justify-between border-b border-black-500/10 bg-white/80 px-4 py-3 shadow-sm backdrop-blur lg:hidden">
      <div class="flex items-center gap-3">
        <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-black-500 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-6 w-6" fill="currentColor">
            <path
              d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z" />
          </svg>
        </div>
        <div>
          <p class="text-[11px] font-semibold uppercase tracking-[0.3em] text-black-500/70">
            Dashboard
          </p>
          <h1 class="text-base font-semibold text-black-500">Khrzmi Code</h1>
        </div>
      </div>
      <button
        id="openSidebarButton"
        type="button"
        class="inline-flex items-center justify-center rounded-xl border border-black-500/10 bg-white px-3 py-2 text-black-500 transition hover:border-black-500/20"
        aria-label="Buka menu navigasi">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
          <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        </svg>
      </button>
    </header>

    <div class="flex flex-1">
      <?php include_once '../components/navside.php'; ?>

      <main class="w-full flex-1 overflow-y-auto bg-white/60 backdrop-blur">
        <?php include '../components/tambahProduk.php'; ?>
      </main>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openButton = document.getElementById('openSidebarButton');
    const closeButton = document.getElementById('closeSidebarButton');

    const openSidebar = () => {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('opacity-0', 'pointer-events-none');
      overlay.classList.add('opacity-100');
      document.body.classList.add('overflow-hidden');
    };

    const closeSidebar = () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('opacity-0', 'pointer-events-none');
      overlay.classList.remove('opacity-100');
      document.body.classList.remove('overflow-hidden');
    };

    openButton?.addEventListener('click', openSidebar);
    closeButton?.addEventListener('click', closeSidebar);
    overlay?.addEventListener('click', closeSidebar);

    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        overlay.classList.remove('opacity-100');
        document.body.classList.remove('overflow-hidden');
      } else {
        sidebar.classList.add('-translate-x-full');
      }
    });
  </script>
</body>

</html>
