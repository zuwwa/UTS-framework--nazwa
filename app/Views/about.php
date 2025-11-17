<?= $this->include('layout/header') ?>

<style>
/* ================= BACKGROUND CANVAS ================= */
#bgCanvas {
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  pointer-events: none;
}

/* ================= PAGE CONTENT ================= */
.page-content {
  position: relative;
  z-index: 10;
  padding-top: 120px;
  padding-bottom: 80px;
}

/* ===== GLOBAL SECTION STYLE ===== */
.section-title {
  text-align: center;
  font-size: 2rem;
  font-weight: 700;
  color: var(--primary-color);
  margin-bottom: 2.2rem;
}

/* ===== PENDIDIKAN ===== */
.edu-card {
  background: var(--card-bg);
  border-radius: 14px;
  padding: 1.4rem 1.6rem;
  box-shadow: 0 2px 10px rgba(0,0,0,0.15);
  transition: .3s ease;
}
.edu-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 18px rgba(0,0,0,0.25);
}
.edu-title {
  font-weight: 700;
  font-size: 1.25rem;
  color: var(--primary-color);
}
.edu-inst {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-color);
}
.edu-year {
  color: var(--text-muted);
  font-size: .95rem;
}

/* ===== PENGALAMAN ===== */
.exp-card {
  background: var(--card-bg);
  padding: 1.6rem 2rem;
  border-radius: 16px;
  box-shadow: 0 3px 12px rgba(0,0,0,0.15);
  transition: .3s ease;
}
.exp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.25);
}
.exp-card h5 {
  font-weight: 700;
  font-size: 1.25rem;
  color: var(--light-text);
}
.meta-badge {
  background: var(--primary-color);
  color: #fff;
  padding: .4rem .9rem;
  border-radius: 8px;
  font-size: .85rem;
  display: inline-block;
  margin-bottom: 0.8rem;
}

/* ===== KEAHLIAN ===== */
.skills-list {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  gap: 1rem;
  justify-content: center;
  padding: 0;
}
.skills-list li {
  background: var(--card-bg);
  padding: .7rem 1.2rem;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.12);
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: .6rem;
  transition: .3s;
}
.skills-list li:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 15px rgba(0,0,0,0.18);
}
.level-badge {
  background: var(--primary-color);
  color: #fff;
  padding: .2rem .6rem;
  border-radius: 6px;
  font-size: .82rem;
}

/* ===== PORTOFOLIO ===== */
.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
}
.portfolio-card {
  background: var(--card-bg);
  border-radius: 14px;
  box-shadow: 0 3px 12px rgba(0,0,0,0.15);
  transition: .3s ease;
}
.portfolio-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}
.card-body-custom {
  padding: 1.3rem;
}
.card-body-custom h5 {
  font-size: 1.2rem;
  color: var(--light-text);
}
.card-body-custom p {
  color: var(--text-color);
}
.card-footer-custom {
  padding: .9rem 1.3rem;
  border-top: 1px solid rgba(255,255,255,0.1);
  text-align: right;
}
.btn-primary-custom {
  background: var(--primary-color);
  color: white;
  padding: .45rem .9rem;
  border-radius: 8px;
  text-decoration: none;
  transition: .3s;
}
.btn-primary-custom:hover {
  opacity: .85;
  transform: translateY(-2px);
}

/* spacing per section */
.section-block {
  padding: 4rem 0;
}
</style>

<!-- ========= CANVAS BACKGROUND ========= -->
<canvas id="bgCanvas"></canvas>

<main class="page-content container">

  <!-- ====================== PENDIDIKAN ====================== -->
  <section class="section-block" id="pendidikan">
    <h3 class="section-title">Riwayat Pendidikan</h3>
    <div class="row g-4 justify-content-center">
      <?php foreach($pendidikan as $p): ?>
      <div class="col-md-8">
        <div class="edu-card">
          <div class="edu-title"><?= esc($p['jenjang']) ?></div>
          <div class="edu-inst"><?= esc($p['institusi']) ?></div>
          <div class="edu-year">
            <?= esc($p['tahun']) ?>
            <?= $p['ipk'] ? ' | IPK ' . esc($p['ipk']) : '' ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ====================== PENGALAMAN ====================== -->
  <section class="section-block" id="pengalaman">
    <h3 class="section-title">Riwayat Pengalaman</h3>
    <div class="row gy-4">
      <?php foreach($pengalaman as $x): ?>
      <div class="col-12">
        <div class="exp-card">
          <h5><?= esc($x['posisi']) ?> - <?= esc($x['tempat']) ?> (<?= esc($x['tahun']) ?>)</h5>
          <span class="meta-badge"><?= ucfirst(esc($x['jenis'])) ?></span>
          <p><?= esc($x['deskripsi']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ====================== KEAHLIAN ====================== -->
  <section class="section-block" id="keahlian">
    <h3 class="section-title">Keahlian</h3>
    <ul class="skills-list">
      <?php foreach($keahlian as $k): ?>
      <li>
        <?= esc($k['nama_keahlian']) ?>
        <span class="level-badge"><?= esc($k['level']) ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- ====================== PORTOFOLIO ====================== -->
  <section class="section-block" id="portofolio">
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
          <a href="<?= esc($p['link']) ?>" class="btn-primary-custom" target="_blank">
            Lihat Proyek
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>

  </section>

</main>

<!-- ================================= BACKGROUND SCRIPT (BINTANG + AWAN) ================================= -->
<script>
(function(){
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');

  let w = canvas.width = innerWidth;
  let h = canvas.height = innerHeight;

  let stars = [];
  let meteors = [];
  let clouds = [];

  let lastTime = 0;
  let modeDark = document.documentElement.classList.contains("dark-theme");

  function resize(){
    w = canvas.width = innerWidth;
    h = canvas.height = innerHeight;
    initParticles();
  }
  addEventListener("resize", resize);

  function initParticles(){
    stars=[];
    meteors=[];
    clouds=[];

    const starCount = Math.floor((w*h)/6000);
    for (let i=0;i<starCount;i++){
      stars.push({
        x:Math.random()*w,
        y:Math.random()*h,
        r:Math.random()*1.1+0.2,
        alpha:Math.random()*0.8+0.2
      });
    }

    const cloudCount = Math.max(3,Math.floor(w/450));
    for (let i=0;i<cloudCount;i++){
      clouds.push({
        x:Math.random()*w,
        y:Math.random()*(h*0.45),
        scale:0.6+Math.random()*0.9,
        speed:0.2+Math.random()*0.45,
        alpha:0.25+Math.random()*0.35
      });
    }
  }

  function maybeSpawnMeteor(){
    if(!modeDark) return;
    if(Math.random()<0.0025){
      meteors.push({
        x:Math.random()*w,
        y:Math.random()*h*0.2,
        vx:(Math.random()*-6)-6,
        vy:(Math.random()*6)+6,
        life:0,
        maxLife:80+Math.random()*30,
        len:40+Math.random()*80
      });
    }
  }

  function drawStars(){
    ctx.fillStyle = "#05030a";
    ctx.fillRect(0,0,w,h);

    for(let s of stars){
      ctx.fillStyle=`rgba(255,255,255,${s.alpha})`;
      ctx.beginPath();
      ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
      ctx.fill();
    }
  }

  function drawMeteors(){
    for(let i=meteors.length-1;i>=0;i--){
      const m=meteors[i];
      m.x+=m.vx;
      m.y+=m.vy;
      m.life++;

      ctx.strokeStyle="rgba(255,255,255,0.9)";
      ctx.lineWidth=2;
      ctx.beginPath();
      ctx.moveTo(m.x,m.y);
      ctx.lineTo(m.x-m.vx*(m.len/100), m.y-m.vy*(m.len/100));
      ctx.stroke();

      if(m.life>m.maxLife) meteors.splice(i,1);
    }
  }

  function drawClouds(){
    ctx.fillStyle="#fff6ea";
    ctx.fillRect(0,0,w,h);

    for(let c of clouds){
      c.x+=c.speed;
      if(c.x > w+200) c.x = -400;

      ctx.save();
      ctx.globalAlpha=c.alpha;
      ctx.fillStyle="#fff";

      const sx=c.x, sy=c.y;
      ctx.beginPath();
      ctx.arc(sx,sy,60*c.scale,0,Math.PI*2);
      ctx.arc(sx+60*c.scale,sy+10*c.scale,50*c.scale,0,Math.PI*2);
      ctx.arc(sx+120*c.scale,sy+4*c.scale,55*c.scale,0,Math.PI*2);
      ctx.fill();

      ctx.restore();
    }
  }

  function animate(){
    maybeSpawnMeteor();

    if(modeDark){ drawStars(); drawMeteors(); }
    else { drawClouds(); }

    requestAnimationFrame(animate);
  }

  window.addEventListener("themechange", (e)=>{
    modeDark = e.detail.dark;
    initParticles();
  });

  initParticles();
  requestAnimationFrame(animate);

})();
</script>

<?= $this->include('layout/footer') ?>
