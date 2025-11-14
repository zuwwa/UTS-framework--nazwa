<?= $this->include('layout/header') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.section-title {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
  color: var(--primary-color);
  font-weight: 700;
}

.skills-list {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
  list-style: none;
  padding: 0;
  margin: 0;
}

.skills-list li {
  background: var(--card-bg);
  color: var(--text-color);
  padding: 0.7rem 1.2rem;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.10);
  display: flex;
  align-items: center;
  gap: .6rem;
  transition: .3s ease;
  font-weight: 500;
}

.skills-list li:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.20);
}

.level-badge {
  background: var(--primary-color);
  color: #fff;
  padding: .2rem .6rem;
  border-radius: 6px;
  font-size: .85rem;
  font-weight: 600;
}
</style>

<div class="container py-5">
  <h3 class="section-title">Keahlian</h3>

  <div class="row justify-content-center">
    <div class="col-md-10">

      <ul class="skills-list">
        <?php foreach($keahlian as $k): ?>
          <li>
            <?= esc($k['nama_keahlian']) ?>
            <span class="level-badge"><?= esc($k['level']) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</div>

<?= $this->include('layout/footer') ?>
