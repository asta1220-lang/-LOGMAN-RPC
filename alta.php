<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GLOBALEX Agencia Aduanal | Expertos en Comercio Exterior</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800&display=swap');
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
:root{--primary:#0a1628;--accent:#c8a84b;--accent2:#1a3a6b;--light:#f8f5ef;--text:#1a1a2e;--white:#ffffff}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--primary);color:var(--white);overflow-x:hidden}
nav{position:fixed;top:0;width:100%;z-index:1000;padding:20px 60px;display:flex;justify-content:space-between;align-items:center;background:rgba(10,22,40,0.85);backdrop-filter:blur(20px);border-bottom:1px solid rgba(200,168,75,0.2);transition:all 0.3s}
.logo{font-size:1.6rem;font-weight:900;letter-spacing:2px;color:var(--accent);text-shadow:0 0 30px rgba(200,168,75,0.5)}
.logo span{color:var(--white);font-weight:300}
nav ul{list-style:none;display:flex;gap:40px}
nav ul a{color:rgba(255,255,255,0.8);text-decoration:none;font-size:0.85rem;font-weight:500;letter-spacing:1.5px;text-transform:uppercase;transition:color 0.3s;position:relative}
nav ul a::after{content:'';position:absolute;bottom:-4px;left:0;width:0;height:2px;background:var(--accent);transition:width 0.3s}
nav ul a:hover{color:var(--accent)}
nav ul a:hover::after{width:100%}
.nav-btn{background:var(--accent);color:var(--primary);padding:10px 28px;border:none;border-radius:4px;font-weight:700;font-size:0.8rem;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;transition:all 0.3s}
.nav-btn:hover{background:#e0bc5a;transform:translateY(-2px);box-shadow:0 8px 25px rgba(200,168,75,0.4)}
#hero{height:100vh;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;background:radial-gradient(ellipse at 30% 50%,#1a3a6b 0%,#0a1628 60%)}
.globe-container{position:absolute;right:8%;top:50%;transform:translateY(-50%);width:500px;height:500px;perspective:1000px;animation:floatY 6s ease-in-out infinite}
@keyframes floatY{0%,100%{transform:translateY(-50%) translateY(0)}50%{transform:translateY(-50%) translateY(-30px)}}
.globe{width:100%;height:100%;border-radius:50%;background:radial-gradient(circle at 35% 35%,rgba(26,58,107,0.9) 0%,rgba(10,22,40,0.7) 60%),conic-gradient(from 0deg,#0a1628,#1a3a6b,#0a1628,#1a3a6b,#0a1628);border:2px solid rgba(200,168,75,0.4);box-shadow:0 0 80px rgba(200,168,75,0.15),0 0 160px rgba(26,58,107,0.5),inset 0 0 80px rgba(200,168,75,0.05);animation:rotateGlobe 20s linear infinite;position:relative;transform-style:preserve-3d}
@keyframes rotateGlobe{from{transform:rotateY(0deg) rotateX(10deg)}to{transform:rotateY(360deg) rotateX(10deg)}}
.globe::before{content:'';position:absolute;inset:0;border-radius:50%;background:repeating-linear-gradient(0deg,transparent,transparent 48px,rgba(200,168,75,0.15) 49px),repeating-linear-gradient(90deg,transparent,transparent 48px,rgba(200,168,75,0.15) 49px)}
.globe::after{content:'';position:absolute;top:10%;left:10%;right:10%;bottom:10%;border-radius:50%;border:1px solid rgba(200,168,75,0.2);box-shadow:0 0 0 20px rgba(200,168,75,0.03),0 0 0 40px rgba(200,168,75,0.02)}
.orbit{position:absolute;border-radius:50%;border:1px solid rgba(200,168,75,0.3);top:50%;left:50%;transform:translate(-50%,-50%)}
.orbit-1{width:560px;height:560px;animation:spin1 15s linear infinite}
.orbit-2{width:620px;height:620px;animation:spin1 25s linear infinite reverse}
.orbit-3{width:680px;height:680px;animation:spin1 35s linear infinite}
@keyframes spin1{from{transform:translate(-50%,-50%) rotateX(70deg) rotateZ(0deg)}to{transform:translate(-50%,-50%) rotateX(70deg) rotateZ(360deg)}}
.orbit::before{content:'';position:absolute;top:-4px;left:50%;width:8px;height:8px;border-radius:50%;background:var(--accent);box-shadow:0 0 12px var(--accent)}
.particles{position:absolute;inset:0;pointer-events:none}
.particle{position:absolute;border-radius:50%;background:var(--accent);animation:particleFloat linear infinite;opacity:0}
@keyframes particleFloat{0%{transform:translateY(100vh) rotate(0deg);opacity:0}10%{opacity:0.6}90%{opacity:0.3}100%{transform:translateY(-100px) rotate(720deg);opacity:0}}
.hero-content{position:relative;z-index:10;max-width:700px;padding-left:120px}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.3);padding:6px 16px;border-radius:20px;font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:24px;animation:fadeInUp 0.8s ease forwards}
.hero-badge span{width:6px;height:6px;background:var(--accent);border-radius:50%;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.3}}
h1{font-family:'Playfair Display',serif;font-size:clamp(3rem,5vw,5rem);line-height:1.05;margin-bottom:20px;animation:fadeInUp 0.8s 0.2s ease both}
h1 .gold{color:var(--accent)}
.hero-sub{font-size:1.1rem;color:rgba(255,255,255,0.65);line-height:1.8;max-width:520px;margin-bottom:40px;animation:fadeInUp 0.8s 0.4s ease both}
.hero-btns{display:flex;gap:16px;animation:fadeInUp 0.8s 0.6s ease both}
.btn-primary{background:var(--accent);color:var(--primary);padding:16px 36px;border:none;border-radius:4px;font-weight:700;font-size:0.85rem;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;transition:all 0.3s;text-decoration:none;display:inline-block}
.btn-primary:hover{background:#e0bc5a;transform:translateY(-3px);box-shadow:0 12px 35px rgba(200,168,75,0.5)}
.btn-outline{background:transparent;color:var(--white);padding:16px 36px;border:1px solid rgba(255,255,255,0.3);border-radius:4px;font-weight:600;font-size:0.85rem;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;transition:all 0.3s;text-decoration:none;display:inline-block}
.btn-outline:hover{border-color:var(--accent);color:var(--accent);transform:translateY(-3px)}
.hero-stats{display:flex;gap:48px;margin-top:64px;animation:fadeInUp 0.8s 0.8s ease both}
.stat-num{font-size:2.5rem;font-weight:900;color:var(--accent);line-height:1}
.stat-lbl{font-size:0.75rem;color:rgba(255,255,255,0.5);letter-spacing:1px;text-transform:uppercase;margin-top:4px}
@keyframes fadeInUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.scroll-line{position:absolute;bottom:40px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.4);animation:fadeInUp 1s 1.2s ease both}
.scroll-line::after{content:'';width:1px;height:60px;background:linear-gradient(to bottom,rgba(200,168,75,0.8),transparent);animation:lineDown 2s ease infinite}
@keyframes lineDown{0%{transform:scaleY(0);transform-origin:top}50%{transform:scaleY(1);transform-origin:top}51%{transform:scaleY(1);transform-origin:bottom}100%{transform:scaleY(0);transform-origin:bottom}}
#servicios{padding:120px 60px;background:var(--light);color:var(--text);position:relative;overflow:hidden}
#servicios::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(to right,transparent,var(--accent),transparent)}
.section-label{font-size:0.7rem;letter-spacing:4px;text-transform:uppercase;color:var(--accent);margin-bottom:12px;font-weight:600}
.section-title{font-family:'Playfair Display',serif;font-size:clamp(2.2rem,4vw,3.5rem);line-height:1.1;margin-bottom:60px;color:var(--text)}
.section-title em{color:var(--accent2);font-style:normal}
.services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.service-card{background:white;border-radius:12px;padding:40px 36px;position:relative;overflow:hidden;transition:box-shadow 0.4s ease;border:1px solid rgba(0,0,0,0.06);cursor:default;transform-style:preserve-3d}
.service-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(to right,var(--accent),var(--accent2));transform:scaleX(0);transform-origin:left;transition:transform 0.4s}
.service-card:hover{box-shadow:20px 30px 60px rgba(0,0,0,0.15),0 0 0 1px rgba(200,168,75,0.2)}
.service-card:hover::before{transform:scaleX(1)}
.service-icon{width:60px;height:60px;border-radius:12px;background:linear-gradient(135deg,var(--accent2),#0a1628);display:flex;align-items:center;justify-content:center;font-size:1.6rem;margin-bottom:24px;transition:transform 0.4s}
.service-card:hover .service-icon{transform:scale(1.1)}
.service-card h3{font-size:1.15rem;font-weight:700;margin-bottom:12px;color:var(--text)}
.service-card p{font-size:0.9rem;line-height:1.7;color:#666}
#stats{padding:100px 60px;background:var(--primary);position:relative}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0}
.stat-item{text-align:center;padding:60px 40px;border-right:1px solid rgba(255,255,255,0.08);position:relative;transition:background 0.3s}
.stat-item:last-child{border-right:none}
.stat-item:hover{background:rgba(200,168,75,0.05)}
.big-num{font-size:4rem;font-weight:900;color:var(--accent);line-height:1;margin-bottom:8px}
.stat-item p{font-size:0.85rem;color:rgba(255,255,255,0.5);letter-spacing:1px;text-transform:uppercase}
#proceso{padding:120px 60px;background:#0e1e35}
.process-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:0;margin-top:60px;position:relative}
.process-steps::before{content:'';position:absolute;top:40px;left:10%;right:10%;height:2px;background:linear-gradient(to right,var(--accent),var(--accent2),var(--accent))}
.step{text-align:center;padding:0 20px;position:relative;transition:transform 0.3s}
.step:hover{transform:translateY(-8px)}
.step-num{width:80px;height:80px;border-radius:50%;background:var(--primary);border:2px solid var(--accent);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:900;color:var(--accent);margin:0 auto 24px;position:relative;z-index:1;transition:all 0.3s;box-shadow:0 0 0 8px rgba(200,168,75,0.08)}
.step:hover .step-num{background:var(--accent);color:var(--primary);box-shadow:0 0 40px rgba(200,168,75,0.4)}
.step h4{font-size:1rem;font-weight:700;margin-bottom:10px;color:white}
.step p{font-size:0.85rem;color:rgba(255,255,255,0.5);line-height:1.6}
#nosotros{padding:120px 60px;background:var(--light);color:var(--text);display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.about-visual{position:relative;height:500px;perspective:800px}
.card-3d{position:absolute;background:white;border-radius:16px;padding:32px;box-shadow:0 20px 60px rgba(0,0,0,0.12);transition:transform 0.5s ease;transform-style:preserve-3d}
.card-3d:hover{transform:rotateY(-10deg) rotateX(5deg) scale(1.03)}
.card-main{width:320px;top:20px;left:20px;background:var(--primary);color:white;animation:float3d 5s ease-in-out infinite}
@keyframes float3d{0%,100%{transform:translateY(0) rotateY(-5deg) rotateX(3deg)}50%{transform:translateY(-15px) rotateY(5deg) rotateX(-3deg)}}
.card-main h3{font-size:1.2rem;color:var(--accent);margin-bottom:8px}
.card-main p{font-size:0.85rem;opacity:0.7}
.card-secondary{width:240px;bottom:40px;right:0;top:auto;background:var(--accent);color:var(--primary);animation:float3d 5s 1s ease-in-out infinite}
.card-secondary .big-icon{font-size:2.5rem;margin-bottom:8px}
.card-secondary h4{font-weight:800;font-size:1rem}
.card-accent{width:180px;top:240px;left:0;background:var(--accent2);color:white;animation:float3d 5s 2s ease-in-out infinite}
.card-accent p{font-size:0.75rem;opacity:0.8}
.card-accent strong{font-size:1.8rem;display:block}
.about-content .section-title{margin-bottom:24px}
.about-content>p{font-size:1rem;line-height:1.8;color:#555;margin-bottom:32px}
.check-list{list-style:none;display:flex;flex-direction:column;gap:14px;margin-bottom:40px}
.check-list li{display:flex;align-items:flex-start;gap:12px;font-size:0.95rem;color:var(--text)}
.check-list li::before{content:'✓';color:var(--accent);background:rgba(200,168,75,0.15);border-radius:50%;width:22px;height:22px;display:flex;align-items:center;justify-content:center;font-size:0.7rem;font-weight:900;flex-shrink:0;margin-top:2px}
#contacto{padding:120px 60px;background:var(--primary);text-align:center}
.contact-box{max-width:700px;margin:0 auto;background:rgba(255,255,255,0.04);border:1px solid rgba(200,168,75,0.2);border-radius:20px;padding:70px;position:relative;overflow:hidden}
.contact-box::before{content:'';position:absolute;inset:0;border-radius:20px;background:radial-gradient(circle at 50% 0%,rgba(200,168,75,0.08),transparent 60%);pointer-events:none}
.contact-box h2{font-family:'Playfair Display',serif;font-size:2.5rem;margin-bottom:16px;color:white}
.contact-box>p{color:rgba(255,255,255,0.6);margin-bottom:40px;line-height:1.7}
.contact-form{display:flex;flex-direction:column;gap:16px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.form-input{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:14px 18px;color:white;font-family:'Inter',sans-serif;font-size:0.9rem;outline:none;transition:border-color 0.3s;width:100%}
.form-input::placeholder{color:rgba(255,255,255,0.35)}
.form-input:focus{border-color:var(--accent)}
textarea.form-input{resize:vertical;min-height:120px}
footer{background:#060e1a;padding:60px;border-top:1px solid rgba(200,168,75,0.15)}
.footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:40px;margin-bottom:40px}
.footer-brand .logo{font-size:1.4rem;display:block;margin-bottom:16px}
.footer-brand p{font-size:0.85rem;color:rgba(255,255,255,0.45);line-height:1.7;max-width:260px}
footer h5{font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:20px}
footer ul{list-style:none;display:flex;flex-direction:column;gap:10px}
footer ul a{color:rgba(255,255,255,0.5);text-decoration:none;font-size:0.85rem;transition:color 0.3s}
footer ul a:hover{color:var(--accent)}
.footer-bottom{border-top:1px solid rgba(255,255,255,0.06);padding-top:24px;display:flex;justify-content:space-between;align-items:center;font-size:0.8rem;color:rgba(255,255,255,0.3)}
@media(max-width:900px){nav{padding:16px 24px}nav ul,.nav-btn{display:none}.hero-content{padding-left:24px;padding-right:24px}.globe-container{display:none}#servicios,#stats,#proceso,#contacto,footer{padding:60px 24px}.services-grid{grid-template-columns:1fr}.stats-grid{grid-template-columns:repeat(2,1fr)}.process-steps{grid-template-columns:1fr 1fr}.process-steps::before{display:none}#nosotros{grid-template-columns:1fr;padding:60px 24px}.about-visual{display:none}.footer-grid{grid-template-columns:1fr 1fr}.form-row{grid-template-columns:1fr}.contact-box{padding:40px 24px}}
</style>
</head>
<body>
<nav>
  <div class="logo">GLOBALEX<span> Aduanal</span></div>
  <ul>
    <li><a href="#servicios">Servicios</a></li>
    <li><a href="#proceso">Proceso</a></li>
    <li><a href="#nosotros">Nosotros</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>
  <button class="nav-btn">Consulta Gratis</button>
</nav>

<section id="hero">
  <div class="particles" id="particles"></div>
  <div class="hero-content">
    <div class="hero-badge"><span></span> Agencia Aduanal Certificada</div>
    <h1>Expertos en<br><span class="gold">Comercio</span><br>Exterior</h1>
    <p class="hero-sub">Gestionamos tus importaciones y exportaciones con precisión, agilidad y total cumplimiento normativo en México y el mundo.</p>
    <div class="hero-btns">
      <a href="#contacto" class="btn-primary">Solicitar Consulta</a>
      <a href="#servicios" class="btn-outline">Nuestros Servicios</a>
    </div>
    <div class="hero-stats">
      <div><div class="stat-num">+25</div><div class="stat-lbl">Años de experiencia</div></div>
      <div><div class="stat-num">98%</div><div class="stat-lbl">Tasa de éxito</div></div>
      <div><div class="stat-num">+5K</div><div class="stat-lbl">Clientes activos</div></div>
    </div>
  </div>
  <div class="globe-container">
    <div class="orbit orbit-1"></div>
    <div class="orbit orbit-2"></div>
    <div class="orbit orbit-3"></div>
    <div class="globe"></div>
  </div>
  <div class="scroll-line">Scroll</div>
</section>

<section id="servicios">
  <div style="max-width:1200px;margin:0 auto">
    <div class="section-label">Nuestros Servicios</div>
    <h2 class="section-title">Soluciones integrales para<br><em>tu operación aduanal</em></h2>
    <div class="services-grid">
      <div class="service-card"><div class="service-icon">🛳️</div><h3>Despacho de Importación</h3><p>Clasificación arancelaria, trámites ante el SAT y liberación de mercancías en todos los puertos de entrada del país con máxima rapidez.</p></div>
      <div class="service-card"><div class="service-icon">✈️</div><h3>Exportación Internacional</h3><p>Gestión completa de pedimentos de exportación, certificados de origen, documentación y coordinación logística global.</p></div>
      <div class="service-card"><div class="service-icon">📦</div><h3>Operaciones IMMEX</h3><p>Administración de programas de manufactura, importación temporal y optimización de flujos bajo el esquema IMMEX.</p></div>
      <div class="service-card"><div class="service-icon">⚖️</div><h3>Cumplimiento Normativo</h3><p>Asesoría en NOM, regulaciones sanitarias, permisos previos y defensa aduanera ante auditorías del SAT y Aduanas.</p></div>
      <div class="service-card"><div class="service-icon">🔍</div><h3>Auditoría Comercial</h3><p>Revisión integral de operaciones de comercio exterior, identificación de riesgos y estrategias de optimización fiscal.</p></div>
      <div class="service-card"><div class="service-icon">🌐</div><h3>Logística Internacional</h3><p>Coordinación de transporte multimodal, seguros de carga, almacenaje y distribución nacional e internacional.</p></div>
    </div>
  </div>
</section>

<section id="stats">
  <div class="stats-grid">
    <div class="stat-item"><div class="big-num">+50K</div><p>Pedimentos procesados</p></div>
    <div class="stat-item"><div class="big-num">48H</div><p>Tiempo promedio de despacho</p></div>
    <div class="stat-item"><div class="big-num">120+</div><p>Países con cobertura</p></div>
    <div class="stat-item"><div class="big-num">25</div><p>Años en el mercado</p></div>
  </div>
</section>

<section id="proceso">
  <div style="max-width:1200px;margin:0 auto;text-align:center">
    <div class="section-label">Cómo Trabajamos</div>
    <h2 class="section-title" style="color:white">Proceso simple,<br><em style="color:var(--accent);font-style:normal">resultados extraordinarios</em></h2>
    <div class="process-steps">
      <div class="step"><div class="step-num">01</div><h4>Consulta Inicial</h4><p>Analizamos tu operación y necesidades específicas para diseñar la estrategia ideal.</p></div>
      <div class="step"><div class="step-num">02</div><h4>Clasificación</h4><p>Determinamos la fracción arancelaria correcta y regulaciones aplicables a tu mercancía.</p></div>
      <div class="step"><div class="step-num">03</div><h4>Trámites</h4><p>Gestionamos toda la documentación y pedimentos ante las autoridades competentes.</p></div>
      <div class="step"><div class="step-num">04</div><h4>Liberación</h4><p>Coordinamos la salida y entrega de tu mercancía en tiempo y forma garantizada.</p></div>
    </div>
  </div>
</section>

<section id="nosotros">
  <div class="about-visual">
    <div class="card-3d card-main"><h3>Certificación OEA</h3><p>Operador Económico Autorizado — máximo nivel de confianza ante las autoridades aduaneras mexicanas.</p></div>
    <div class="card-3d card-secondary"><div class="big-icon">🏆</div><h4>#1 Agencia Aduanal del Noroeste</h4></div>
    <div class="card-3d card-accent"><strong>+25</strong><p>Años de trayectoria comprobada</p></div>
  </div>
  <div class="about-content">
    <div class="section-label">Por Qué Elegirnos</div>
    <h2 class="section-title">Tu socio estratégico en<br><em>comercio exterior</em></h2>
    <p>Somos una agencia aduanal certificada con más de 25 años operando en los principales puertos, aeropuertos y aduanas de México. Nuestro equipo de especialistas garantiza el cumplimiento total de la legislación aduanera y fiscal vigente.</p>
    <ul class="check-list">
      <li>Patente Aduanal vigente autorizada por el SAT</li>
      <li>Certificación OEA (Operador Económico Autorizado)</li>
      <li>Plataforma digital para seguimiento en tiempo real</li>
      <li>Equipo multilingüe disponible 24/7/365</li>
      <li>Cobertura en las 49 aduanas del país</li>
      <li>Asesoría legal especializada en comercio exterior</li>
    </ul>
    <a href="#contacto" class="btn-primary">Conoce Más →</a>
  </div>
</section>

<section id="contacto">
  <div class="contact-box">
    <div class="section-label" style="display:block;margin-bottom:12px">Contáctanos</div>
    <h2>Inicia tu operación hoy</h2>
    <p>Nuestros expertos están listos para asesorarte sin costo. Cuéntanos sobre tu mercancía y te daremos una solución inmediata.</p>
    <div class="contact-form">
      <div class="form-row">
        <input class="form-input" type="text" placeholder="Tu nombre completo">
        <input class="form-input" type="email" placeholder="Correo electrónico">
      </div>
      <div class="form-row">
        <input class="form-input" type="tel" placeholder="Teléfono">
        <input class="form-input" type="text" placeholder="Empresa">
      </div>
      <select class="form-input" style="background:#0a1628">
        <option value="" disabled selected>Tipo de operación</option>
        <option style="background:#0a1628">Importación</option>
        <option style="background:#0a1628">Exportación</option>
        <option style="background:#0a1628">IMMEX</option>
        <option style="background:#0a1628">Consultoría</option>
      </select>
      <textarea class="form-input" placeholder="Describe tu mercancía o necesidad..."></textarea>
      <button class="btn-primary" style="align-self:center;padding:18px 60px;font-size:0.9rem">Enviar Consulta →</button>
    </div>
  </div>
</section>

<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <span class="logo">GLOBALEX<span style="color:white;font-weight:300"> Aduanal</span></span>
      <p>Más de 25 años facilitando el comercio exterior de empresas mexicanas e internacionales con profesionalismo y excelencia.</p>
    </div>
    <div><h5>Servicios</h5><ul><li><a href="#">Importación</a></li><li><a href="#">Exportación</a></li><li><a href="#">IMMEX</a></li><li><a href="#">Logística</a></li><li><a href="#">Consultoría</a></li></ul></div>
    <div><h5>Empresa</h5><ul><li><a href="#">Nosotros</a></li><li><a href="#">Certificaciones</a></li><li><a href="#">Blog</a></li><li><a href="#">Empleos</a></li></ul></div>
    <div><h5>Contacto</h5><ul><li><a href="#">📍 Manzanillo, Colima</a></li><li><a href="#">📞 +52 314 000 0000</a></li><li><a href="#">✉️ info@globalex.mx</a></li><li><a href="#">🕐 24/7 Disponible</a></li></ul></div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 GLOBALEX Agencia Aduanal. Todos los derechos reservados.</span>
    <span>Patente Aduanal · Certificación OEA · SAT Verificado</span>
  </div>
</footer>

<script>
const container=document.getElementById('particles');
for(let i=0;i<30;i++){const p=document.createElement('div');p.className='particle';const size=Math.random()*4+1;p.style.cssText=`width:${size}px;height:${size}px;left:${Math.random()*100}%;animation-duration:${Math.random()*15+10}s;animation-delay:${Math.random()*15}s;`;container.appendChild(p);}

document.querySelectorAll('.service-card').forEach(card=>{
  card.addEventListener('mousemove',e=>{
    const rect=card.getBoundingClientRect();
    const x=(e.clientX-rect.left)/rect.width-0.5;
    const y=(e.clientY-rect.top)/rect.height-0.5;
    card.style.transform=`translateY(-12px) rotateX(${-y*12}deg) rotateY(${x*12}deg)`;
  });
  card.addEventListener('mouseleave',()=>{card.style.transform='';});
});

const observer=new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){entry.target.style.opacity='1';entry.target.style.transform='translateY(0)';}
  });
},{threshold:0.1});
document.querySelectorAll('.service-card,.step,.stat-item').forEach(el=>{
  el.style.opacity='0';el.style.transform='translateY(40px)';
  el.style.transition='opacity 0.6s ease,transform 0.6s ease';
  observer.observe(el);
});

window.addEventListener('scroll',()=>{
  const nav=document.querySelector('nav');
  nav.style.background=window.scrollY>60?'rgba(10,22,40,0.97)':'rgba(10,22,40,0.85)';
});
</script>
</body>
</html>
