<footer class="site-footer">
  <div class="footer-content">
    <!-- Informasi Kontak -->
    <div class="footer-section">
      <h3 class="title">Informasi Kontak</h3>
      <?php if (isset($biodata)): ?>
        <p><?= esc($biodata['alamat']); ?></p>
        <p><?= esc($biodata['telepon']); ?></p>
        <p><?= esc($biodata['email']); ?></p>
      <?php else: ?>
        <p>Data kontak belum tersedia</p>
      <?php endif; ?>
    </div>

    <!-- Sosial Media -->
    <div class="footer-section">
      <h3 class="title">Sosial Media</h3>
      <div class="social-links">
        <?php if (isset($sosial_media) && !empty($sosial_media)): ?>
          <?php foreach ($sosial_media as $s): ?>
            <a href="<?= esc($s['link']); ?>" target="_blank" class="social-link">
              <i data-feather="external-link"></i>
              <?= esc($s['platform']); ?>
            </a>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Tidak ada data sosial media</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr class="footer-divider">

  <p class="footer-copy">&copy; <?= date('Y') ?> <strong>Nazwa Akmalia Padla</strong>. All rights reserved.</p>
</footer>

<script>
  feather.replace();
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme) document.documentElement.setAttribute('data-theme', savedTheme);

  const themeToggle = document.getElementById('themeToggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
    });
  }
</script>

<style>
  :root {
    --bg-color: #ffffff;
    --text-color: #1e1e1e;
    --card-bg: #f9f9f9;
    --card-bg-alt: #efefef;
    --border-color: #d0d0d0;
    --primary-color: #4b7bec;
  }

  [data-theme="dark"] {
    --bg-color: #1a1a1a;
    --text-color: #f1f1f1;
    --card-bg: #222;
    --card-bg-alt: #333;
    --border-color: #444;
    --primary-color: #6c8cff;
  }

  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    background: var(--bg-color);
    color: var(--text-color);
    font-family: 'Inter', sans-serif;
    transition: background 0.3s ease, color 0.3s ease;
  }

  .container {
    flex: 1;
  }

  /* FOOTER */
  .site-footer {
    margin-top: auto;
    background: var(--card-bg);
    color: var(--text-color);
    padding: 2rem 1.5rem; /* 🔽 semula 3rem 2rem */
    text-align: center;
    font-size: 1.2rem; /* 🔽 semula 1.4rem */
    border-top: 1px solid var(--border-color);
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
    transition: background 0.3s ease, color 0.3s ease;
  }

  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2.5rem; /* 🔽 semula 3rem */
    max-width: 900px;
    margin: auto;
  }

  .footer-section {
    min-width: 230px;
    text-align: left;
  }

  .footer-section .title {
    font-size: 1.3rem; /* 🔽 semula 1.6rem */
    font-weight: 600;
    margin-bottom: 0.8rem;
  }

  .footer-section p {
    margin: 0.2rem 0;
    line-height: 1.5;
  }

  .social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem;
  }

  .social-link {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    text-decoration: none;
    background: var(--card-bg-alt);
    color: var(--text-color);
    padding: 0.4rem 0.8rem; /* 🔽 */
    border-radius: 6px;
    transition: all 0.3s ease;
    font-size: 1.2rem; /* 🔽 semula 1.4rem */
  }

  .social-link:hover {
    background: var(--primary-color);
    color: #fff;
    transform: translateY(-2px);
  }

  .footer-divider {
    width: 80%;
    margin: 1.5rem auto;
    border: none;
    height: 1px;
    background: var(--border-color);
  }

  .footer-copy {
    margin: 0;
    font-size: 1.1rem; /* 🔽 semula 1.3rem */
    opacity: 0.75;
  }

  @media (max-width: 768px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 2rem;
    }

    .footer-section {
      text-align: center;
    }
  }
</style>
