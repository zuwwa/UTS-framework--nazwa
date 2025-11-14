<?= $this->include('layout/header') ?>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.container-custom {
  max-width: 1000px;
  margin: 3rem auto;
  padding: 0 1rem;
}

.section-title {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
  color: var(--primary-color);
  font-weight: 700;
}

.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
}

.portfolio-card {
  background: var(--card-bg);
  border-radius: 14px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.12);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: .3s;
}

.portfolio-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.card-body-custom {
  padding: 1.3rem;
}

.card-body-custom h5 {
  color: var(--light-text);
  font-size: 1.2rem;
  margin-bottom: .6rem;
}

.card-body-custom p {
  color: var(--text-color);
  font-size: .95rem;
  line-height: 1.4;
}

.card-footer-custom {
  padding: 0.9rem 1.3rem;
  text-align: right;
  border-top: 1px solid rgba(255,255,255,0.08);
}

.btn-primary-custom {
  background: var(--primary-color);
  color: white;
  padding: .45rem .9rem;
  border-radius: 8px;
  font-size: .9rem;
  text-decoration: none;
  font-weight: 600;
  transition: .3s;
}

.btn-primary-custom:hover {
  opacity: .85;
  transform: translateY(-2px);
}

</style>

<div class="container container-custom">

  <h3 class="section-title">Portofolio</h3>

  <div class="portfolio-grid">

    <?php foreach ($portofolio as $p): ?>
      <div class="portfolio-card">

        <div class="card-body-custom">
          <h5><?= esc($p['judul']) ?></h5>
          <p><?= esc($p['deskripsi']) ?></p>
        </div>

        <?php if (!empty($p['link'])): ?>
        <div class="card-footer-custom">
          <a href="<?= esc($p['link']) ?>" target="_blank" class="btn-primary-custom">
            Lihat Proyek
          </a>
        </div>
        <?php endif; ?>

      </div>
    <?php endforeach; ?>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->include('layout/footer') ?>
