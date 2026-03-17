<!DOCTYPE html>
<html lang="sl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nadstrešek serije LJW — LUROS</title>
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

/* ── PRODUCT HERO ── */
.prod-hero{
  padding:72px 5% 80px;
  background:var(--white);
  border-bottom:1px solid var(--border);
  position:relative;overflow:hidden;
}
.prod-hero::after{
  content:'';position:absolute;
  bottom:-80px;right:-80px;
  width:440px;height:440px;border-radius:50%;
  background:radial-gradient(circle,rgba(31,73,99,.04) 0%,transparent 70%);
  pointer-events:none;
}
.ph-grid{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1fr;
  gap:72px;align-items:center;
}
.ph-eyebrow{
  display:flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:20px;
}
.ph-eyebrow::before{content:'';width:20px;height:2px;background:var(--brand)}
.prod-hero h1{
  font-family:'Fraunces',serif;
  font-size:clamp(32px,4vw,52px);
  font-weight:700;color:var(--text);
  line-height:1.08;letter-spacing:-.8px;
  margin-bottom:18px;
}
.prod-hero h1 em{font-style:italic;font-weight:300;color:var(--brand)}
.ph-desc{
  font-size:14px;color:var(--muted);
  line-height:1.8;font-weight:300;
  max-width:440px;margin-bottom:10px;
}
.ph-desc2{
  font-size:14px;color:var(--muted);
  line-height:1.8;font-weight:300;
  max-width:440px;margin-bottom:36px;
}
.btn-accent{
  display:inline-flex;align-items:center;gap:10px;
  background:var(--accent);color:#fff;
  padding:14px 28px;border-radius:4px;
  font-size:13px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-accent:hover{background:#2d8550;gap:14px}
.btn-accent svg{width:16px;height:16px;fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}

/* hero right: image stack */
.ph-media{position:relative}
.ph-main-img{
  border-radius:16px;overflow:hidden;
  aspect-ratio:4/3;
  box-shadow:0 24px 64px rgba(15,35,55,.12);
}
.ph-main-img img{width:100%;height:100%;object-fit:cover;display:block}
.ph-badge{
  position:absolute;top:18px;left:18px;
  background:var(--brand);color:#fff;
  border-radius:8px;padding:10px 14px;
  display:flex;align-items:center;gap:8px;
}
.ph-badge svg{width:14px;height:14px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}
.ph-badge-text{font-size:11px;font-weight:600;letter-spacing:.5px}
.ph-thumbs{
  display:flex;gap:10px;margin-top:12px;
}
.ph-thumb{
  flex:1;border-radius:10px;overflow:hidden;
  aspect-ratio:4/3;cursor:pointer;
  border:2px solid transparent;
  transition:border-color .2s,opacity .2s;
  opacity:.65;
}
.ph-thumb:hover,.ph-thumb.active{opacity:1;border-color:var(--brand)}
.ph-thumb img{width:100%;height:100%;object-fit:cover;display:block}

/* ── FEATURES SECTION ── */
.features{
  padding:80px 5%;
  background:var(--brand-pale);
  border-bottom:1px solid var(--border);
}
.features-inner{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1fr;
  gap:72px;align-items:start;
}
.feat-left{display:flex;flex-direction:column;gap:0}

.feat-block{
  display:grid;grid-template-columns:80px 1fr;
  gap:22px;align-items:start;
  padding:28px 0;
  border-bottom:1px solid var(--border);
  transition:padding-left .2s;cursor:default;
}
.feat-block:first-child{padding-top:0}
.feat-block:last-child{border:none;padding-bottom:0}
.feat-block:hover{padding-left:4px}
.feat-img{
  width:76px;height:76px;
  border-radius:12px;overflow:hidden;flex-shrink:0;
  border:1px solid var(--border);
}
.feat-img img{width:100%;height:100%;object-fit:cover;display:block}
.feat-title{
  font-size:14px;font-weight:600;
  color:var(--brand);margin-bottom:8px;
}
.feat-desc{font-size:13px;color:var(--muted);line-height:1.75;font-weight:300}

/* right: highlighted feature */
.feat-right{position:sticky;top:90px}
.feat-highlight{
  background:var(--white);
  border:1px solid var(--border);
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 12px 36px rgba(15,35,55,.06);
}
.fh-img{aspect-ratio:16/10;overflow:hidden}
.fh-img img{width:100%;height:100%;object-fit:cover;display:block}
.fh-body{padding:28px 28px 32px}
.fh-tag{
  display:inline-flex;align-items:center;gap:8px;
  font-size:10px;font-weight:600;color:var(--accent);
  letter-spacing:2px;text-transform:uppercase;margin-bottom:14px;
}
.fh-tag::before{content:'';width:14px;height:2px;background:var(--accent)}
.fh-title{
  font-family:'Fraunces',serif;
  font-size:22px;font-weight:700;
  color:var(--text);line-height:1.2;
  letter-spacing:-.3px;margin-bottom:14px;
}
.fh-desc{font-size:14px;color:var(--muted);line-height:1.8;font-weight:300}

/* ── TECH SPECS ── */
.specs{
  padding:80px 5%;
  background:var(--white);
  border-bottom:1px solid var(--border);
}
.specs-inner{max-width:1100px;margin:0 auto}
.specs-head{text-align:center;margin-bottom:48px}
.specs-eyebrow{
  display:inline-flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;
}
.specs-eyebrow::before,.specs-eyebrow::after{content:'';width:24px;height:2px;background:var(--border)}
.specs-title{
  font-family:'Fraunces',serif;
  font-size:clamp(28px,3vw,40px);
  font-weight:700;color:var(--text);
  letter-spacing:-.5px;
}
.specs-title em{font-style:italic;font-weight:300;color:var(--brand)}

.specs-grid{
  display:grid;grid-template-columns:repeat(3,1fr);
  gap:16px;margin-bottom:40px;
}
.spec-group{
  background:var(--off);border:1px solid var(--border);
  border-radius:14px;overflow:hidden;
}
.sg-head{
  background:var(--brand);
  padding:14px 20px;
  display:flex;align-items:center;gap:10px;
}
.sg-head svg{width:15px;height:15px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;opacity:.7}
.sg-head h4{font-size:12px;font-weight:600;color:#fff;letter-spacing:.5px;text-transform:uppercase}
.sg-body{padding:0}
.spec-row{
  display:grid;grid-template-columns:1fr 1fr;
  padding:13px 20px;
  border-bottom:1px solid var(--border);
  gap:8px;
}
.spec-row:last-child{border:none}
.spec-key{font-size:12px;color:var(--stone);font-weight:400}
.spec-val{font-size:12px;color:var(--text);font-weight:600;text-align:right}

/* colors group spans full width */
.spec-group.wide{grid-column:1/-1}
.colors-row{
  display:flex;gap:0;
  padding:0;
}
.color-item{
  flex:1;padding:16px 20px;
  display:flex;align-items:center;gap:12px;
  border-right:1px solid var(--border);
  transition:background .2s;cursor:pointer;
}
.color-item:last-child{border:none}
.color-item:hover{background:var(--brand-pale)}
.color-swatch{
  width:28px;height:28px;border-radius:6px;
  border:1px solid rgba(0,0,0,.12);flex-shrink:0;
}
.color-name{font-size:12px;color:var(--text);font-weight:500}
.color-note{font-size:10px;color:var(--stone);margin-top:2px}

.specs-note{
  text-align:center;font-size:12px;color:var(--stone);
  margin-bottom:36px;line-height:1.7;
}
.specs-cta{text-align:center}

/* ── GALLERY ── */
.gallery{
  padding:80px 5%;
  background:var(--off);
  border-bottom:1px solid var(--border);
}
.gallery-inner{max-width:1100px;margin:0 auto}
.gallery-head{text-align:center;margin-bottom:40px}

.gallery-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  grid-template-rows:auto auto;
  gap:12px;
}
.gal-item{
  border-radius:12px;overflow:hidden;
  cursor:pointer;position:relative;
}
.gal-item img{
  width:100%;height:100%;object-fit:cover;display:block;
  transition:transform .6s cubic-bezier(.4,0,.2,1);
  aspect-ratio:4/3;
}
.gal-item:hover img{transform:scale(1.05)}
.gal-item::after{
  content:'';position:absolute;inset:0;
  background:rgba(15,35,55,0);
  transition:background .3s;
  border-radius:12px;
}
.gal-item:hover::after{background:rgba(15,35,55,.12)}
.gal-zoom{
  position:absolute;top:50%;left:50%;
  transform:translate(-50%,-50%) scale(0);
  width:44px;height:44px;border-radius:50%;
  background:rgba(255,255,255,.9);
  display:flex;align-items:center;justify-content:center;
  transition:transform .25s;z-index:2;
}
.gal-item:hover .gal-zoom{transform:translate(-50%,-50%) scale(1)}
.gal-zoom svg{width:18px;height:18px;stroke:var(--brand);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* lightbox */
.lightbox{
  position:fixed;inset:0;z-index:500;
  background:rgba(8,18,28,.95);
  display:flex;align-items:center;justify-content:center;
  opacity:0;pointer-events:none;transition:opacity .3s;
}
.lightbox.open{opacity:1;pointer-events:all}
.lb-img{max-width:90vw;max-height:86vh;border-radius:8px;display:block}
.lb-close{
  position:absolute;top:20px;right:24px;
  width:44px;height:44px;border-radius:50%;
  border:1px solid rgba(255,255,255,.2);background:transparent;
  cursor:pointer;display:flex;align-items:center;justify-content:center;
  transition:background .2s;
}
.lb-close:hover{background:rgba(255,255,255,.1)}
.lb-close svg{width:18px;height:18px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round}
.lb-nav{
  position:absolute;top:50%;
  width:48px;height:48px;border-radius:50%;
  border:1px solid rgba(255,255,255,.2);background:transparent;
  cursor:pointer;display:flex;align-items:center;justify-content:center;
  transform:translateY(-50%);transition:background .2s;
}
.lb-nav:hover{background:rgba(255,255,255,.1)}
.lb-nav svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.lb-prev{left:20px}
.lb-next{right:20px}

/* ── RELATED PRODUCTS ── */
.related{padding:80px 5%;background:var(--white);border-bottom:1px solid var(--border)}
.related-inner{max-width:1100px;margin:0 auto}
.related-head{text-align:center;margin-bottom:40px}

.related-grid{
  display:grid;grid-template-columns:repeat(3,1fr);gap:16px;
}
.rel-card{
  border-radius:12px;overflow:hidden;
  border:1px solid var(--border);
  cursor:pointer;transition:transform .3s,box-shadow .3s;
  background:var(--off);
}
.rel-card:hover{transform:translateY(-5px);box-shadow:0 18px 48px rgba(15,35,55,.1)}
.rel-img{aspect-ratio:4/3;overflow:hidden;position:relative}
.rel-img img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .55s}
.rel-card:hover .rel-img img{transform:scale(1.05)}
.rel-overlay{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(10,24,38,.7) 0%,transparent 55%);
}
.rel-name-ov{
  position:absolute;bottom:14px;left:14px;
  font-family:'Fraunces',serif;font-size:14px;
  font-weight:400;color:#fff;
}
.rel-info{padding:16px}
.rel-desc{font-size:12px;color:var(--muted);line-height:1.65;margin-bottom:12px}
.rel-link{
  display:inline-flex;align-items:center;gap:6px;
  font-size:12px;font-weight:600;color:var(--brand);
  text-decoration:none;transition:gap .2s;
}
.rel-link:hover{gap:10px}
.rel-link svg{width:12px;height:12px;stroke:currentColor;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}

/* ── FAQ + CTA ── */
.faq-section{
  padding:80px 5%;
  background:var(--brand-pale);
  border-bottom:1px solid var(--border);
}
.faq-inner{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1.4fr;
  gap:72px;align-items:start;
}
.faq-left{}
.faq-eyebrow{
  display:flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:20px;
}
.faq-eyebrow::before{content:'';width:20px;height:2px;background:var(--brand)}
.faq-title{
  font-family:'Fraunces',serif;
  font-size:clamp(24px,2.5vw,34px);
  font-weight:700;color:var(--text);
  line-height:1.2;letter-spacing:-.4px;
  margin-bottom:16px;
}
.faq-sub{
  font-size:14px;color:var(--muted);
  line-height:1.8;font-weight:300;margin-bottom:36px;
}
.btn-accent-sm{
  display:inline-flex;align-items:center;gap:8px;
  background:var(--accent);color:#fff;
  padding:13px 24px;border-radius:4px;
  font-size:13px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-accent-sm:hover{background:#2d8550;gap:12px}
.btn-accent-sm svg{width:15px;height:15px;fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

.faq-right{}
.faq-featured{
  background:var(--white);border:1px solid var(--border);
  border-radius:14px;padding:24px 26px;
  margin-bottom:16px;
  box-shadow:0 4px 20px rgba(15,35,55,.05);
}
.faq-featured-q{
  font-size:15px;font-weight:600;color:var(--brand);
  margin-bottom:14px;line-height:1.4;
}
.faq-featured-a{
  font-size:13px;color:var(--muted);line-height:1.8;font-weight:300;
}

.faq-list{display:flex;flex-direction:column;gap:0}
.faq-item{
  border:1px solid var(--border);border-radius:10px;
  overflow:hidden;margin-bottom:8px;
  background:var(--white);
}
.faq-q{
  display:flex;justify-content:space-between;align-items:center;
  padding:18px 20px;cursor:pointer;
  transition:background .2s;
  font-size:14px;font-weight:500;color:var(--text);
  gap:12px;
}
.faq-q:hover{background:var(--brand-pale)}
.faq-icon{
  width:28px;height:28px;border-radius:50%;
  border:1.5px solid var(--border);flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  transition:all .25s;
}
.faq-item.open .faq-icon{background:var(--brand);border-color:var(--brand)}
.faq-icon svg{width:12px;height:12px;stroke:var(--stone);fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;transition:stroke .25s,transform .25s}
.faq-item.open .faq-icon svg{stroke:#fff;transform:rotate(45deg)}
.faq-a{
  max-height:0;overflow:hidden;
  transition:max-height .35s ease,padding .35s ease;
  font-size:13px;color:var(--muted);line-height:1.8;font-weight:300;
  padding:0 20px;
}
.faq-item.open .faq-a{max-height:200px;padding:0 20px 18px}

/* ── REFERENCE ── */
.reference{padding:80px 5%;background:var(--off)}
.reference-inner{max-width:1100px;margin:0 auto}
.ref-grid{
  display:grid;grid-template-columns:repeat(4,1fr);
  gap:14px;margin-bottom:40px;
}
.ref-card{
  border-radius:12px;overflow:hidden;
  background:#fff;border:1px solid var(--border);
  cursor:pointer;transition:transform .3s,box-shadow .3s;
}
.ref-card:hover{transform:translateY(-5px);box-shadow:0 20px 48px rgba(15,35,55,.1)}
.ref-img{aspect-ratio:4/3;overflow:hidden}
.ref-img img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .55s}
.ref-card:hover .ref-img img{transform:scale(1.05)}
.ref-info{padding:14px 16px}
.ref-name{font-family:'Fraunces',serif;font-size:13px;font-weight:400;color:var(--text);margin-bottom:4px}
.ref-loc{font-size:11px;color:var(--stone);text-transform:uppercase;letter-spacing:.6px}
.ref-cta{text-align:center}
.btn-outline-acc{
  display:inline-flex;align-items:center;gap:8px;
  border:1.5px solid var(--accent);color:var(--accent);
  padding:13px 28px;border-radius:4px;
  font-size:13px;font-weight:600;
  text-decoration:none;transition:all .2s;
}
.btn-outline-acc:hover{background:var(--accent);color:#fff;gap:12px}
.btn-outline-acc svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

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

/* shared heading helpers */
.sec-eyebrow{
  display:inline-flex;align-items:center;gap:10px;
  font-size:10px;font-weight:600;color:var(--brand);
  letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;
}
.sec-eyebrow::before,.sec-eyebrow::after{content:'';width:24px;height:2px;background:var(--border)}
.sec-title{
  font-family:'Fraunces',serif;
  font-size:clamp(28px,3vw,40px);
  font-weight:700;color:var(--text);
  letter-spacing:-.5px;
}
.sec-title em{font-style:italic;font-weight:300;color:var(--brand)}
.sec-sub{font-size:14px;color:var(--muted);font-weight:300;line-height:1.7;margin-top:10px}

/* ── ANIMATIONS ── */
.fade-up{opacity:0;transform:translateY(22px);transition:opacity .65s ease,transform .65s ease}
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
  <a href="#">Domov</a><span class="bc-sep">›</span>
  <a href="#">Ponudba</a><span class="bc-sep">›</span>
  <a href="#">Avtomobilski nadstreški</a><span class="bc-sep">›</span>
  <span class="bc-cur">Nadstrešek serije LJW</span>
</div>

<!-- ── PRODUCT HERO ── -->
<section class="prod-hero">
  <div class="ph-grid">
    <div class="fade-up">
      <div class="ph-eyebrow">Avtomobilski nadstrešek</div>
      <h1>Nadstrešek<br>serije <em>LJW</em></h1>
      <p class="ph-desc">Konstrukcija je sestavljena iz aluminijastih profilov ter trdne polikarbonaste kritine. Okvir nadstrešeka je del konstrukcije in ni posebej navarjen.</p>
      <p class="ph-desc2">Nadstrešek je primeren za 1 vozilo, prilagodljiv po meri ter odporjen na vse vremenske razmere skozi celotno leto.</p>
      <a href="#" class="btn-accent">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Povpraševanje
      </a>
    </div>

    <div class="fade-up d1">
      <div class="ph-media">
        <div class="ph-main-img">
          <img id="mainImg" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=85" alt="LJW">
        </div>
        <div class="ph-badge">
          <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          <span class="ph-badge-text">3 leta garancije</span>
        </div>
        <div class="ph-thumbs">
          <div class="ph-thumb active" onclick="swapImg(this,'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=85')">
            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=200&q=70" alt="">
          </div>
          <div class="ph-thumb" onclick="swapImg(this,'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=85')">
            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=200&q=70" alt="">
          </div>
          <div class="ph-thumb" onclick="swapImg(this,'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=800&q=85')">
            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=200&q=70" alt="">
          </div>
          <div class="ph-thumb" onclick="swapImg(this,'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=800&q=85')">
            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=200&q=70" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── FEATURES ── -->
<section class="features">
  <div class="features-inner">

    <div class="feat-left">
      <div class="feat-block fade-up">
        <div class="feat-img">
          <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=200&q=80" alt="">
        </div>
        <div>
          <div class="feat-title">V celoti aluminijasta konstrukcija</div>
          <p class="feat-desc">Aluminijasta osnova zagotavlja popolno stabilnost, ker aluminij ne zardeva in je izjemno odporen proti koroziji. Vsak profil je točno prilagojen merim vašega parkirnega mesta.</p>
        </div>
      </div>
      <div class="feat-block fade-up d1">
        <div class="feat-img">
          <img src="https://images.unsplash.com/photo-1600210491892-03d54730d386?w=200&q=80" alt="">
        </div>
        <div>
          <div class="feat-title">Diskretna paletna</div>
          <p class="feat-desc">Estetika je pri nas enako pomembna kot funkcionalnost. Zato so vsi nadstreški na voljo v široki paleti RAL barv, ki se brezhibno ujamejo z barvo fasade ali okvirjev.</p>
        </div>
      </div>
      <div class="feat-block fade-up d2">
        <div class="feat-img">
          <img src="https://images.unsplash.com/photo-1598977123118-4e30ba3b5278?w=200&q=80" alt="">
        </div>
        <div>
          <div class="feat-title">Brez varjenja</div>
          <p class="feat-desc">Vijačena montaža brez varjenja zagotavlja čiste spoje in dolgoletno odpornost. Vsi spoji so zavarovani pred vdorom vlage in se ne raztezajo pri temperaturnih razlikah.</p>
        </div>
      </div>
    </div>

    <div class="feat-right fade-up d1">
      <div class="feat-highlight">
        <div class="fh-img">
          <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=700&q=85" alt="Polikarbonata kritina">
        </div>
        <div class="fh-body">
          <div class="fh-tag">Ključna prednost</div>
          <div class="fh-title">Polna polikarbonatna kritina — 100% UV zaščita</div>
          <p class="fh-desc">Polna polikarbonatna plošča učinkovito blokira UV žarke, zato se prostor pod nadstreškom ne pregreva. Poleg tega 80% loči svetlobo, vozila ali tudi predmetov pod njo osvetljuje z naravnim svetlom, hkrati pa prepušča prijazno svetlobo.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ── TECHNICAL SPECS ── -->
<section class="specs">
  <div class="specs-inner">
    <div class="specs-head fade-up">
      <div class="specs-eyebrow">Specifikacije</div>
      <div class="specs-title">Tehnični <em>podatki</em></div>
    </div>

    <div class="specs-grid fade-up d1">

      <!-- Zaščita -->
      <div class="spec-group">
        <div class="sg-head">
          <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <h4>Zaščita</h4>
        </div>
        <div class="sg-body">
          <div class="spec-row">
            <span class="spec-key">Obremenitev snega</span>
            <span class="spec-val">150 kg/m² – 400 kg/m²</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Dimenzijska stabilnost</span>
            <span class="spec-val">–40°C do +120°C</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">UV zaščita</span>
            <span class="spec-val">100%</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Vodoodpornost</span>
            <span class="spec-val">IP 54</span>
          </div>
        </div>
      </div>

      <!-- Velikost -->
      <div class="spec-group">
        <div class="sg-head">
          <svg viewBox="0 0 24 24"><path d="M21 21H3"/><path d="M21 3v18"/><path d="M3 3h18"/><path d="M3 21V3"/></svg>
          <h4>Velikost</h4>
        </div>
        <div class="sg-body">
          <div class="spec-row" style="grid-template-columns:auto 1fr 1fr 60px;gap:6px;font-size:11px;background:var(--off);padding:10px 20px;">
            <span class="spec-key" style="font-weight:600">Tip</span>
            <span class="spec-key" style="text-align:center;font-weight:600">Širina</span>
            <span class="spec-key" style="text-align:center;font-weight:600">Globina</span>
            <span class="spec-key" style="text-align:right;font-weight:600">Vozil</span>
          </div>
          <div class="spec-row" style="grid-template-columns:auto 1fr 1fr 60px;gap:6px;font-size:11px">
            <span class="spec-key">Serija 1</span>
            <span class="spec-val" style="text-align:center">340 cm – 460 cm</span>
            <span class="spec-val" style="text-align:center">480 cm – 600 cm</span>
            <span class="spec-val">1</span>
          </div>
          <div class="spec-row" style="grid-template-columns:auto 1fr 1fr 60px;gap:6px;font-size:11px">
            <span class="spec-key">Serija 2</span>
            <span class="spec-val" style="text-align:center">600 cm – 700 cm</span>
            <span class="spec-val" style="text-align:center">480 cm – 600 cm</span>
            <span class="spec-val">2+</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Material okvirja</span>
            <span class="spec-val">Aluminij</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Kritina</span>
            <span class="spec-val">Polikarbonat 16 mm</span>
          </div>
        </div>
      </div>

      <!-- Montaža -->
      <div class="spec-group">
        <div class="sg-head">
          <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          <h4>Montaža</h4>
        </div>
        <div class="sg-body">
          <div class="spec-row">
            <span class="spec-key">Pritrditev</span>
            <span class="spec-val">Vijačena</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Stebri</span>
            <span class="spec-val">Aluminij Ø 80 mm</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Montažni čas</span>
            <span class="spec-val">1 delovni dan</span>
          </div>
          <div class="spec-row">
            <span class="spec-key">Garancija</span>
            <span class="spec-val">3 leta</span>
          </div>
        </div>
      </div>

      <!-- Barve — full width -->
      <div class="spec-group wide fade-up d2">
        <div class="sg-head">
          <svg viewBox="0 0 24 24"><circle cx="13.5" cy="6.5" r=".5"/><circle cx="17.5" cy="10.5" r=".5"/><circle cx="8.5" cy="7.5" r=".5"/><circle cx="6.5" cy="12.5" r=".5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
          <h4>Barva</h4>
        </div>
        <div class="sg-body">
          <div class="colors-row">
            <div class="color-item">
              <div class="color-swatch" style="background:#e8e0d5;border-color:#ccc"></div>
              <div><div class="color-name">Bela</div><div class="color-note">RAL 9010</div></div>
            </div>
            <div class="color-item">
              <div class="color-swatch" style="background:#b5b5b5"></div>
              <div><div class="color-name">Urban Grey</div><div class="color-note">RAL 7040</div></div>
            </div>
            <div class="color-item">
              <div class="color-swatch" style="background:#6e6e6e"></div>
              <div><div class="color-name">Dark Silv.</div><div class="color-note">RAL 7016</div></div>
            </div>
            <div class="color-item">
              <div class="color-swatch" style="background:#2e2e2e"></div>
              <div><div class="color-name">Antracit</div><div class="color-note">RAL 7021</div></div>
            </div>
            <div class="color-item" style="border:none">
              <div class="color-swatch" style="background:linear-gradient(135deg,#e8e0d5 25%,#b5b5b5 25%,#b5b5b5 50%,#6e6e6e 50%,#6e6e6e 75%,#2e2e2e 75%);border-color:#ccc"></div>
              <div><div class="color-name">Po naročilu</div><div class="color-note">Vse RAL barve</div></div>
            </div>
          </div>
          <p style="font-size:11px;color:var(--stone);padding:12px 20px;border-top:1px solid var(--border)">Najpogostejše barve so LA, Urban grey.</p>
        </div>
      </div>

    </div>

    <p class="specs-note fade-up">Mere in tehnični podatki so informativni. Točne mere se določijo ob ogledu in posvetu.</p>
    <div class="specs-cta fade-up d1">
      <a href="#" class="btn-accent">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Pošlji povpraševanje
      </a>
    </div>
  </div>
</section>

<!-- ── GALLERY ── -->
<section class="gallery">
  <div class="gallery-inner">
    <div class="gallery-head fade-up">
      <div class="sec-eyebrow">Fotogalerija</div>
      <div class="sec-title"><em>Galerija</em></div>
    </div>

    <div class="gallery-grid fade-up d1">
      <div class="gal-item" onclick="openLB(0)">
        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
      <div class="gal-item" onclick="openLB(1)">
        <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
      <div class="gal-item" onclick="openLB(2)">
        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
      <div class="gal-item" onclick="openLB(3)">
        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
      <div class="gal-item" onclick="openLB(4)">
        <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
      <div class="gal-item" onclick="openLB(5)">
        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=600&q=85" alt="">
        <div class="gal-zoom"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
      </div>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="lb-close" onclick="closeLB()"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
  <button class="lb-nav lb-prev" onclick="navLB(-1)"><svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg></button>
  <img class="lb-img" id="lbImg" src="" alt="">
  <button class="lb-nav lb-next" onclick="navLB(1)"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></button>
</div>

<!-- ── RELATED PRODUCTS ── -->
<section class="related">
  <div class="related-inner">
    <div class="related-head fade-up">
      <div class="sec-eyebrow">Odkrijte še</div>
      <div class="sec-title">Sorodni <em>izdelki</em></div>
      <p class="sec-sub">Naj se vaš dom ne začne šele za vrati.<br>Začnite ga graditi z dovršenim nadstreškom.</p>
    </div>
    <div class="related-grid fade-up d1">
      <div class="rel-card">
        <div class="rel-img">
          <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=500&q=80" alt="LJW">
          <div class="rel-overlay"></div>
          <div class="rel-name-ov">Nadstrešek serije LJW</div>
        </div>
        <div class="rel-info">
          <p class="rel-desc">Elegantna aluminijasta konstrukcija z UV-zaščitno polikarbonatno kritino za 1 vozilo.</p>
          <a href="#" class="rel-link">Ogled izdelka <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
      </div>
      <div class="rel-card">
        <div class="rel-img">
          <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=500&q=80" alt="JM">
          <div class="rel-overlay"></div>
          <div class="rel-name-ov">Nadstrešek serije JM</div>
        </div>
        <div class="rel-info">
          <p class="rel-desc">Robustna serija z ojačano konstrukcijo, primerna za težje snežne obremenitve.</p>
          <a href="#" class="rel-link">Ogled izdelka <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
      </div>
      <div class="rel-card">
        <div class="rel-img">
          <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&q=80" alt="JT">
          <div class="rel-overlay"></div>
          <div class="rel-name-ov">Nadstrešek serije JT</div>
        </div>
        <div class="rel-info">
          <p class="rel-desc">Sodoben dizajn z ravno linijo strehe — idealen za modernejše arhitekturne sloge.</p>
          <a href="#" class="rel-link">Ogled izdelka <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── FAQ ── -->
<section class="faq-section">
  <div class="faq-inner">
    <div class="faq-left fade-up">
      <div class="faq-eyebrow">Imate vprašanja</div>
      <div class="faq-title">Vas zanima več o avtomobilskih nadstreških?</div>
      <p class="faq-sub">Preberite ključna vprašanja, ki smo jih pripravili samo za vas.</p>
      <a href="#" class="btn-accent-sm">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Pošlji povpraševanje
      </a>
    </div>

    <div class="faq-right fade-up d1">
      <div class="faq-featured">
        <div class="faq-featured-q">Kaj je polikarbonata kritina?</div>
        <p class="faq-featured-a">Polna polikarbonatna plošča učinkovito blokira UV žarke in in-frardeče sevanje, zato se prostor pod nadstreškom ne pregreva. Poleg tega 80% loči svetlobo, vozila ali tudi predmetov pod njo osvetljuje z naravnim svetlom samovzamcem. Hkrati pa prepušča prijazno svetlobo.</p>
      </div>

      <div class="faq-list">
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">
            Kaj je polikarbonata kritina?
            <div class="faq-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
          </div>
          <div class="faq-a">Polikarbonat je sodobni plastični material z izjemnimi mehanskimi lastnostmi — lahek, trden in odporen na udarce. Naši nadstreški uporabljajo večslojni polikarbonat debeline 16 mm za optimalno zaščito.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">
            Lorem ipsum dolor sit amet?
            <div class="faq-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
          </div>
          <div class="faq-a">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">
            Lorem ipsum dolor sit amet dolor sit?
            <div class="faq-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
          </div>
          <div class="faq-a">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── REFERENCE ── -->
<section class="reference">
  <div class="reference-inner">
    <div class="sec-head fade-up" style="text-align:center;margin-bottom:48px">
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
      <a href="#" class="btn-outline-acc">
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
        <li><div class="footer-meta"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>Pon–Čet: 7.00–17.00</div></li>
        <li><div class="footer-meta"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>Pet: 7.00–15.00 / Sob: 8.00–12.00</div></li>
        <li><div class="footer-meta"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.08 6.08l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+386 31 400 340</div></li>
        <li><div class="footer-meta"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>info@luros.si</div></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 LUROS. Vse pravice pridržane.</span>
    <span>Zasebnost · Pogoji uporabe · Piškotki</span>
  </div>
</footer>

<script>
// ── Scroll animations
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('vis') });
}, { threshold: 0.08 });
document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

// ── Hero thumbnail swap
function swapImg(el, src) {
  document.getElementById('mainImg').src = src;
  document.querySelectorAll('.ph-thumb').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

// ── Lightbox
const lbImgs = [
  'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1200&q=90',
  'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=90',
  'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200&q=90',
  'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1200&q=90',
  'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=1200&q=90',
  'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=90',
];
let lbIdx = 0;
function openLB(i) {
  lbIdx = i;
  document.getElementById('lbImg').src = lbImgs[i];
  document.getElementById('lightbox').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeLB() {
  document.getElementById('lightbox').classList.remove('open');
  document.body.style.overflow = '';
}
function navLB(dir) {
  lbIdx = (lbIdx + dir + lbImgs.length) % lbImgs.length;
  document.getElementById('lbImg').src = lbImgs[lbIdx];
}
document.addEventListener('keydown', e => {
  if(e.key === 'Escape') closeLB();
  if(e.key === 'ArrowLeft') navLB(-1);
  if(e.key === 'ArrowRight') navLB(1);
});
document.getElementById('lightbox').addEventListener('click', e => {
  if(e.target === e.currentTarget) closeLB();
});

// ── FAQ accordion
function toggleFaq(item) {
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if(!isOpen) item.classList.add('open');
}
</script>
</body>
</html>
