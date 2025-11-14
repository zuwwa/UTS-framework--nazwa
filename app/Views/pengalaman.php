<?= $this->include('layout/header') ?>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.container-custom {
  max-width: 900px;
  margin: 3rem auto;
}

/* Judul */
.section-title {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
  color: var(--primary-color);
  font-weight: 700;
}

/* Card Pengalaman */
.exp-card {
  background: var(--card-bg);
  border-radius: 16px;
  padding: 1.6rem 2rem;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: 0.3s ease;
}

.exp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.2);
}

.exp-card h5 {
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--light-text);
  margin-bottom: .4rem;
}

.meta-badge {
  background: var(--primary-color);
  color: white;
  padding: .45rem .9rem;
  font-size: .8rem;
  font-weight: 600;
  border-radius: 8px;
  display: inline-block;
  margin-bottom: .8rem;
}

.exp-card p {
  margin: 0;
  font-size: 1rem;
  color: var(--text-color);
  line-height: 1.6;
}
</style>

<div class="container container-custom">

  <h3 class="section-title">Riwayat Pengalaman</h3>

  <?php if (!empty($pengalaman)): ?>

    <div class="row gy-4">
      <?php foreach ($pengalaman as $x): ?>
      <div class="col-12">
        <div class="exp-card">

          <h5><?= esc($x['posisi']) ?> - <?= esc($x['tempat']) ?> (<?= esc($x['tahun']) ?>)</h5>

          <span class="meta-badge">
            <?= ucfirst(esc($x['jenis'])) ?>
          </span>

          <p><?= esc($x['deskripsi']) ?></p>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

  <?php else: ?>

    <div class="alert alert-secondary text-center mt-3">
      Belum ada pengalaman yang ditambahkan.
    </div>

  <?php endif; ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->include('layout/footer') ?>
