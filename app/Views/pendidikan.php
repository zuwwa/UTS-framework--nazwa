<?= $this->include('layout/header') ?>

<style>
:root {
  --card-bg: #f9f9f9;
  --text-color: #1e1e1e;
  --text-muted: #555;
  --primary-color: #4b7bec;
  --shadow: 0 2px 10px rgba(0,0,0,0.08);
}

[data-theme="dark"] {
  --card-bg: #222;
  --text-color: #f1f1f1;
  --text-muted: #aaa;
  --primary-color: #6c8cff;
  --shadow: 0 2px 10px rgba(0,0,0,0.5);
}

.container {
  max-width: 900px;
  margin: 3rem auto;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.edu_card {
  background: var(--card-bg);
  border-radius: 12px;
  padding: 1.2rem 1.5rem;
  box-shadow: var(--shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.edu_card:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.edu_title {
  font-weight: 600;
  font-size: 1.2rem;
  margin-bottom: 0.3rem;
  color: var(--primary-color);
}

.edu_institusi {
  font-size: 1rem;
  color: var(--text-color);
  margin-bottom: 0.3rem;
}

.edu_tahun_ipk {
  font-size: 0.9rem;
  color: var(--text-muted);
}

h3.section_title {
  text-align: center;
  font-size: 1.8rem;
  margin-bottom: 2rem;
  color: var(--primary-color);
}
</style>

<div class="container">
  <h3 class="section_title">Riwayat Pendidikan</h3>
  <?php foreach($pendidikan as $p): ?>
  <div class="edu_card">
    <div class="edu_title"><?= esc($p['jenjang']) ?></div>
    <div class="edu_institusi"><?= esc($p['institusi']) ?></div>
    <div class="edu_tahun_ipk"><?= esc($p['tahun']) ?><?= $p['ipk'] ? ' | IPK ' . esc($p['ipk']) : ''; ?></div>
  </div>
  <?php endforeach; ?>
</div>

<?= $this->include('layout/footer') ?>
