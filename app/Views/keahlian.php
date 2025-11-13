<?= $this->include('layout/header') ?>

<style>
.container {
  max-width: 700px;
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

.skills-list {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
  list-style: none;
  padding: 0;
  margin: 0 auto;
}

.skills-list li {
  background: var(--card-bg);
  color: var(--text-color);
  padding: 0.7rem 1.2rem;
  border-radius: 12px;
  box-shadow: var(--shadow, 0 2px 8px rgba(0,0,0,0.08));
  display: flex;
  align-items: center;
  gap: 0.6rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  font-weight: 500;
}

.skills-list li:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.skills-list .level-badge {
  background: var(--primary-color);
  color: #fff;
  padding: 0.2rem 0.6rem;
  border-radius: 6px;
  font-size: 0.85rem;
  font-weight: 600;
}

@media (max-width: 768px) {
  .skills-list {
    gap: 0.8rem;
  }
}
</style>

<div class="container">
  <h3 class="section-title">Keahlian</h3>
  <ul class="skills-list">
    <?php foreach($keahlian as $k): ?>
      <li>
        <?= esc($k['nama_keahlian']) ?>
        <span class="level-badge"><?= esc($k['level']) ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<?= $this->include('layout/footer') ?>
