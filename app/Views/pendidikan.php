<?= $this->include('layout/header') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root {
  --card-bg: #f9f9f9;
  --text-color: #1e1e1e;
  --text-muted: #555;
  --primary-color: #4b7bec;
  --shadow: 0 2px 10px rgba(0,0,0,0.08);
}

:root.light {
  --card-bg: #ffffff;
  --text-color: #1e1e1e;
  --text-muted: #555;
  --primary-color: #ff7613;
  --shadow: 0 2px 10px rgba(0,0,0,0.08);
}

:root:not(.light) {
  --card-bg: #222;
  --text-color: #f1f1f1;
  --text-muted: #aaa;
  --primary-color: #6c8cff;
  --shadow: 0 2px 10px rgba(0,0,0,0.5);
}

.section_title {
  text-align: center;
  font-size: 1.9rem;
  font-weight: 700;
  margin-bottom: 2.2rem;
  color: var(--primary-color);
}

.edu_card {
  background: var(--card-bg);
  border-radius: 14px;
  padding: 1.4rem 1.6rem;
  box-shadow: var(--shadow);
  transition: .3s ease;
}

.edu_card:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 18px rgba(0,0,0,0.18);
}

.edu_title {
  font-weight: 700;
  font-size: 1.25rem;
  margin-bottom: .3rem;
  color: var(--primary-color);
}

.edu_institusi {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-color);
  margin-bottom: .4rem;
}

.edu_tahun_ipk {
  font-size: .95rem;
  color: var(--text-muted);
}
</style>

<div class="container py-5">
  <h3 class="section_title">Riwayat Pendidikan</h3>

  <div class="row g-4 justify-content-center">
    <?php foreach($pendidikan as $p): ?>
    <div class="col-md-8">
      <div class="edu_card">
        <div class="edu_title"><?= esc($p['jenjang']) ?></div>
        <div class="edu_institusi"><?= esc($p['institusi']) ?></div>
        <div class="edu_tahun_ipk">
          <?= esc($p['tahun']) ?>
          <?= $p['ipk'] ? ' | IPK ' . esc($p['ipk']) : '' ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->include('layout/footer') ?>
