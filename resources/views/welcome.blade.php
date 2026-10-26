<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>BeninBITS Technologies — Software built in Nairobi, Kenya</title>
<meta name="theme-color" content="#0F172A">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
@font-face{font-family:"Futura LT";src:url("fonts/futura-lt/FuturaLT.ttf") format("truetype");font-weight:100 900;font-style:normal;font-display:swap}
:root{
  --ground:#0F172A; --deep:#0B111E; --ink:#ffffff; --soft:#9aa6bd; --accent:#84CC16; --red:#8B2FC9; --purple:#A855F7; --cyan:#06B6D4;
  --pad:clamp(1.25rem,4vw,3.5rem);
  box-sizing:border-box; padding-top:env(safe-area-inset-top,0px); padding-bottom:env(safe-area-inset-bottom,0px);
  --header-bg:#111; --btn-bg:#111; --btn-hover-bg:#000; --border-subtle:rgba(255,255,255,.25); --border-strong:rgba(255,255,255,.3); --card-bg:#f4f6fb; --chrome-bg:var(--deep); --code-ln:#4b587a;
}
[data-theme="light"]{
  --ground:#F8FAFC; --deep:#EEF2F6; --ink:#0F172A; --soft:#475569; --accent:#65A30D; --red:#8B2FC9; --purple:#7C3AED; --cyan:#0891B2;
  --header-bg:#ffffff; --btn-bg:#0F172A; --btn-hover-bg:#1E293B; --border-subtle:rgba(0,0,0,.1); --border-strong:rgba(0,0,0,.15); --card-bg:#ffffff; --chrome-bg:#E2E8F0; --code-ln:#94A3B8;
}
html{scroll-padding-top:env(safe-area-inset-top,0px);scroll-behavior:smooth}
*,*::before,*::after{box-sizing:inherit}
body{margin:0;background:var(--ground);color:var(--ink);font-family:"Futura LT",Inter,system-ui,sans-serif;font-size:1.125rem;line-height:1.55;transition:background .3s,color .3s;overflow-x:hidden}
body.nav-locked{overflow:hidden}
a{color:inherit}
a:focus-visible,button:focus-visible{outline:3px solid var(--accent);outline-offset:4px}
header{position:fixed;top:calc(env(safe-area-inset-top,0px) + 1rem);left:50%;transform:translateX(-50%);z-index:50;width:max-content;max-width:calc(100% - 1.5rem);display:flex;align-items:center;justify-content:space-between;gap:clamp(1rem,4vw,3rem);padding:.95rem 1.5rem;background:var(--header-bg);border-radius:.3rem;font-weight:500;font-size:.95rem;transition:background .3s}
header svg{display:block;width:1.4rem;height:1.4rem}
header nav{display:flex;gap:1.75rem}
header a{text-decoration:none}
header a:hover{text-decoration:underline;text-underline-offset:6px}

/* ============ LOGO ============ */
header .logo,
.fullmenu-head .logo{
  display:inline-flex;
  align-items:center;
  gap:.5rem;
  line-height:1;
  text-decoration:none;
  min-height:1.8rem;
}
header .logo:hover{text-decoration:none}
header .logo img,
.fullmenu-head .logo img{
  display:block;
  height:1.8rem;
  width:auto;
  object-fit:contain;
}
/* Show the WHITE logo on dark bg (default) */
header .logo .logo-light,
.fullmenu-head .logo .logo-light{display:block}
/* Hide the DARK logo on dark bg */
header .logo .logo-dark,
.fullmenu-head .logo .logo-dark{display:none}
/* Swap in light theme: show DARK logo, hide WHITE */
[data-theme="light"] header .logo .logo-light,
[data-theme="light"] .fullmenu-head .logo .logo-light{display:none}
[data-theme="light"] header .logo .logo-dark,
[data-theme="light"] .fullmenu-head .logo .logo-dark{display:block}

/* Text fallback if the image fails to load */
.logo-fallback{
  display:none;
  font-family:"Futura LT",Montserrat,Inter,sans-serif;
  font-weight:800;
  font-size:1.15rem;
  letter-spacing:-.02em;
  line-height:1;
  color:var(--ink);
  white-space:nowrap;
}
.fullmenu-head .logo-fallback{font-size:1.1rem}

.theme-toggle{display:flex;align-items:center;justify-content:center;width:2.2rem;height:2.2rem;padding:0;border:1px solid var(--border-strong);border-radius:50%;background:transparent;color:var(--ink);cursor:pointer;transition:background .25s,color .25s,border-color .25s;flex-shrink:0}
.theme-toggle:hover{background:var(--accent);border-color:var(--accent);color:#0B111E}
.theme-toggle svg{width:1.15rem;height:1.15rem;display:block}
.theme-toggle .icon-sun{display:none}
[data-theme="light"] .theme-toggle .icon-sun{display:block}
[data-theme="light"] .theme-toggle .icon-moon{display:none}

.menu-toggle{display:none;align-items:center;justify-content:center;width:2.4rem;height:2.4rem;padding:0;border:1px solid var(--border-strong);border-radius:.35rem;background:transparent;color:var(--ink);cursor:pointer;flex-shrink:0}
.menu-toggle svg{width:1.2rem;height:1.2rem;display:block}

/* ============================================================
   FULL-SCREEN MOBILE MENU
   ============================================================ */
.fullmenu{
  position:fixed;inset:0;z-index:90;background:var(--header-bg);color:var(--ink);
  display:flex;flex-direction:column;
  padding:calc(env(safe-area-inset-top,0px) + 1rem) var(--pad) calc(env(safe-area-inset-bottom,0px) + 1.5rem);
  opacity:0;visibility:hidden;transform:translateY(-8px);
  transition:opacity .3s ease,transform .35s cubic-bezier(.2,.8,.2,1),visibility .3s;
  overflow-y:auto;overscroll-behavior:contain;
}
.fullmenu.open{opacity:1;visibility:visible;transform:translateY(0)}
.fullmenu-head{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.5rem 0 1.25rem;border-bottom:1px solid var(--border-subtle)}
.fullmenu-head .logo img{height:1.7rem}
.fullmenu-head .fullmenu-close{display:flex;align-items:center;justify-content:center;width:2.6rem;height:2.6rem;padding:0;border:1px solid var(--border-strong);border-radius:.4rem;background:transparent;color:var(--ink);cursor:pointer;flex-shrink:0}
.fullmenu-head .fullmenu-close svg{width:1.3rem;height:1.3rem;display:block}
.fullmenu-head .fullmenu-close:hover{background:var(--accent);border-color:var(--accent);color:#0B111E}
.fullmenu nav{display:flex;flex-direction:column;flex:1;justify-content:center;gap:.35rem;padding:2rem 0;margin:0}
.fullmenu nav a{display:flex;align-items:baseline;justify-content:space-between;gap:1rem;padding:1rem 0;font-family:"Futura LT",Montserrat,Inter,sans-serif;font-size:clamp(1.9rem,9vw,3rem);font-weight:700;letter-spacing:-.02em;line-height:1.1;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--border-subtle);transition:color .2s,padding-left .25s}
.fullmenu nav a:hover,.fullmenu nav a:focus-visible{color:var(--accent);padding-left:.4rem}
.fullmenu nav a::after{content:"→";font-size:1.3rem;font-weight:400;opacity:.5;transition:transform .25s,opacity .25s;align-self:center}
.fullmenu nav a:hover::after{opacity:1;transform:translateX(.3rem)}
.fullmenu nav a:last-child{border-bottom:none}
.fullmenu-foot{display:flex;flex-direction:column;gap:.65rem;padding-top:1.5rem;border-top:1px solid var(--border-subtle);font-size:.95rem;color:var(--soft)}
.fullmenu-foot a{display:inline-flex;align-items:center;gap:.6rem;color:var(--ink);text-decoration:none;padding:.4rem 0;font-size:1rem;font-weight:500}
.fullmenu-foot a:hover{color:var(--accent)}
.fullmenu-foot a svg{width:1.05rem;height:1.05rem;display:block}
.fullmenu-foot .loc{margin-top:.25rem;font-size:.85rem}

/* ============================================================
   HERO — bigger type + staggered entrance animations
   ============================================================ */
.hero{position:relative;min-height:100vh;min-height:100svh;display:flex;flex-direction:column;justify-content:center;padding:6rem var(--pad);overflow:hidden}
.hero>*:not(.drape){position:relative;z-index:2}
.hero .take{position:absolute;z-index:4}

/* Hero logo — sits just above the headline */
.hero-logo{
  display:inline-flex;
  align-items:center;
  gap:.6rem;
  margin:0 0 1.5rem;
  line-height:1;
  min-height:clamp(2.4rem,4.6vw,3.8rem);
  animation:fadeUp .9s cubic-bezier(.2,.8,.2,1) .15s both;
}
.hero-logo img{
  display:block;
  height:clamp(2.4rem,4.6vw,3.8rem);
  width:auto;
  max-width:min(70vw,32rem);
  object-fit:contain;
}
/* Show the WHITE logo on dark bg (default) */
.hero-logo .logo-light{display:block}
.hero-logo .logo-dark{display:none}
/* Swap in light theme */
[data-theme="light"] .hero-logo .logo-light{display:none}
[data-theme="light"] .hero-logo .logo-dark{display:block}
/* Text fallback */
.hero-logo .logo-fallback{
  display:none;
  font-family:"Futura LT",Montserrat,Inter,sans-serif;
  font-weight:800;
  font-size:clamp(1.4rem,3.2vw,2.4rem);
  letter-spacing:-.02em;
  line-height:1;
  color:var(--ink);
  white-space:nowrap;
}

.hero h1{
  margin:0;
  font-weight:700;
  font-size:clamp(3rem,7.4vw,6.8rem);
  line-height:1.02;
  letter-spacing:-.035em;
}
.hero h1 span{display:block;overflow:hidden;padding-bottom:.08em}
.hero h1 span i{
  display:block;font-style:normal;
  transform:translateY(110%);
  animation:rise 1.05s cubic-bezier(.2,.8,.2,1) .35s forwards;
}
.hero h1 span:nth-child(2) i{animation-delay:.47s}
.hero h1 span:nth-child(3) i{animation-delay:.59s}
@keyframes rise{to{transform:none}}

.hero p{
  max-width:32ch;
  margin:2.25rem 0 0;
  font-size:clamp(1.4rem,2.8vw,2.25rem);
  line-height:1.28;
  font-weight:400;
}

@keyframes fadeUp{
  from{opacity:0;transform:translateY(1.5rem)}
  to{opacity:1;transform:none}
}
.hero > p:not(.meta){animation:fadeUp .9s cubic-bezier(.2,.8,.2,1) .95s both}
.hero .btn{animation:fadeUp .9s cubic-bezier(.2,.8,.2,1) 1.1s both}
.hero .meta{animation:fadeUp .9s cubic-bezier(.2,.8,.2,1) 1.25s both}
.hero .take{animation:fadeUp .9s cubic-bezier(.2,.8,.2,1) 1.35s both}
.hero .code-stage{animation:in 1s cubic-bezier(.2,.8,.2,1) .5s both}

.btn{display:inline-flex;align-items:center;gap:1rem;margin-top:2.75rem;padding:1.2rem 1.5rem;background:var(--btn-bg);color:var(--ink);border-radius:.25rem;text-decoration:none;font-weight:600;font-size:1.05rem;width:fit-content;transition:background .25s,color .25s,transform .25s}
.btn:hover{background:var(--btn-hover-bg);color:var(--accent);transform:translateY(-2px)}
.hero .meta{position:absolute;left:var(--pad);bottom:2rem;margin:0;display:flex;flex-wrap:wrap;gap:.5rem 2rem;font-size:.95rem;color:var(--soft)}
.hero .meta a{text-decoration:none}
.hero .meta a:hover{color:var(--ink)}
.take{position:absolute;right:var(--pad);bottom:2rem;padding:.65rem 1rem;background:var(--btn-bg);border-radius:.2rem;font-size:.9rem;text-decoration:none;transition:background .25s,color .25s}
.take:hover{color:var(--accent)}

h1,h2,h3,.logo,.lead,.btn,.take{font-family:"Futura LT",Montserrat,Inter,sans-serif}

section{padding:clamp(3rem,7vw,6rem) var(--pad);border-top:1px solid var(--border-subtle)}
h2{margin:0 0 2.5rem;font-size:1.125rem;font-weight:600;color:var(--soft)}

.work ul{list-style:none;margin:0;padding:0}
.work li{border-bottom:1px solid var(--border-subtle)}
.work a{display:grid;grid-template-columns:1fr auto;gap:.5rem 2rem;align-items:center;padding:1.5rem 0;text-decoration:none;position:relative}
.work b{font-size:clamp(2rem,6vw,5rem);font-weight:700;font-stretch:80%;letter-spacing:-.03em;line-height:1;transition:transform .35s cubic-bezier(.2,.8,.2,1)}
.work span{color:var(--soft);text-align:right}
.work a:hover b,.work a:focus-visible b{transform:translateX(1.25rem)}
.work .swatch{position:absolute;right:11rem;top:50%;width:6.5rem;height:4.5rem;transform:translateY(-50%) scale(.6) rotate(-6deg);opacity:0;pointer-events:none;transition:.35s cubic-bezier(.2,.8,.2,1);border-radius:.4rem;display:grid;place-items:center;font-weight:800;font-size:2.25rem}
.work a:hover .swatch,.work a:focus-visible .swatch{opacity:1;transform:translateY(-50%) scale(1) rotate(-6deg)}

.about{display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,22rem),1fr));gap:3rem 5rem}
.about p{margin:0 0 1.25rem;max-width:58ch}
.about dl{margin:0}
.about dt{font-weight:700;font-size:1.5rem;margin-top:1.5rem}
.about dt:first-child{margin-top:0}
.about dd{margin:.25rem 0 0;color:var(--soft)}

footer{background:var(--deep);padding:clamp(3rem,8vw,7rem) var(--pad) 2rem;transition:background .3s}
footer a.big{display:inline-block;font-size:clamp(2rem,8vw,7rem);font-weight:800;font-stretch:78%;letter-spacing:-.03em;line-height:1;text-decoration:none;overflow-wrap:anywhere;word-break:break-word}
footer a.big:hover{color:var(--accent)}
footer{border-top:6px solid var(--red)}
footer p{margin:2.5rem 0 0;display:flex;flex-wrap:wrap;gap:.5rem 2rem;color:var(--soft)}

/* Footer logo — enlarged */
.footer-brand{
  display:flex;
  align-items:center;
  margin:0 0 2.5rem;
}
.footer-logo{
  display:block;
  height:clamp(4.5rem,9vw,7.5rem);
  width:auto;
  max-width:100%;
  object-fit:contain;
}
.footer-logo-fallback{
  display:none;
  font-family:"Futura LT",Montserrat,Inter,sans-serif;
  font-weight:800;
  font-size:clamp(2rem,6vw,3.5rem);
  letter-spacing:-.02em;
  line-height:1;
  color:var(--ink);
}

.projects .lead{margin:-1rem 0 2rem;max-width:26ch;font-size:clamp(1.5rem,3.2vw,2.75rem);line-height:1.15;font-weight:500}
.filters{display:flex;flex-wrap:wrap;gap:.6rem;margin:0 0 2.5rem}
.filters button{font:inherit;font-size:.95rem;color:var(--ink);background:transparent;border:1px solid var(--border-strong);border-radius:2rem;padding:.55rem 1.1rem;cursor:pointer;transition:background .25s,color .25s,border-color .25s}
.filters button:hover{border-color:var(--accent)}
.filters button[aria-pressed=true]{background:var(--accent);border-color:var(--accent);color:#0B111E}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(min(100%,21rem),1fr));gap:2.75rem 1.75rem}
.work-card{display:block;text-decoration:none;transition:opacity .45s,transform .6s cubic-bezier(.2,.8,.2,1)}
.work-card[hidden]{display:none}
.armed .work-card:not(.in){opacity:0;transform:translateY(2.5rem)}
.armed .work-card.out{opacity:0;transform:scale(.94)}
.shot{position:relative;height:13rem;overflow:hidden;border-radius:.8rem;background:var(--card-bg);border:1px solid var(--border-subtle);box-shadow:0 1.2rem 2.4rem rgba(0,0,0,.3);transition:transform .5s cubic-bezier(.2,.8,.2,1),box-shadow .5s}
.work-card:hover .shot,.work-card:focus-visible .shot{transform:translateY(-.4rem);box-shadow:0 1.8rem 3rem rgba(0,0,0,.4),0 0 3rem color-mix(in srgb,var(--c) 40%,transparent)}
.chrome{position:absolute;inset:0 0 auto 0;z-index:2;display:flex;align-items:center;gap:.3rem;height:1.8rem;padding:0 .7rem;background:var(--chrome-bg);font-size:.72rem;color:var(--soft)}
.chrome i{width:.45rem;height:.45rem;border-radius:50%;background:#4b587a}
.chrome span{margin-left:.5rem;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.page{position:absolute;inset:1.8rem 0 auto 0;height:26rem;padding:.8rem;display:grid;align-content:start;gap:.6rem;background:var(--card-bg);transition:transform 3.2s cubic-bezier(.4,0,.2,1)}
.work-card:hover .page,.work-card:focus-visible .page{transform:translateY(-14.8rem)}
.page b{display:block;height:7rem;border-radius:.5rem;background:var(--c)}
.page u{display:block;height:.6rem;width:70%;border-radius:1rem;background:#c7d0e0}
[data-theme="light"] .page u{background:#cbd5e1}
.page u:nth-of-type(2){width:50%}
.page div{display:grid;grid-template-columns:repeat(3,1fr);gap:.5rem}
.page s{display:block;height:5rem;border-radius:.5rem;background:#dfe5f1}
[data-theme="light"] .page s{background:#e2e8f0}
.page s:first-child{background:color-mix(in srgb,var(--c) 45%,#fff)}
.page em{display:block;height:5rem;border-radius:.5rem;background:var(--ground)}
.work-card h3{margin:1.1rem 0 .15rem;font-size:1.5rem;font-weight:600;letter-spacing:-.01em}
.work-card .cat{font-family:"Futura LT",Montserrat,sans-serif;font-size:.7rem;letter-spacing:.15em;text-transform:uppercase;color:var(--c)}
.work-card p{margin:.5rem 0 0;color:var(--soft);font-size:1rem}
.work-card .go{display:inline-block;margin-top:.8rem;font-weight:600;border-bottom:2px solid var(--c)}

.hero::before{content:"";position:absolute;inset:0;z-index:0;pointer-events:none;background:radial-gradient(42rem 32rem at 76% 30%,rgba(139,47,201,.22),transparent 70%),radial-gradient(30rem 24rem at 92% 85%,rgba(6,182,212,.15),transparent 70%)}
[data-theme="light"] .hero::before{background:radial-gradient(42rem 32rem at 76% 30%,rgba(139,47,201,.08),transparent 70%),radial-gradient(30rem 24rem at 92% 85%,rgba(6,182,212,.06),transparent 70%)}
.hero .code-stage{position:absolute;right:clamp(1rem,3vw,3rem);top:50%;width:min(58vw,58rem);transform:translateY(-50%) perspective(1200px) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg));transition:transform .5s ease-out}
@keyframes in{from{opacity:0;translate:0 2rem}}
.code-stage .ribbon{position:absolute;inset:-14% -8% -10% 28%;background:linear-gradient(135deg,#8B2FC9,#06B6D4);clip-path:polygon(18% 0,100% 12%,82% 100%,0 86%);opacity:.35}
.code-stage .circuit{position:absolute;inset:-20% -14%;width:128%;height:140%;overflow:visible}
.circuit path{fill:none;stroke:var(--cyan);stroke-opacity:.45;stroke-width:1.3}
.circuit .pulse-line{stroke:var(--accent);stroke-opacity:.9;stroke-dasharray:6 94;animation:flow 4s linear infinite}
.circuit circle{fill:var(--accent);fill-opacity:.7}
@keyframes flow{to{stroke-dashoffset:-100}}
.editor{position:relative;background:var(--deep);border:1px solid var(--border-subtle);border-radius:.9rem;box-shadow:0 2rem 4rem rgba(0,0,0,.45),0 0 5rem rgba(139,47,201,.25);overflow:hidden;transition:background .3s,border-color .3s}
[data-theme="light"] .editor{background:#1E293B;box-shadow:0 2rem 4rem rgba(0,0,0,.2),0 0 5rem rgba(139,47,201,.1)}
.editor .top{display:flex;align-items:center;gap:.5rem;padding:1rem 1.3rem;border-bottom:1px solid var(--border-subtle);font-size:.95rem;color:var(--soft)}
.editor .top i{width:.85rem;height:.85rem;border-radius:50%}
.editor .top span{margin-left:.6rem}
.editor pre{margin:0;padding:1.2rem 1.2rem 1.4rem;min-height:min(27rem,48vh);font:clamp(.95rem,1.25vw,1.25rem)/1.8 ui-monospace,SFMono-Regular,Menlo,Consolas,monospace;color:#e5e9f2;overflow:hidden;counter-reset:l}
.ln{min-height:1.8em;white-space:pre}
.ln::before{counter-increment:l;content:counter(l);display:inline-block;width:2em;margin-right:1em;text-align:right;color:var(--code-ln)}
.k{color:var(--purple)}.f{color:var(--cyan)}.s{color:var(--accent)}.c{color:#6b7a99}
.caret{display:inline-block;width:.55em;height:1.1em;margin-left:1px;vertical-align:text-bottom;background:var(--cyan);animation:blink 1s steps(1) infinite}
@keyframes blink{50%{opacity:0}}
.editor .bar{display:flex;justify-content:space-between;gap:1rem;padding:.9rem 1.3rem;border-top:1px solid var(--border-subtle);font-size:.9rem;color:var(--soft)}
#status{color:var(--cyan)}#status.ok{color:var(--accent)}
#status::before{content:"";display:inline-block;width:.55rem;height:.55rem;margin-right:.5rem;border-radius:50%;background:currentColor}

/* ============================================================
   RESPONSIVE — Desktop tweaks
   ============================================================ */
@media (min-width:901px){
  .hero h1,.hero>p:not(.meta){max-width:min(42vw,38rem)}
  .fullmenu{display:none!important}
}

/* ============================================================
   RESPONSIVE — Tablet & below (≤900px)
   ============================================================ */
@media (max-width:900px){
  header{top:calc(env(safe-area-inset-top,0px) + .5rem);left:.75rem;right:.75rem;transform:none;width:auto;max-width:none;padding:.65rem .8rem;gap:.55rem;justify-content:flex-start}
  header .logo{margin-right:auto;order:2}
  header > a[href^="mailto"]{order:1}
  .theme-toggle{order:3}
  .menu-toggle{display:flex;order:4}
  header > nav{display:none}
  header .logo img{height:1.6rem}

  .hero{padding:6rem var(--pad) 4rem;min-height:auto}
  .hero-logo{margin-bottom:1.1rem;min-height:2.2rem}
  .hero-logo img{height:clamp(2.2rem,7vw,3rem);max-width:80vw}
  .hero-logo .logo-fallback{font-size:clamp(1.3rem,5vw,1.8rem)}
  .hero h1{font-size:clamp(2.6rem,11vw,4.4rem)}
  .hero p{font-size:clamp(1.2rem,4.8vw,1.6rem);max-width:100%}
  .btn{margin-top:1.75rem}
  .hero .code-stage{position:relative;right:auto;top:auto;width:100%;margin-top:2.5rem;transform:none}
  .hero .meta{position:relative;left:auto;bottom:auto;margin-top:1.75rem;font-size:.85rem}
  .hero .take{display:none}
  .hero::before{background:radial-gradient(30rem 22rem at 80% 20%,rgba(139,47,201,.2),transparent 70%)}
  [data-theme="light"] .hero::before{background:radial-gradient(30rem 22rem at 80% 20%,rgba(139,47,201,.07),transparent 70%)}

  .editor pre{min-height:0;font-size:.85rem;line-height:1.7;padding:1rem}
  .editor .top{padding:.7rem 1rem;font-size:.8rem}
  .editor .top i{width:.7rem;height:.7rem}
  .editor .bar{padding:.7rem 1rem;font-size:.78rem}

  section{padding:clamp(2.5rem,6vw,4rem) var(--pad)}
  h2{margin-bottom:1.75rem}

  .projects .lead{font-size:clamp(1.3rem,5.4vw,2rem);margin-bottom:1.5rem}
  .filters{flex-wrap:nowrap;overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;padding-bottom:.5rem;margin-bottom:1.75rem;margin-left:calc(-1 * var(--pad));margin-right:calc(-1 * var(--pad));padding-left:var(--pad);padding-right:var(--pad)}
  .filters::-webkit-scrollbar{display:none}
  .filters button{flex:0 0 auto;padding:.6rem 1rem;font-size:.9rem}
  .grid{grid-template-columns:1fr;gap:2rem}
  .shot{height:11rem}
  .work-card h3{font-size:1.35rem}
  .work-card p{font-size:.95rem}

  .about{gap:2.5rem}
  .about dt{font-size:1.25rem;margin-top:1.1rem}

  footer a.big{font-size:clamp(1.6rem,7.5vw,4rem)}
  footer p{margin-top:2rem}
  .footer-logo{height:clamp(3.5rem,11vw,5rem)}
  .footer-brand{margin-bottom:2rem}
}

/* ============================================================
   RESPONSIVE — Small phones (≤480px)
   ============================================================ */
@media (max-width:480px){
  header{gap:.4rem;padding:.55rem .6rem}
  header .logo img{height:1.4rem}
  .theme-toggle{width:2rem;height:2rem}
  .theme-toggle svg{width:1rem;height:1rem}
  .menu-toggle{width:2.1rem;height:2.1rem}
  .menu-toggle svg{width:1.05rem;height:1.05rem}
  header > a[href^="mailto"] svg{width:1.15rem;height:1.15rem}
  .logo-fallback{font-size:1rem}

  .hero{padding:5.5rem 1rem 3rem}
  .hero-logo{margin-bottom:.9rem;min-height:2rem}
  .hero-logo img{height:2rem;max-width:78vw}
  .hero-logo .logo-fallback{font-size:1.3rem}
  .hero h1{font-size:clamp(2.2rem,12vw,3.4rem)}
  .hero p{font-size:1.1rem;margin-top:1.5rem}
  .btn{padding:.95rem 1.15rem;font-size:1rem;margin-top:1.5rem}

  .editor pre{font-size:.75rem;padding:.85rem}
  .ln::before{width:1.5em;margin-right:.6em}

  footer a.big{font-size:clamp(1.4rem,8vw,3rem)}
  footer p{gap:.4rem 1rem;font-size:.85rem}
  .footer-logo{height:clamp(3rem,14vw,4rem)}
  .footer-brand{margin-bottom:1.75rem}

  .fullmenu nav a{font-size:clamp(1.6rem,9vw,2.4rem)}
}

/* ============================================================
   RESPONSIVE — Landscape phones (short height)
   ============================================================ */
@media (max-width:900px) and (orientation:landscape) and (max-height:520px){
  .hero{min-height:auto;padding:6rem var(--pad) 3rem}
  .hero-logo{margin-bottom:.8rem}
  .hero .code-stage{margin-top:1.5rem}
  .editor pre{min-height:0}
  .fullmenu nav{padding:1rem 0}
  .fullmenu nav a{padding:.6rem 0;font-size:clamp(1.3rem,4vw,1.8rem)}
}

/* ============================================================
   Reduced motion
   ============================================================ */
@media (prefers-reduced-motion:reduce){
  .hero h1 span i{animation:none;transform:none}
  .hero > p:not(.meta),.hero .btn,.hero .meta,.hero .take,.hero .code-stage,.hero-logo{animation:none}
  .circuit .pulse-line,.caret{animation:none}
  .fullmenu{transition:none}
  *{transition:none!important;scroll-behavior:auto!important}
}
</style>
</head>
<body>
<noscript><style>.hero h1 span i{transform:none;animation:none}.hero>p:not(.meta),.hero .btn,.hero .meta,.hero .take,.hero .code-stage,.hero-logo{opacity:1;transform:none;animation:none}</style></noscript>

<header id="siteHeader">
  <a href="mailto:beninbits78@gmail.com" aria-label="Email us"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></a>
  <a class="logo" href="#top" aria-label="BeninBITS Technologies home">
    <img class="logo-light" src="images/white-logo.jpg" alt="BeninBITS Technologies" width="120" height="32"
         onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block'">
    <img class="logo-dark" src="images/dark-logo.jpg" alt="BeninBITS Technologies" width="120" height="32"
         onerror="this.style.display='none';this.previousElementSibling.style.display='none';this.nextElementSibling.style.display='inline-block'">
    <span class="logo-fallback">BeninBITS</span>
  </a>
  <nav aria-label="Main"><a href="#work">Projects</a><a href="#about">Company</a><a href="#contact">Contact</a></nav>
  <button class="theme-toggle" id="themeToggle" type="button" aria-label="Switch to light mode" title="Switch to light mode">
    <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
    <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
  </button>
  <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="fullMenu">
    <svg class="icon-burger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
  </button>
</header>

<div class="fullmenu" id="fullMenu" aria-hidden="true" aria-label="Mobile navigation">
  <div class="fullmenu-head">
    <span class="logo">
      <img class="logo-light" src="images/white-logo.jpg" alt="BeninBITS Technologies" width="120" height="32"
           onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block'">
      <img class="logo-dark" src="images/dark-logo.jpg" alt="BeninBITS Technologies" width="120" height="32"
           onerror="this.style.display='none';this.previousElementSibling.style.display='none';this.nextElementSibling.style.display='inline-block'">
      <span class="logo-fallback">BeninBITS</span>
    </span>
    <button class="fullmenu-close" id="fullMenuClose" type="button" aria-label="Close menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
  </div>
  <nav aria-label="Mobile main">
    <a href="#work">Projects</a>
    <a href="#about">Company</a>
    <a href="#contact">Contact</a>
  </nav>
  <div class="fullmenu-foot">
    <a href="mailto:beninbits78@gmail.com">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
      beninbits78@gmail.com
    </a>
    <a href="tel:0701760930">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z"/></svg>
      0701760930
    </a>
    <span class="loc">Nairobi, Kenya</span>
  </div>
</div>

<main id="top">
  <div class="hero">
    <span class="hero-logo" aria-label="BeninBITS Technologies">
      <img class="logo-light" src="images/white-logo.jpg" alt="BeninBITS Technologies" width="260" height="70"
           onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block'">
      <img class="logo-dark" src="images/dark-logo.jpg" alt="BeninBITS Technologies" width="260" height="70"
           onerror="this.style.display='none';this.previousElementSibling.style.display='none';this.nextElementSibling.style.display='inline-block'">
      <span class="logo-fallback">BeninBITS</span>
    </span>
    <h1 aria-label="Software built in BeninBITS"><span><i>Software</i></span><span><i>built in</i></span><span><i>BeninBITS</i></span></h1>
    <p>We design and build web, mobile and cloud software for businesses across East Africa, from first idea to a system your team can run.</p>
    <div class="code-stage" aria-hidden="true">
      <div class="ribbon"></div>
      <svg class="circuit" viewBox="0 0 600 500"><path d="M0 120H120L160 80H300"/><path d="M600 400H470L430 440H330"/><path d="M40 470H200L240 430"/><path class="pulse-line" pathLength="100" d="M0 120H120L160 80H300"/><path class="pulse-line" style="animation-delay:-2s" pathLength="100" d="M600 400H470L430 440H330"/><circle cx="300" cy="80" r="4"/><circle cx="330" cy="440" r="4"/><circle cx="240" cy="430" r="4"/></svg>
      <div class="editor"><div class="top"><i style="background:#8B2FC9"></i><i style="background:#06B6D4"></i><i style="background:#84CC16"></i><span>deploy.php</span></div><pre><code id="code"></code></pre><div class="bar"><span id="status">Building</span><span>Laravel</span></div></div>
    </div>
    <a class="btn" href="#contact">Get in touch <span aria-hidden="true">→</span></a>
    <p class="meta"><a href="#work">Projects</a><a href="#about">Company</a><a href="tel:0701760930">0701760930</a><span>Nairobi <time id="clock"></time></span></p>
    <a class="take" href="#work">Take your seat ↓</a>
  </div>

  <section class="projects" id="work">
    <h2>Projects</h2>
    <p class="lead">Sites and systems we've built for clients across Kenya and beyond.</p>
    <div class="filters" role="group" aria-label="Filter projects"><button type="button" aria-pressed="true" data-f="all">All</button><button type="button" aria-pressed="false" data-f="travel">Travel</button><button type="button" aria-pressed="false" data-f="transport">Transport</button><button type="button" aria-pressed="false" data-f="tech">Business &amp; tech</button><button type="button" aria-pressed="false" data-f="comm">Community &amp; education</button></div>
    <div class="grid">
      <a class="work-card" href="https://ustawi.net/" target="_blank" rel="noopener" data-cat="tech" style="--c:#84CC16" aria-label="Ustawi, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>ustawi.net</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Ustawi</h3><span class="cat">Finance</span><p>Tax filing service with a step-by-step wizard, secure document upload and a deadline countdown.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://kejahtours.com/" target="_blank" rel="noopener" data-cat="travel" style="--c:#06B6D4" aria-label="Happy Tours & Ventures, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>kejahtours.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Happy Tours &amp; Ventures</h3><span class="cat">Travel</span><p>Day tours and safaris around Watamu, in four languages, with booking over WhatsApp.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://nyamiraexpress.com/" target="_blank" rel="noopener" data-cat="transport" style="--c:#A855F7" aria-label="Nyamira Express, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>nyamiraexpress.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Nyamira Express</h3><span class="cat">Ticketing</span><p>Online bus ticket booking from home.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://www.archersafrica.com/" target="_blank" rel="noopener" data-cat="travel" style="--c:#84CC16" aria-label="Archer's Tours & Travel, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>archersafrica.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Archer's Tours &amp; Travel</h3><span class="cat">Travel</span><p>Website for an East Africa travel agency with over fifty years in the business.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://sow-kenya.co.ke/" target="_blank" rel="noopener" data-cat="comm" style="--c:#06B6D4" aria-label="Sounds of Worship Kenya, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>sow-kenya.co.ke</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Sounds of Worship Kenya</h3><span class="cat">Ministry</span><p>Worship ministry site with events, music, merchandise and M-Pesa donations.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://www.beninbits.com" target="_blank" rel="noopener" data-cat="tech" style="--c:#A855F7" aria-label="BeninBITS, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>beninbits.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>BeninBITS</h3><span class="cat">Technology</span><p>The company website for BeninBITS Technologies.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://jasiri-mind.co.ke/" target="_blank" rel="noopener" data-cat="comm" style="--c:#84CC16" aria-label="Jasiri Mind, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>jasiri-mind.co.ke</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Jasiri Mind</h3><span class="cat">Wellness</span><p>Mental health and wellness organisation with services, team profiles and consultation booking.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://roamroyale.com/" target="_blank" rel="noopener" data-cat="travel" style="--c:#A855F7" aria-label="Roam Royale, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>roamroyale.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Roam Royale</h3><span class="cat">Travel</span><p>Luxury East Africa safaris, with destinations, experiences and priced packages.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://donkraft.co.ke/" target="_blank" rel="noopener" data-cat="tech" style="--c:#84CC16" aria-label="Donkraft IT Solutions, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>donkraft.co.ke</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Donkraft IT Solutions</h3><span class="cat">IT services</span><p>IT company site covering services, products and monthly support packages.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://theguardian.co.ke/booking/schedules.html" target="_blank" rel="noopener" data-cat="transport" style="--c:#06B6D4" aria-label="The Guardian Booking, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>theguardian.co.ke</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>The Guardian Booking</h3><span class="cat">Ticketing</span><p>Bus schedules and ticket booking.</p><span class="go">Visit site ↗</span></a>
      <a class="work-card" href="https://nyamiraexpress.com/booking/schedules.html" target="_blank" rel="noopener" data-cat="transport" style="--c:#A855F7" aria-label="Nyamira Express Schedules, opens in a new tab"><div class="shot" aria-hidden="true"><div class="chrome"><i></i><i></i><i></i><span>nyamiraexpress.com</span></div><div class="page"><b></b><u></u><u></u><div><s></s><s></s><s></s></div><em></em><u></u></div></div><h3>Nyamira Express Schedules</h3><span class="cat">Ticketing</span><p>Route and departure schedules for passengers.</p><span class="go">Visit site ↗</span></a>
      </div>
  </section>

  <section class="about" id="about">
    <div>
      <h2>Company</h2>
      <p>BeninBITS began as a youth initiative teaching digital literacy, web development and ICT skills. Today we are BeninBITS Technologies, a software company based in Nairobi, Kenya, building for businesses across East Africa.</p>
      <p>We still believe in growing people and community. Every project starts with your problem, ships in small steps, and gets our support after launch.</p>
    </div>
    <div>
      <h2>What we do</h2>
      <dl>
        <dt>Software engineering</dt><dd>Web and mobile products built to scale with your business.</dd>
        <dt>Cloud infrastructure</dt><dd>Hosting, pipelines and integrations that stay reliable.</dd>
        <dt>AI integration</dt><dd>Practical AI features added to the systems you already run.</dd>
        <dt>IT consulting</dt><dd>Technical planning, audits and ongoing support.</dd>
      </dl>
    </div>
  </section>
</main>

<footer id="contact">
  <div class="footer-brand">
    <img class="footer-logo"
         src="images/BeninBITS-Logo.jpg"
         alt="BeninBITS Technologies"
         width="320"
         onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
    <span class="footer-logo-fallback">BeninBITS Technologies</span>
  </div>
  <h2>Tell us what you need</h2>
  <a class="big" href="mailto:beninbits78@gmail.com">beninbits78@gmail.com</a>
  <p><a href="#">Instagram</a><a href="#">LinkedIn</a><a href="#">GitHub</a><a href="tel:0701760930">0701760930</a><span>Nairobi, Kenya</span></p>
</footer>

<script>
/* ============ Full-screen mobile menu ============ */
(function(){
  var toggle=document.getElementById('menuToggle');
  var menu=document.getElementById('fullMenu');
  var closeBtn=document.getElementById('fullMenuClose');
  if(!toggle||!menu||!closeBtn)return;
  function openMenu(){menu.classList.add('open');menu.setAttribute('aria-hidden','false');document.body.classList.add('nav-locked');toggle.setAttribute('aria-expanded','true');toggle.setAttribute('aria-label','Close menu');var first=menu.querySelector('nav a');if(first)first.focus();}
  function closeMenu(){menu.classList.remove('open');menu.setAttribute('aria-hidden','true');document.body.classList.remove('nav-locked');toggle.setAttribute('aria-expanded','false');toggle.setAttribute('aria-label','Open menu');}
  function isOpen(){return menu.classList.contains('open')}
  toggle.addEventListener('click',function(){ isOpen()?closeMenu():openMenu(); });
  closeBtn.addEventListener('click',closeMenu);
  menu.querySelectorAll('nav a').forEach(function(a){a.addEventListener('click',closeMenu);});
  document.addEventListener('keydown',function(e){if(e.key==='Escape'&&isOpen()){closeMenu();toggle.focus();}});
  var mq=matchMedia('(min-width:901px)');
  if(mq.addEventListener){mq.addEventListener('change',function(e){if(e.matches&&isOpen())closeMenu();});}
  menu.addEventListener('keydown',function(e){
    if(e.key!=='Tab'||!isOpen())return;
    var f=menu.querySelectorAll('a,button');
    if(!f.length)return;
    var first=f[0],last=f[f.length-1];
    if(e.shiftKey&&document.activeElement===first){e.preventDefault();last.focus();}
    else if(!e.shiftKey&&document.activeElement===last){e.preventDefault();first.focus();}
  });
})();

/* ============ Project filters + reveal ============ */
(function(){
  var sec=document.querySelector('.projects');sec.classList.add('armed');
  var cards=[].slice.call(sec.querySelectorAll('.work-card')),btns=[].slice.call(sec.querySelectorAll('.filters button'));
  cards.forEach(function(c,i){c.style.transitionDelay=(i%3)*.08+'s'});
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.12});
    cards.forEach(function(c){io.observe(c)});
  }else{cards.forEach(function(c){c.classList.add('in')})}
  btns.forEach(function(b){b.addEventListener('click',function(){
    btns.forEach(function(x){x.setAttribute('aria-pressed',x===b)});
    var f=b.dataset.f;
    cards.forEach(function(c){
      var show=f==='all'||c.dataset.cat===f;
      if(show){c.hidden=false;c.classList.add('in','out');requestAnimationFrame(function(){requestAnimationFrame(function(){c.classList.remove('out')})})}
      else{c.classList.add('out');setTimeout(function(){if(c.classList.contains('out'))c.hidden=true},400)}
    });
  })});
})();
</script>

<script>
/* ============ Hero terminal (Laravel/PHP) ============ */
(function(){
  var hero=document.querySelector('.hero'),ed=document.querySelector('.code-stage'),box=document.getElementById('code'),st=document.getElementById('status'),t=document.getElementById('clock');
  var reduce=matchMedia('(prefers-reduced-motion:reduce)').matches;
  function tick(){try{t.textContent=new Date().toLocaleTimeString('en-GB',{hour:'2-digit',minute:'2-digit',timeZone:'Africa/Nairobi'})}catch(e){}}
  tick();setInterval(tick,30000);

  var L=[
    [['p','<'+'?php']],
    [],
    [['k','use'],['p',' Illuminate\\Support\\Facades\\Artisan;']],
    [['k','use'],['p',' Illuminate\\Support\\Facades\\Deploy;']],
    [],
    [['c','// Deploy BeninBITS to production']],
    [['f','Artisan'],['p','::'],['f','call'],['p','( '],['s',"'deploy'"],['p','", [']],
    [['p','    '],['s',"'env'"],['p','    => '],['s',"'production'"],['p','",']],
    [['p','    '],['s',"'region'"],['p',' => '],['s',"'africa'"],['p','",']],
    [['p','    '],['s',"'scale'"],['p','  => '],['s',"'auto'"],['p','",']],
    [['p',']);']],
    [],
    [['f','Deploy'],['p','::'],['f','run'],['p','()->'],['f','status'],['p','(); '],['c','// "live"']],
  ];

  var lines=L.map(function(){var d=document.createElement('div');d.className='ln';box.appendChild(d);return d});
  function done(){st.textContent='Live in Africa';st.className='ok'}
  if(reduce){L.forEach(function(l,i){l.forEach(function(g){var e=document.createElement('span');e.className=g[0];e.textContent=g[1];lines[i].appendChild(e)})});done()}
  else{
    var caret=document.createElement('i');caret.className='caret';lines[0].appendChild(caret);
    var li=0,si=0,ci=0,cur=null;
    (function step(){
      var line=L[li];
      if(si>=line.length){li++;si=0;ci=0;cur=null;if(li>=L.length){caret.remove();return done()}lines[li].appendChild(caret);return setTimeout(step,line.length?170:60)}
      var seg=line[si];
      if(!cur){cur=document.createElement('span');cur.className=seg[0];lines[li].insertBefore(cur,caret)}
      cur.textContent+=seg[1][ci++];
      if(ci>=seg[1].length){si++;ci=0;cur=null}
      setTimeout(step,22+Math.random()*34);
    })();
  }
  if(!reduce&&matchMedia('(min-width:901px)').matches&&matchMedia('(hover:hover)').matches){
    hero.addEventListener('pointermove',function(e){ed.style.setProperty('--ry',((e.clientX/innerWidth-.5)*8).toFixed(2)+'deg');ed.style.setProperty('--rx',((e.clientY/innerHeight-.5)*-6).toFixed(2)+'deg')});
  }
})();
</script>

<script>
/* ============ Theme toggle ============ */
(function(){
  var toggle=document.getElementById('themeToggle');
  var root=document.documentElement;
  var stored=localStorage.getItem('theme');
  var prefersLight=window.matchMedia('(prefers-color-scheme:light)').matches;
  function setTheme(theme){
    if(theme==='light'){root.setAttribute('data-theme','light');toggle.setAttribute('aria-label','Switch to dark mode');toggle.setAttribute('title','Switch to dark mode')}
    else{root.removeAttribute('data-theme');toggle.setAttribute('aria-label','Switch to light mode');toggle.setAttribute('title','Switch to light mode')}
    localStorage.setItem('theme',theme);
  }
  if(stored==='light'||(!stored&&prefersLight)){setTheme('light')}
  toggle.addEventListener('click',function(){
    var isLight=root.getAttribute('data-theme')==='light';
    setTheme(isLight?'dark':'light');
  });
})();
</script>
</body>
</html>
