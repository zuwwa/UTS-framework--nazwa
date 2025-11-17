<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'CV - Nazwa Akmalia Padla') ?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #ff7613;
      --text-color: #222;
      --bg-color: #ffffff;
      --card-bg: #ffffff;
      --border-color: #e5e5e5;
      --muted: #555;
      --light-text: #222;
    }

    .dark-theme {
      --primary-color: #6c8cff;
      --text-color: #f1f1f1;
      --bg-color: #121212;
      --card-bg: #1e1e1e;
      --border-color: #333;
      --muted: #aaa;
      --light-text: #fff;
    }

    body {
      background: var(--bg-color);
      color: var(--text-color);
      font-family: 'Inter', sans-serif;
      transition: 0.3s ease;
    }

    /* Header */
    header {
      background: var(--card-bg);
      border-bottom: 1px solid var(--border-color);
      padding: 1rem 2rem;
      position: sticky;
      top: 0;
      z-index: 10000 !important;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--primary-color);
      text-decoration: none;
    }

    nav a {
      text-decoration: none;
      color: var(--text-color);
      margin-left: 1.2rem;
      font-size: 1.1rem;
      font-weight: 500;
    }

    nav a:hover {
      color: var(--primary-color);
    }

    .theme-btn {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.6rem;
      color: var(--text-color);
      margin-left: 1.5rem;
      padding: 0;
    }
  </style>
</head>

<body>

<header>
  <a href="<?= base_url('/') ?>" class="logo">CV Nazwa</a>

  <nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('/about#pendidikan') ?>">Pendidikan</a>
    <a href="<?= base_url('/about#pengalaman') ?>">Pengalaman</a>
    <a href="<?= base_url('/about#keahlian') ?>">Keahlian</a>
    <a href="<?= base_url('/about#portofolio') ?>">Portofolio</a>

    <button id="themeToggle" class="theme-btn" title="Ganti Tema">
      <i data-feather="moon"></i>
    </button>
  </nav>
</header>

<script>
  feather.replace();

  const root = document.documentElement;
  const themeBtn = document.getElementById("themeToggle");

  // Ambil preferensi sebelumnya
  let dark = localStorage.getItem("theme") === "dark";
  if (dark) {
    root.classList.add("dark-theme");
    themeBtn.innerHTML = feather.icons.sun.toSvg();
  }

  function toggleTheme() {
    root.classList.toggle("dark-theme");
    const isDark = root.classList.contains("dark-theme");

    themeBtn.innerHTML = isDark
      ? feather.icons.sun.toSvg()
      : feather.icons.moon.toSvg();

    localStorage.setItem("theme", isDark ? "dark" : "light");

    // Biar animasi bintang / awan ikut berubah
    window.dispatchEvent(new CustomEvent("themechange", {
      detail: { dark: isDark }
    }));
  }

  themeBtn.addEventListener("click", toggleTheme);
</script>
