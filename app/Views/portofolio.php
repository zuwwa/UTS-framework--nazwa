<?= $this->include('layout/header') ?>

<style>
.container {
  max-width: 1000px;
  margin: 3rem auto;
  padding: 0 1rem;
}

h3.section-title {
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
  border-radius: 12px;
  box-shadow: var(--shadow, 0 2px 10px rgba(0,0,0,0.1));
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.portfolio-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.portfolio-card .card-body {
  padding: 1.2rem;
}

.portfolio-card h5 {
  color: var(--text-strong, #1e1e1e); /* terang di light mode */
  margin-bottom: 0.6rem;
  font-size: 1.2rem;
}

.portfolio-card p {
  color: var(--text-muted-light, #555); /* abu agar lebih lembut */
  font-size: 0.95rem;
  line-height: 1.4;
}

/* Dark mode */
[data-theme="dark"] .portfolio-card h5 {
  color: #fff;
}

[data-theme="dark"] .portfolio-card p {
  color: #ccc;
}

.portfolio-card .card-footer {
  padding: 0.8rem 1.2rem;
  text-align: right;
  background: transparent;
  border-top: 1px solid var(--border-color);
}

.portfolio-card .card-footer a {
  background: var(--primary-color);
  color: #fff;
  padding: 0.4rem 0.8rem;
  border-radius: 6px;
  font-size: 0.9rem;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
}

.portfolio-card .card-footer a:hover {
  background: var(--primary-color);
  opacity: 0.85;
  transform: translateY(-2px);
}

@media (max-width: 768px) {
  .portfolio-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="container">
  <h3 class="section-title">Portofolio</h3>
  <div class="portfolio-grid">
    <?php foreach($portofolio as $p): ?>
      <div class="portfolio-card">
        <div class="card-body">
          <h5><?= esc($p['judul']) ?></h5>
          <p><?= esc($p['deskripsi']) ?></p>
        </div>
        <?php if(!empty($p['link'])): ?>
        <div class="card-footer">
          <a href="<?= esc($p['link']) ?>" target="_blank">Lihat Proyek</a>
        </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->include('layout/footer') ?>
