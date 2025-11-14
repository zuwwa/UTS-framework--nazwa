<?= $this->include('layout/header') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root {
  --bg-color: #ffffff;
  --text-color: #1e1e1e;
  --text-muted: #555;
  --text-strong: #222;
  --card-bg: #f9f9f9;
  --card-bg-alt: #efefef;
  --border-color: #d0d0d0;
  --primary-color: #4b7bec;
  --shadow: 0 2px 10px rgba(0,0,0,0.1);
}

[data-theme="dark"] {
  --bg-color: #1a1a1a;
  --text-color: #f1f1f1;
  --text-muted: #aaa;
  --text-strong: #fff;
  --card-bg: #222;
  --card-bg-alt: #333;
  --border-color: #444;
  --primary-color: #6c8cff;
  --shadow: 0 2px 10px rgba(0,0,0,0.5);
}

body {
  background: var(--bg-color);
  color: var(--text-color);
  font-family: 'Inter', sans-serif;
  transition: background 0.3s ease, color 0.3s ease;
}

.cv-container {
  max-width: 1100px;
  margin: 3rem auto;
  padding: 1rem;
}

/* --- PROFILE CARD --- */
.profile {
  background: var(--card-bg);
  border-radius: 16px;
  box-shadow: var(--shadow);
  padding: 2.5rem;
  display: flex;
  align-items: center;
  gap: 2rem;
  transition: 0.3s;
}

.profile:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.profile img {
  width: 180px;
  height: 180px;
  border-radius: 50%;
  object-fit: cover;
}

.profile_name {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 0.3rem;
  color: var(--text-strong);
}

.profile_title {
  color: var(--primary-color);
  font-weight: 500;
}

.description {
  color: var(--text-muted);
}

.downloadBtn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 1rem;
  padding: 0.6rem 1.2rem;
  border-radius: 8px;
  background: var(--primary-color);
  color: #fff;
  transition: 0.2s;
}

.downloadBtn:hover {
  transform: scale(1.05);
}

/* --- SECTION TITLE --- */
h3.title {
  font-size: 1.2rem;
  margin-bottom: 1rem;
  color: var(--primary-color);
  text-transform: uppercase;
}

/* --- ALL CARDS (EDU, EXP, DLL) --- */
.edu_item,
.exp_item,
.awards_item,
.certification_item,
.interest_item,
.skills_list li {
  background: var(--card-bg);
  border-radius: 10px;
  padding: 1rem 1.2rem;
  margin-bottom: 1rem;
  box-shadow: var(--shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover (melayang sedikit) */
.edu_item:hover,
.exp_item:hover,
.awards_item:hover,
.certification_item:hover,
.skills_list li:hover,
.interest_item:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

/* --- CLICK ANIMATION (SEMUA CARD) --- */
.edu_item:active,
.exp_item:active,
.awards_item:active,
.certification_item:active,
.skills_list li:active,
.interest_item:active {
  transform: scale(0.97);
  transition: transform 0.15s ease;
}

.item_title {
  font-weight: 600;
}

/* --- SKILLS --- */
.skills_list {
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 0.8rem;
}

.skills_list li {
  list-style: none;
  padding: 0.6rem 1rem;
}

/* --- INTEREST --- */
.interest_items {
  display: flex;
  flex-wrap: wrap;
  gap: 0.8rem;
}

.interest_item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.8rem 1rem;
}

hr {
  margin-top: 2rem;
  background: var(--border-color);
  height: 1px;
  border: none;
}

@media (max-width: 768px) {
  .profile {
    flex-direction: column;
    text-align: center;
  }
}
</style>

<div class="cv-container">
  
  <div class="profile mb-4">
    <img src="<?= base_url('upload/foto/' . esc($biodata['foto'])); ?>">
    <div>
      <h1 class="profile_name"><?= esc($biodata['nama']); ?></h1>
      <p class="profile_title">Mahasiswi Teknik Informatika</p>
      <p class="description"><?= esc($biodata['deskripsi']); ?></p>
      <a class="downloadBtn" href="<?= base_url('cv/download'); ?>">
        <i data-feather="download"></i> Download CV
      </a>
    </div>
  </div>

  <div class="row g-4">

    <div class="col-md-6">
      <div class="edu">
        <h3 class="title">Riwayat Pendidikan</h3>
        <?php foreach ($pendidikan as $edu): ?>
        <div class="edu_item">
          <h4 class="item_title"><?= esc($edu['jenjang']); ?></h4>
          <p><?= esc($edu['institusi']); ?></p>
          <p><?= esc($edu['tahun']); ?><?= $edu['ipk'] ? ' | IPK ' . esc($edu['ipk']) : ''; ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="exp">
        <h3 class="title">Pengalaman</h3>
        <?php foreach ($pengalaman as $exp): ?>
        <div class="exp_item">
          <p><?= esc($exp['tahun']); ?></p>
          <h4 class="item_title"><?= esc($exp['posisi']); ?></h4>
          <p><?= esc($exp['deskripsi']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="awards">
        <h3 class="title">Pengalaman Kepanitiaan</h3>
        <?php foreach ($kepanitiaan as $k): ?>
        <div class="awards_item">
          <p><?= esc($k['tahun']); ?></p>
          <h4 class="item_title"><?= esc($k['posisi']); ?></h4>
          <p><?= esc($k['deskripsi']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="col-md-6">
      <div class="certification">
        <h3 class="title">Portofolio</h3>
        <?php foreach ($portofolio as $proj): ?>
        <div class="certification_item">
          <h4 class="item_title"><?= esc($proj['judul']); ?></h4>
          <p><?= esc($proj['deskripsi']); ?></p>
          <?php if (!empty($proj['link'])): ?>
            <a href="<?= esc($proj['link']); ?>" target="_blank" style="color:var(--primary-color)">Lihat Proyek</a>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="skills">
        <h3 class="title">Keahlian</h3>
        <ul class="skills_list">
          <?php foreach ($keahlian as $skill): ?>
          <li><?= esc($skill['nama_keahlian']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="interest">
        <h3 class="title">Minat</h3>
        <div class="interest_items">
          <?php foreach ($minat as $m): ?>
          <div class="interest_item">
            <i data-feather="<?= esc($m['icon'] ?? 'heart'); ?>"></i>
            <span><?= esc($m['nama_minat']); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>

  <hr>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>feather.replace();</script>

<?= $this->include('layout/footer') ?>
