<?php
include "../db.php";
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id <= 0) {
  echo "<script>alert('Produk tidak valid.'); window.location.href='admin.php';</script>";
  exit();
}

$produk = null;
$result = $conn->query("SELECT image_path FROM produk WHERE id = $id LIMIT 1");
if ($result) {
  $produk = $result->fetch_assoc();
  $result->free();
}

if (!$produk) {
  echo "<script>alert('Produk tidak ditemukan.'); window.location.href='admin.php';</script>";
  exit();
}

$sql = "DELETE FROM produk WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  if (!empty($produk['image_path'])) {
    $file = '../' . $produk['image_path'];
    if (file_exists($file)) {
      @unlink($file);
    }
  }
  echo "<script>alert('Produk berhasil dihapus.'); window.location.href='admin.php';</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
