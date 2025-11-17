<?= $this->include('layout/header') ?>

<style>
#bgCanvas {
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  pointer-events: none;
}

.page-content {
  position: relative;
  z-index: 10;
  padding-top: 80px;
  padding-bottom: 80px;
}

.hero {
  padding: 150px 0 60px;
  text-align: center;
}

.hero .eyebrow {
  letter-spacing: 2px;
  font-weight: 600;
  color: var(--muted);
}

.hero h1 {
  font-size: 3rem;
  font-weight: 800;
  margin: 0;
  line-height: 1.15;
  color: var(--light-text);
}

.highlight {
  color: var(--primary-color);
}

.about-box {
  margin-top: 110px; 
  background: var(--card-bg);
  border-radius: 14px;
  padding: 2rem;
  display: flex;
  gap: 2rem;
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.about-box img {
  width: 230px;
  height: 300px;
  border-radius: 12px;
  object-fit: cover;
  border: 3px solid var(--primary-color);
}

.about-title {
  color: var(--primary-color);
  font-size: 1.7rem;
  font-weight: 700;
}

.biodata-list {
  margin-top: 1rem;
  list-style: none;
  padding: 0;
}

.biodata-list li {
  margin-bottom: 0.6rem;
  font-weight: 500;
}

.download-btn {
  display: inline-block;
  margin-top: 1rem;
  background: var(--primary-color);
  color: #fff;
  padding: .7rem 1.4rem;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: .25s;
}

.download-btn:hover {
  transform: translateY(-3px);
  background: var(--secondary-color);
}

@media(max-width: 768px){
  .about-box { flex-direction: column; text-align: center; }
  .about-box img { width: 70%; height: auto; }
}
</style>

<canvas id="bgCanvas"></canvas>
<main class="page-content container">

  <!-- HERO -->
  <section class="hero">
    <div class="eyebrow">WELCOME TO MY WORLD</div>
    <h1>
      Hi, I'm <span class="highlight"><?= esc($biodata['nama']) ?></span><br>
      Mahasiswi <span class="highlight">Teknik Informatika</span>
    </h1>
  </section>

  <!-- ABOUT / BIODATA LENGKAP -->
  <section class="about container">
    <div class="about-box">

      <img src="<?= base_url('upload/foto/' . esc($biodata['foto'])) ?>">

      <div>
        <h3 class="about-title">Biodata Lengkap</h3>
        <ul class="biodata-list">
          <li><strong>Nama:</strong> <?= esc($biodata['nama']) ?></li>
          <li><strong>Alamat:</strong> <?= esc($biodata['alamat']) ?></li>
          <li><strong>Email:</strong> <?= esc($biodata['email']) ?></li>
          <li><strong>Telepon:</strong> <?= esc($biodata['telepon']) ?></li>
          <li><strong>Deskripsi:</strong> <?= esc($biodata['deskripsi']) ?></li>
        </ul>

        <a href="<?= base_url('cv/download') ?>" class="download-btn">
          <i data-feather="download"></i> Download CV
        </a>
      </div>

    </div>
  </section>

</main>

<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
</script>

<!-- BACKGROUND SCRIPT (BINTANG + AWAN) -->
<script>
(function(){
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');

  let w = canvas.width = innerWidth;
  let h = canvas.height = innerHeight;

  let stars = [];
  let meteors = [];
  let clouds = [];

  let modeDark = document.documentElement.classList.contains("dark-theme");

  function resize(){
    w = canvas.width = innerWidth;
    h = canvas.height = innerHeight;
    initParticles();
  }
  addEventListener("resize", resize);

  function initParticles(){
    stars=[]; meteors=[]; clouds=[];

    const starCount = Math.floor((w*h)/6000);
    for (let i=0;i<starCount;i++){
      stars.push({ x:Math.random()*w, y:Math.random()*h, r:Math.random()*1.1+0.2, alpha:Math.random()*0.8+0.2 });
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
      meteors.push({ x:Math.random()*w, y:Math.random()*h*0.2, vx:(Math.random()*-6)-6, vy:(Math.random()*6)+6, life:0, maxLife:80+Math.random()*30, len:40+Math.random()*80 });
    }
  }

  function drawStars(){
    ctx.fillStyle = "#05030a";
    ctx.fillRect(0,0,w,h);
    for(let s of stars){
      ctx.fillStyle=`rgba(255,255,255,${s.alpha})`;
      ctx.beginPath(); ctx.arc(s.x,s.y,s.r,0,Math.PI*2); ctx.fill();
    }
  }

  function drawMeteors(){
    for(let i=meteors.length-1;i>=0;i--){
      const m=meteors[i]; m.x+=m.vx; m.y+=m.vy; m.life++;
      ctx.strokeStyle="rgba(255,255,255,0.9)";
      ctx.lineWidth=2;
      ctx.beginPath(); ctx.moveTo(m.x,m.y); ctx.lineTo(m.x-m.vx*(m.len/100), m.y-m.vy*(m.len/100)); ctx.stroke();
      if(m.life>m.maxLife) meteors.splice(i,1);
    }
  }

  function drawClouds(){
    ctx.fillStyle="#fff6ea"; ctx.fillRect(0,0,w,h);
    for(let c of clouds){
      c.x+=c.speed; if(c.x > w+200) c.x = -400;
      ctx.save(); ctx.globalAlpha=c.alpha; ctx.fillStyle="#fff";
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

  window.addEventListener("themechange", (e)=>{ modeDark = e.detail.dark; initParticles(); });

  initParticles(); requestAnimationFrame(animate);

})();
</script>

<?= $this->include('layout/footer') ?>
