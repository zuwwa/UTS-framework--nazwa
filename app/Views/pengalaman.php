<?= $this->include('layout/header') ?>

<style>
.container {
  max-width: 900px;
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

.exp-card {
  background: var(--card-bg);
  border-radius: 12px;
  box-shadow: var(--shadow, 0 4px 12px rgba(0,0,0,0.1));
  margin-bottom: 1.5rem;
  padding: 1.5rem 2rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.exp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.exp-card h5 {
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--text-strong, #1e1e1e); /* terang di light mode, ganti di dark mode */
  margin-bottom: 0.3rem;
}

.exp-card .meta {
  font-size: 0.95rem;
  color: var(--text-muted, #888);
  margin-bottom: 0.8rem;
}

.exp-card p.description {
  font-size: 1rem;
  line-height: 1.6;
  color: var(--text-muted-light, #bbb); /* sedikit abu */
}

/* untuk dark mode */
[data-theme="dark"] .exp-card h5 {
  color: #fff;
}

[data-theme="dark"] .exp-card p.description {
  color: #ccc;
}

@media (max-width: 768px) {
  .container {
    padding: 0 0.5rem;
  }
}
</style>

<div class="container">
  <h3 class="section-title">Riwayat Pengalaman</h3>
  <?php if (!empty($pengalaman)): ?>
    <?php foreach($pengalaman as $x): ?>
      <div class="exp-card">
        <h5><?= esc($x['posisi']) ?> - <?= esc($x['tempat']) ?> (<?= esc($x['tahun']) ?>)</h5>
        <div class="meta"><?= ucfirst(esc($x['jenis'])) ?></div>
        <p class="description"><?= esc($x['deskripsi']) ?></p>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p style="text-align:center; color: var(--text-muted);">Belum ada pengalaman yang ditambahkan.</p>
  <?php endif; ?>
</div>

<?= $this->include('layout/footer') ?>
