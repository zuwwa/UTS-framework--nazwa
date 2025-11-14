<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'CV - Nazwa Akmalia Padla') ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>

  <style>
    :root {
      --primary-color: #ff7613;
      --secondary-color: #ff9d57;
      --text-color: #b0b0b0;
      --dark-bg: #121212;
      --card-bg: #1e1e1e;
      --light-text: #e0e0e0;
    }

    :root.light {
      --primary-color: #ff7613;
      --secondary-color: #d85a00;
      --text-color: #444;
      --dark-bg: #f8f8f8;
      --card-bg: #ffffff;
      --light-text: #222;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--dark-bg);
      color: var(--light-text);
      transition: background 0.4s ease, color 0.4s ease;
      margin: 0;
      padding: 0;
    }

    
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.9rem 2.5rem; 
      background: var(--card-bg);
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .logo {
      font-size: 1.6rem; 
      font-weight: 700;
      color: var(--primary-color);
      text-decoration: none;
    }

    nav {
      display: flex;
      gap: 1.5rem;
    }

    nav a {
      text-decoration: none;
      color: var(--light-text);
      font-size: 1.2rem; /* 🔽 semula 1.5rem */
      font-weight: 500;
      transition: color 0.3s ease, transform 0.2s ease;
    }

    nav a:hover {
      color: var(--primary-color);
      transform: translateY(-2px);
    }

    /* Tombol tema */
    .theme-btn {
      background: transparent;
      border: none;
      cursor: pointer;
      font-size: 1.5rem; /* 🔽 semula 1.8rem */
      color: var(--light-text);
      transition: transform 0.2s ease, color 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .theme-btn:hover {
      transform: scale(1.15);
      color: var(--primary-color);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 0.8rem;
        text-align: center;
      }

      nav {
        flex-wrap: wrap;
        justify-content: center;
      }

      nav a {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

<header>
  <a href="<?= base_url('/') ?>" class="logo">CV Nazwa</a>

  <nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('pendidikan') ?>">Pendidikan</a>
    <a href="<?= base_url('pengalaman') ?>">Pengalaman</a>
    <a href="<?= base_url('keahlian') ?>">Keahlian</a>
    <a href="<?= base_url('portofolio') ?>">Portofolio</a>
  </nav>

  <!-- Tombol Dark/Light Mode -->
  <button id="themeToggle" class="theme-btn" title="Ganti Tema">
    <i data-feather="moon"></i>
  </button>
</header>

<script>
  feather.replace();

  const themeBtn = document.getElementById('themeToggle');
  const root = document.documentElement;

  // Cek preferensi sebelumnya
  if (localStorage.getItem('theme') === 'light') {
    root.classList.add('light');
    themeBtn.innerHTML = feather.icons.sun.toSvg();
  } else {
    themeBtn.innerHTML = feather.icons.moon.toSvg();
  }

  // Ganti tema saat klik
  themeBtn.addEventListener('click', () => {
    root.classList.toggle('light');
    const isLight = root.classList.contains('light');
    themeBtn.innerHTML = isLight
      ? feather.icons.sun.toSvg()
      : feather.icons.moon.toSvg();
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
  });
</script>

</body>
</html>
