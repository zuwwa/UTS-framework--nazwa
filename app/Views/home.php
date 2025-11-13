<?= $this->include('layout/header') ?>

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

.container {
  max-width: 1000px;
  margin: 3rem auto;
  padding: 2rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
}

.profile {
  grid-column: 1 / -1;
  background: var(--card-bg);
  border-radius: 16px;
  box-shadow: var(--shadow);
  padding: 2.5rem;
  display: flex;
  align-items: center;
  gap: 2rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
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
  margin-bottom: 0.8rem;
}

.description {
  color: var(--text-muted);
  line-height: 1.6;
}

.downloadBtn,
.downloadBtn:hover,
.downloadBtn:focus,
.downloadBtn:active {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 1rem;
  padding: 0.6rem 1.2rem;
  border-radius: 8px;
  background: var(--primary-color);
  color: #fff;
  font-size: 1rem;
  transition: 0.2s;
}

.downloadBtn:hover {
  transform: scale(1.05);
}

.downloadBtn:active {
  transform: scale(0.98);
  outline: none;
  box-shadow: none;
}

h3.title {
  font-size: 1.2rem;
  margin-bottom: 0.8rem;
  color: var(--primary-color);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.edu_item, .exp_item, .awards_item, .certification_item, .interest_item, .skills_list li {
  background: var(--card-bg);
  border-radius: 10px;
  padding: 1rem 1.2rem;
  margin-bottom: 1rem;
  box-shadow: var(--shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.edu_item:hover, .exp_item:hover, .awards_item:hover, .certification_item:hover, .interest_item:hover, .skills_list li:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.item_title {
  font-weight: 600;
  color: var(--text-strong);
}

.item_subtitle, .item_preTitle {
  font-size: 0.9rem;
  color: var(--text-muted);
}

.interest_items, .skills_list, .social_items {
  display: flex;
  flex-wrap: wrap;
  gap: 0.8rem;
}

.skills_list {
  padding: 0;
  margin: 0;
}

.skills_list li {
  list-style: none;
  padding: 0.6rem 1rem;
  background: var(--card-bg);
  border-radius: 10px;
  box-shadow: var(--shadow);
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.skills_list li:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.interest_item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: var(--card-bg);
  border-radius: 10px;
  padding: 0.8rem 1rem;
  box-shadow: var(--shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.interest_item:hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.interest_item i {
  color: var(--primary-color);
}

.group-2 > div {
  width: 100%;
}

hr {
  grid-column: 1 / -1;
  margin: 2rem 0;
  border: 0;
  height: 1px;
  background: var(--border-color);
}

@media (max-width: 768px) {
  .container {
    grid-template-columns: 1fr;
    padding: 1rem;
  }
  .profile {
    flex-direction: column;
    text-align: center;
  }
}
</style>

<div class="container">
  <div class="profile">
    <img src="<?= base_url('upload/foto/' . esc($biodata['foto'])); ?>" alt="<?= esc($biodata['nama']); ?>">
    <div>
      <h1 class="profile_name"><?= esc($biodata['nama']); ?></h1>
      <p class="profile_title">Mahasiswi Teknik Informatika</p>
      <p class="description"><?= esc($biodata['deskripsi']); ?></p>
      <a class="downloadBtn" href="<?= base_url('cv/download'); ?>">
       <i data-feather="download"></i> Download CV
      </a>
    </div>
  </div>

  <div class="group-1">
    <div class="edu">
      <h3 class="title">Riwayat Pendidikan</h3>
      <?php foreach ($pendidikan as $edu): ?>
        <div class="edu_item">
          <h4 class="item_title"><?= esc($edu['jenjang']); ?></h4>
          <p class="item_subtitle"><?= esc($edu['institusi']); ?></p>
          <p class="description"><?= esc($edu['tahun']); ?><?= $edu['ipk'] ? ' | IPK ' . esc($edu['ipk']) : ''; ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="exp">
      <h3 class="title">Pengalaman</h3>
      <?php foreach ($pengalaman as $exp): ?>
        <div class="exp_item">
          <p class="item_preTitle"><?= esc($exp['tahun']); ?></p>
          <h4 class="item_title"><?= esc($exp['posisi']); ?></h4>
          <p class="description"><?= esc($exp['deskripsi']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="awards">
      <h3 class="title">Pengalaman Kepanitiaan</h3>
      <?php foreach ($kepanitiaan as $k): ?>
        <div class="awards_item">
          <p class="item_preTitle"><?= esc($k['tahun']); ?></p>
          <h4 class="item_title"><?= esc($k['posisi']); ?></h4>
          <p class="description"><?= esc($k['deskripsi']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="group-2">
    <div class="certification">
      <h3 class="title">Portofolio</h3>
      <?php foreach ($portofolio as $proj): ?>
        <div class="certification_item">
          <h4 class="item_title"><?= esc($proj['judul']); ?></h4>
          <p class="description"><?= esc($proj['deskripsi']); ?></p>
          <?php if (!empty($proj['link'])): ?>
            <a href="<?= esc($proj['link']); ?>" target="_blank" style="color:var(--primary-color);font-weight:500;">Lihat Proyek</a>
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

  <hr>
</div>

<script>
feather.replace();
</script>

<?= $this->include('layout/footer') ?>
