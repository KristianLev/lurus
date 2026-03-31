<!DOCTYPE html>
<html lang="sl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Avtomobilski nadstreški — LUROS</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,700;1,9..144,300;1,9..144,700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --brand:#1f4963;
  --brand-dark:#152f3d;
  --brand-mid:#2a6285;
  --brand-light:#e8f1f7;
  --brand-pale:#f2f7fb;
  --accent:#3a9e5f;
  --accent-light:#e6f5ed;
  --white:#ffffff;
  --off:#f8fafc;
  --text:#0e2333;
  --muted:#5a7a8e;
  --border:#cddde8;
  --stone:#8aa5b5;
}
html{scroll-behavior:smooth}
body{font-family:'Outfit',sans-serif;color:var(--text);background:var(--white);overflow-x:hidden}

/* ── NAV ── */
nav{
  position:fixed;top:0;left:0;right:0;z-index:200;
  height:66px;display:flex;align-items:center;
  justify-content:space-between;padding:0 5%;
  background:rgba(255,255,255,.97);
  backdrop-filter:blur(12px);
  border-bottom:1px solid var(--border);
}
.logo-img{height:34px}
.nav-links{display:flex;gap:32px;list-style:none}
.nav-links a{font-size:13px;color:var(--stone);text-decoration:none;font-weight:400;transition:color .2s}
.nav-links a:hover,.nav-links a.act{color:var(--brand)}
.nav-cta{background:var(--brand);color:#fff;padding:10px 22px;border-radius:4px;font-size:13px;font-weight:500;text-decoration:none;transition:background .2s}
.nav-cta:hover{background:var(--brand-mid)}

/* ── BREADCRUMB ── */
.breadcrumb{
  margin-top:66px;padding:14px 5%;
  background:var(--off);border-bottom:1px solid var(--border);
  display:flex;align-items:center;gap:8px;
  font-size:12px;color:var(--stone);
}
.breadcrumb a{color:var(--stone);text-decoration:none;transition:color .2s}
.breadcrumb a:hover{color:var(--brand)}
.bc-sep{opacity:.4;font-size:10px}
.bc-cur{color:var(--text);font-weight:500}

/* ── HERO ── */
.cat-hero{
  padding:72px 5% 80px;
  background:var(--white);
  border-bottom:1px solid var(--border);
  position:relative;overflow:hidden;
}
.cat-hero::before{
  content:'';position:absolute;top:-60px;right:-60px;
  width:500px;height:500px;border-radius:50%;
  background:radial-gradient(circle,rgba(31,73,99,.05) 0%,transparent 70%);
  pointer-events:none;
}
.hero-grid{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1fr;
  gap:64px;align-items:center;
}
.hero-label{
  display:flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:20px;
}
.hero-label::before{content:'';width:20px;height:2px;background:var(--brand)}
.cat-hero h1{
  font-family:'Fraunces',serif;
  font-size:clamp(36px,4.5vw,58px);
  font-weight:700;color:var(--text);
  line-height:1.06;letter-spacing:-1px;
  margin-bottom:20px;
}
.cat-hero h1 em{font-style:italic;font-weight:300;color:var(--brand)}
.cat-hero-sub{
  font-size:15px;color:var(--muted);
  line-height:1.8;font-weight:300;
  max-width:460px;margin-bottom:14px;
}
.cat-hero-sub2{
  font-size:14px;color:var(--muted);
  line-height:1.8;font-weight:300;
  max-width:460px;margin-bottom:36px;
}
.btn-accent{
  display:inline-flex;align-items:center;gap:10px;
  background:var(--accent);color:#fff;
  padding:14px 28px;border-radius:4px;
  font-size:13px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-accent:hover{background:#2d8550;gap:14px}
.btn-accent svg{width:16px;height:16px;fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

.hero-img-wrap{
  position:relative;border-radius:16px;overflow:hidden;
  aspect-ratio:4/3;
  box-shadow:0 24px 64px rgba(15,35,55,.12);
}
.hero-img-wrap img{width:100%;height:100%;object-fit:cover;display:block}
.hero-img-chip{
  position:absolute;bottom:20px;left:20px;
  background:var(--brand);color:#fff;
  border-radius:8px;padding:12px 16px;
  backdrop-filter:blur(8px);
}
.chip-n{font-family:'Fraunces',serif;font-size:24px;font-weight:700;line-height:1}
.chip-l{font-size:10px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.8px;margin-top:3px}

/* ── WHY SECTION ── */
.why{
  padding:80px 5%;
  background:var(--brand-pale);
  border-bottom:1px solid var(--border);
}
.why-inner{max-width:1100px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.why-left{display:flex;flex-direction:column;gap:0}

.feature-block{
  display:grid;grid-template-columns:72px 1fr;
  gap:20px;align-items:start;
  padding:28px 0;
  border-bottom:1px solid var(--border);
  transition:padding-left .2s;
  cursor:default;
}
.feature-block:first-child{padding-top:0}
.feature-block:last-child{border:none;padding-bottom:0}
.feature-block:hover{padding-left:4px}
.fb-img{
  width:68px;height:68px;border-radius:12px;overflow:hidden;flex-shrink:0;
}
.fb-img img{width:100%;height:100%;object-fit:cover;display:block}
.fb-text{}
.fb-title{
  font-size:14px;font-weight:600;color:var(--brand);
  margin-bottom:8px;
}
.fb-desc{font-size:13px;color:var(--muted);line-height:1.75;font-weight:300}

.why-right{}
.why-eyebrow{
  display:flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:20px;
}
.why-eyebrow::before{content:'';width:20px;height:2px;background:var(--brand)}
.why-title{
  font-family:'Fraunces',serif;
  font-size:clamp(26px,2.8vw,38px);
  font-weight:700;color:var(--text);
  line-height:1.2;letter-spacing:-.4px;
  margin-bottom:20px;
}
.why-title em{font-style:italic;font-weight:300;color:var(--brand)}
.why-body{
    font-size:16px;color:var(--muted);
    line-height:1.8;font-weight:300;
}
.why-img{
  margin-top:32px;border-radius:14px;overflow:hidden;
  aspect-ratio:16/10;border:1px solid var(--border);
  box-shadow:0 12px 36px rgba(15,35,55,.08);
}
.why-img img{width:100%;height:100%;object-fit:cover;display:block}

/* ── PRODUCTS SECTION ── */
.products{padding:88px 5%;background:var(--white)}
.products-inner{max-width:1100px;margin:0 auto}
.sec-head{text-align:center;margin-bottom:16px}
.sec-eyebrow{
  display:inline-flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;
}
.sec-eyebrow::before,.sec-eyebrow::after{content:'';width:24px;height:2px;background:var(--border)}
.sec-title{
  font-family:'Fraunces',serif;
  font-size:clamp(30px,3.2vw,44px);
  font-weight:700;color:var(--text);
  line-height:1.15;letter-spacing:-.5px;
  margin-bottom:10px;
}
.sec-title em{font-style:italic;font-weight:300;color:var(--brand)}
.sec-sub{font-size:15px;color:var(--muted);font-weight:300;line-height:1.7;margin-bottom:48px}

.products-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:14px;
}

.product-card{
  position:relative;overflow:hidden;
  border-radius:12px;
  aspect-ratio:4/3;
  cursor:pointer;
  background:var(--brand-light);
  border:1px solid var(--border);
}
.product-card img{
  width:100%;height:100%;
  object-fit:cover;display:block;
  transition:transform .65s cubic-bezier(.4,0,.2,1);
}
.product-card:hover img{transform:scale(1.07)}
.pc-overlay{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(10,24,38,.78) 0%,rgba(10,24,38,.1) 50%,transparent 100%);
  transition:background .3s;
}
.product-card:hover .pc-overlay{
  background:linear-gradient(to top,rgba(10,24,38,.88) 0%,rgba(10,24,38,.2) 55%,transparent 100%);
}
.pc-info{
  position:absolute;bottom:0;left:0;right:0;
  padding:18px 16px;
  display:flex;align-items:flex-end;justify-content:space-between;
}
.pc-name{
  font-family:'Fraunces',serif;
  font-size:14px;font-weight:400;
  color:#fff;line-height:1.25;
}
.pc-arrow{
  width:30px;height:30px;border-radius:50%;
  border:1px solid rgba(255,255,255,.25);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;margin-left:10px;
  opacity:0;transform:translateX(-6px);
  transition:opacity .25s,transform .25s;
}
.product-card:hover .pc-arrow{opacity:1;transform:translateX(0)}
.pc-arrow svg{width:12px;height:12px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* ── PROCESS ── */
.process{
  padding:88px 5%;
  background: #eff5ff;
  position:relative;overflow:hidden;
}
.process::before{
  content:'';position:absolute;
  top:-100px;left:-100px;
  width:400px;height:400px;border-radius:50%;
  background:rgba(255,255,255,.03);pointer-events:none;
}
.process-inner{max-width:1100px;margin:0 auto}
.process .sec-eyebrow{color:rgba(255,255,255,.35)}
.process .sec-eyebrow::before,.process .sec-eyebrow::after{background:rgba(255,255,255,.15)}
.process .sec-title{color:#fff}
.process .sec-title em{color:rgba(255,255,255,.5)}
.process .sec-sub{color:rgba(255,255,255,.4)}

.steps-row{
  display:grid;grid-template-columns:repeat(4,1fr);
  gap:1px;background:rgba(255,255,255,.08);
  border-radius:12px;overflow:hidden;
  margin-bottom:48px;
}
.step-card{
  background:rgba(255,255,255,.04);
  padding:32px 24px;
  transition:background .2s;
  position:relative;
}
.step-card:hover{background:rgba(255,255,255,.08)}
.step-num{
  font-family:'Fraunces',serif;
  font-size:40px;font-weight:300;
  color:rgba(255,255,255,.1);
  line-height:1;margin-bottom:16px;
}
.step-icon{
  width:44px;height:44px;
  border-radius:10px;
  background:rgba(255,255,255,.1);
  border:1px solid rgba(255,255,255,.12);
  display:flex;align-items:center;justify-content:center;
  margin-bottom:16px;
}
.step-icon svg{width:18px;height:18px;stroke:rgba(255,255,255,.7);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.step-title{font-size:14px;font-weight:600;color:#fff;margin-bottom:8px}
.step-desc{font-size:12px;color:rgba(255,255,255,.35);line-height:1.7}

.process-cta{text-align:center}
.btn-white-outline{
  display:inline-flex;align-items:center;gap:10px;
  background:#fff;color:var(--brand);
  padding:15px 32px;border-radius:4px;
  font-size:14px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-white-outline:hover{background:var(--brand-light);gap:14px}
.btn-white-outline svg{width:18px;height:18px;fill:none;stroke:var(--brand);stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* ── REFERENCE ── */
.reference{padding:88px 5%;background:var(--off)}
.reference-inner{max-width:1100px;margin:0 auto}
.ref-grid{
  display:grid;grid-template-columns:repeat(4,1fr);
  gap:14px;margin-bottom:40px;
}
.ref-card{
  border-radius:12px;overflow:hidden;
  background:#fff;
  border:1px solid var(--border);
  cursor:pointer;
  transition:transform .3s,box-shadow .3s;
}
.ref-card:hover{transform:translateY(-5px);box-shadow:0 20px 48px rgba(15,35,55,.1)}
.ref-img{aspect-ratio:4/3;overflow:hidden}
.ref-img img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .55s}
.ref-card:hover .ref-img img{transform:scale(1.05)}
.ref-info{padding:14px 16px}
.ref-name{font-family:'Fraunces',serif;font-size:13px;font-weight:400;color:var(--text);margin-bottom:4px}
.ref-loc{font-size:11px;color:var(--stone);text-transform:uppercase;letter-spacing:.6px}

.ref-cta{text-align:center}
.btn-outline{
  display:inline-flex;align-items:center;gap:8px;
  border:1.5px solid var(--accent);color:var(--accent);
  padding:13px 28px;border-radius:4px;
  font-size:13px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-outline:hover{background:var(--accent);color:#fff;gap:12px}
.btn-outline svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* ── FOOTER ── */
footer{background:var(--brand-dark);padding:60px 5% 28px}
.footer-grid{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1fr;
  gap:48px;padding-bottom:40px;
  border-bottom:1px solid rgba(255,255,255,.07);
}
.footer-logo{height:28px;filter:invert(1);opacity:.65;margin-bottom:16px;display:block}
.footer-tagline{font-size:13px;color:rgba(255,255,255,.25);line-height:1.7;font-weight:300;max-width:220px}
.footer-col h5{font-size:11px;color:rgba(255,255,255,.25);letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;font-weight:500}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:10px}
.footer-col a{font-size:13px;color:rgba(255,255,255,.28);text-decoration:none;transition:color .2s}
.footer-col a:hover{color:rgba(255,255,255,.8)}
.footer-meta{display:flex;align-items:center;gap:6px;font-size:13px;color:rgba(255,255,255,.28)}
.footer-meta svg{width:13px;height:13px;stroke:rgba(255,255,255,.3);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}
.footer-bottom{
  max-width:1100px;margin:24px auto 0;
  display:flex;justify-content:space-between;
  font-size:11px;color:rgba(255,255,255,.18);
}

/* ── SCROLL ANIMATIONS ── */
.fade-up{opacity:0;transform:translateY(24px);transition:opacity .65s ease,transform .65s ease}
.fade-up.vis{opacity:1;transform:none}
.fade-up.d1{transition-delay:.1s}
.fade-up.d2{transition-delay:.2s}
.fade-up.d3{transition-delay:.3s}
.fade-up.d4{transition-delay:.4s}
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a href="index.html"><img class="logo-img" src="https://via.placeholder.com/120x34/1f4963/ffffff?text=LUROS" alt="LUROS"></a>
  <ul class="nav-links">
    <li><a href="#" class="act">Ponudba</a></li>
    <li><a href="#">Reference</a></li>
    <li><a href="#">O nas</a></li>
    <li><a href="#">Kontakt</a></li>
  </ul>
  <a href="#" class="nav-cta">Brezplačna ponudba</a>
</nav>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="#">Domov</a>
  <span class="bc-sep">›</span>
  <a href="#">Ponudba</a>
  <span class="bc-sep">›</span>
  <span class="bc-cur">Avtomobilski nadstreški</span>
</div>

<!-- ── HERO ── -->
<section class="cat-hero">
  <div class="hero-grid">
    <div class="fade-up">
      <div class="hero-label">Kategorija</div>
      <h1>Avtomobilski<br><em>nadstreški</em></h1>
      <p class="cat-hero-sub">Ne ponujamo le zaščite za vozilo, temveč estetsko dovršen arhitekturni element, ki se popolnoma ujame z vašim domom.</p>
      <p class="cat-hero-sub2">Naši sistemi so odporni na vse vremenske razmere, prilagodljivi po meri in izdelani iz najkakovostnejših materialov.</p>
      <a href="#" class="btn-accent">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Povpraševanje
      </a>
    </div>
    <div class="fade-up d1">
      <div class="hero-img-wrap">
        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=85" alt="Avtomobilski nadstrešek">
        <div class="hero-img-chip">
          <div class="chip-n">500<sup style="font-size:14px;opacity:.6">+</sup></div>
          <div class="chip-l">Montiranih nadstreškov</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY ── -->
<section class="why">
  <div class="why-inner">

    <div class="why-left">
      <!-- Feature 1 -->
      <div class="feature-block fade-up">
        <div class="fb-img">
          <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=200&q=80" alt="">
        </div>
        <div class="fb-text">
          <div class="fb-title">Izbrani materiali</div>
          <p class="fb-desc">Naša zaveza kakovosti stoji v središču vsakega izdelka, ki ga ponujamo. Z posebej izbranimi materiali zagotavljamo dolgotrajno delovanje, estetski videz in minimalno vzdrževanje.</p>
        </div>
      </div>
      <!-- Feature 2 -->
      <div class="feature-block fade-up d1">
        <div class="fb-img">
          <img src="https://images.unsplash.com/photo-1600210491892-03d54730d386?w=200&q=80" alt="">
        </div>
        <div class="fb-text">
          <div class="fb-title">Trajnostna rešitev</div>
          <p class="fb-desc">Zavedamo se pomena trajnostne gradnje. Zato izbiramo nadstreške, ki vrednost doma povečujejo in zmanjšujejo obremenitev okolice.</p>
        </div>
      </div>
      <!-- Feature 3 -->
      <div class="feature-block fade-up d2">
        <div class="fb-img">
          <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=200&q=80" alt="">
        </div>
        <div class="fb-text">
          <div class="fb-title">Tehnološka dovršenost</div>
          <p class="fb-desc">Z rednim spread-janjem sodobnih inovacij in tehnologij rešujemo udobje — od integriranega LED osvetljevanja do avtomatiziranega senčenja elementov.</p>
        </div>
      </div>
    </div>

    <div class="why-right fade-up d1">
      <div class="why-eyebrow">Zakaj mi</div>
      <div class="why-title">Zakaj izbrati naš<br><em>avtomobilski nadstrešek?</em></div>
      <p class="why-body">Vsak nadstrešek ni le konstrukcija, temveč pomemben del vašega bivanja. Zato k vsakemu projektu pristopamo individualno — z veliko mero pozornosti, strokovnosti in prilagodljivosti. Od svetovanja do montaže — z vami smo na vsakem koraku.</p>

    </div>

  </div>
</section>

<!-- ── PRODUCTS ── -->
<section class="products">
  <div class="products-inner">
    <div class="sec-head fade-up">
      <div class="sec-eyebrow">Naši izdelki</div>
      <div class="sec-title">Naši <em>izdelki</em></div>
      <p class="sec-sub">Naj se vaš dom ne začne šele za vrati.<br>Začnite ga graditi z dovršenim nadstreškom.</p>
    </div>

    <div class="products-grid">

      <!-- Row 1 -->
      <div class="product-card fade-up">
        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=500&q=80" alt="LJW">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije LJW</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d1">
        <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=500&q=80" alt="JM">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije JM</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d2">
        <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=500&q=80" alt="JT">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije JT</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="product-card fade-up">
        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=500&q=80" alt="PDR za 1 vozilo">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije PDR za 1 vozilo</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d1">
        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&q=80" alt="PDR za 2 ali več vozil">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije PDR – LC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d2">
        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=500&q=80" alt="PDR HC/YC">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije PDR – HC / YC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="product-card fade-up">
        <img src="https://images.unsplash.com/photo-1600210491369-e753d80a41f3?w=500&q=80" alt="VU za 1 vozilo">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VU za 1 vozilo</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d1">
        <img src="https://images.unsplash.com/photo-1598977123118-4e30ba3b5278?w=500&q=80" alt="VD+LC">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VD + LC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d2">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80" alt="VD+HC">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VD + HC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="product-card fade-up">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=500&q=80" alt="VRS za 1 vozilo">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VRS za 1 vozilo</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d1">
        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=500&q=80" alt="VRS LC za 2 ali več vozil">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VRS – LC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>
      <div class="product-card fade-up d2">
        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=500&q=80" alt="VRS HC/VC">
        <div class="pc-overlay"></div>
        <div class="pc-info">
          <div class="pc-name">Nadstrešek serije VRS – HC / VC za 2 ali več vozil</div>
          <div class="pc-arrow"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="process">
  <div class="process-inner">
    <div class="sec-head fade-up" style="margin-bottom:48px">
      <div class="sec-eyebrow">Kako delamo</div>
      <div class="sec-title" style="color:#fff">Kako poteka <em>sodelovanje?</em></div>
      <p class="sec-sub">Pri nas ste v dobrih rokah — zanesete se lahko na strokovnost, prilagodljivost in vrhunsko kakovost izdelkov, ki presegajo pričakovanja. Z vami smo na vsakem koraku — od prve ideje do končnega izdelka.</p>
    </div>

    <div class="steps-row fade-up d1">
      <div class="step-card">
        <div class="step-num">01</div>
        <div class="step-icon">
          <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <div class="step-title">Pošljite povpraševanje</div>
        <p class="step-desc">Pišite nam ali pokličite. Prijavite se enostavno — opisite vaše ideje, mere in pričakovanja.</p>
      </div>
      <div class="step-card">
        <div class="step-num">02</div>
        <div class="step-icon">
          <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </div>
        <div class="step-title">Posvet</div>
        <p class="step-desc">Strokovna ekipa preuči vaše potrebe in vam pripravi brezplačno ponudbo po vaši meri.</p>
      </div>
      <div class="step-card">
        <div class="step-num">03</div>
        <div class="step-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <div class="step-title">Izdelava</div>
        <p class="step-desc">Kakovostna izdelava vaše naročila natančno po posebnih primerih in tehničnih dokumentacijah.</p>
      </div>
      <div class="step-card">
        <div class="step-num">04</div>
        <div class="step-icon">
          <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        </div>
        <div class="step-title">Montaža</div>
        <p class="step-desc">Profesionalna in hitra montaža z minimalno motnjo ter po čistim delovnim procesom.</p>
      </div>
    </div>

    <div class="process-cta fade-up d2">
      <a href="#" class="btn-white-outline">
        Pošlji povpraševanje
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ── REFERENCE ── -->
<section class="reference">
  <div class="reference-inner">
    <div class="sec-head fade-up" style="margin-bottom:48px">
      <div class="sec-eyebrow">Naše delo</div>
      <div class="sec-title">Referenčni <em>projekti</em></div>
      <p class="sec-sub">Oglejte si naše reference in spoznajte<br>kakovost naših izdelkov v praksi.</p>
    </div>

    <div class="ref-grid fade-up d1">
      <div class="ref-card">
        <div class="ref-img"><img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80" alt=""></div>
        <div class="ref-info">
          <div class="ref-name">Nadstrešek serije MYPORT za dve vozili</div>
          <div class="ref-loc">Ljubljana</div>
        </div>
      </div>
      <div class="ref-card">
        <div class="ref-img"><img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400&q=80" alt=""></div>
        <div class="ref-info">
          <div class="ref-name">Nadstrešek serije MYPORT+ za dve vozili</div>
          <div class="ref-loc">Maribor</div>
        </div>
      </div>
      <div class="ref-card">
        <div class="ref-img"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=400&q=80" alt=""></div>
        <div class="ref-info">
          <div class="ref-name">Aluminijev nadstrešek JM za 1 vozilo</div>
          <div class="ref-loc">Kranj</div>
        </div>
      </div>
      <div class="ref-card">
        <div class="ref-img"><img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=400&q=80" alt=""></div>
        <div class="ref-info">
          <div class="ref-name">Nadstrešek serije MYPORT</div>
          <div class="ref-loc">Koper</div>
        </div>
      </div>
    </div>

    <div class="ref-cta fade-up d2">
      <a href="#" class="btn-outline">
        Oglejte si vse reference
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ── FOOTER ── -->
<footer>
  <div class="footer-grid">
    <div>
      <img class="footer-logo" src="https://via.placeholder.com/120x28/ffffff/ffffff?text=LUROS" alt="LUROS">
      <p class="footer-tagline">Premium rešitve za zunanjost vašega doma. Kakovost, ki jo čutite.</p>
    </div>
    <div class="footer-col">
      <h5>Hitre povezave</h5>
      <ul>
        <li><a href="#">Ponudba</a></li>
        <li><a href="#">Reference</a></li>
        <li><a href="#">O nas</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Naši izdelki</h5>
      <ul>
        <li><a href="#">Nadstreški za avto</a></li>
        <li><a href="#">Nadstreški za teraso</a></li>
        <li><a href="#">Pergole z lamelami</a></li>
        <li><a href="#">Pergotende in tende</a></li>
        <li><a href="#">Horizontalni screeni</a></li>
        <li><a href="#">Screeni, zip screeni</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Podatki podjetja</h5>
      <ul>
        <li>
          <div class="footer-meta">
            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Pon–Čet: 7.00–17.00
          </div>
        </li>
        <li>
          <div class="footer-meta">
            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Pet: 7.00–15.00 / Sob: 8.00–12.00
          </div>
        </li>
        <li>
          <div class="footer-meta">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.08 6.08l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +386 31 400 340
          </div>
        </li>
        <li>
          <div class="footer-meta">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@luros.si
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 LUROS. Vse pravice pridržane.</span>
    <span>Zasebnost · Pogoji uporabe</span>
  </div>
</footer>

<script>
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('vis') });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
</script>
</body>
</html>
