<footer class="custom-footer text-center py-4">
    <p class="footer-desc mb-3">
        Terima kasih sudah mengunjungi website saya.
    </p>

    <!-- SOSIAL MEDIA -->
    <div class="d-flex justify-content-center gap-2 mt-2 flex-wrap">
      <?php if (!empty($sosial_media)): ?>
        <?php foreach ($sosial_media as $s): ?>
          <a href="<?= esc($s['link']); ?>" target="_blank" class="footer-icon">

            <?php 
              $p = strtolower($s['platform']);
              if ($p === 'github') echo '<i class="bi bi-github"></i>';
              elseif ($p === 'linkedin') echo '<i class="bi bi-linkedin"></i>';
              else echo '<i class="bi bi-box-arrow-up-right"></i>';
            ?>

          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <p class="footer-copy mt-3 mb-0">
        &copy; <?= date('Y') ?> <strong>Nazwa Akmalia Padla</strong>.
    </p>

</footer>


<style>

#bgCanvas { z-index:0!important; }
.page-content { z-index:10; position:relative; }
.custom-footer { position:relative; z-index:20; }


:root {
  --footer-bg: #ffffff;
  --footer-text: #222;
  --footer-icon-bg: #ff7613;
  --footer-icon-hover: #ff5800;
}

.dark-theme {
  --footer-bg: #0d0d0d;
  --footer-text: #e5e5e5;
  --footer-icon-bg: #6c8cff;
  --footer-icon-hover: #4f6aff;
}


.custom-footer {
  background: var(--footer-bg);
  color: var(--footer-text);
  padding-top: 2rem !important;
  padding-bottom: 1.8rem !important;
  border-top: 1px solid rgba(0,0,0,0.08);
}

.footer-name {
  font-size: 1.5rem;
  font-weight: 700;
}

.footer-desc {
  font-size: 0.95rem;
  opacity: 0.8;
}


.footer-icon {
  width: 42px;
  height: 42px;
  background: var(--footer-icon-bg);
  color: #fff;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.25rem;
  transition: 0.3s ease;
}

.footer-icon:hover {
  background: var(--footer-icon-hover);
  transform: translateY(-4px);
}

.footer-copy {
  font-size: 0.9rem;
  opacity: 0.65;
}
</style>
