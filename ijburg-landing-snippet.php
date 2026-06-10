/**
 * IJburg Landing Page — Standalone
 * Serves the full IJburg landing page at /ijburg/ bypassing the theme
 */
add_action('template_redirect', function() {
    if (!is_page('ijburg')) return;
    header('Content-Type: text/html; charset=utf-8');
    ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Health House IJburg — Opening Juli 2026 | IJburglaan 837 Amsterdam</title>
    <meta name="description" content="The Health House opent aan de IJburglaan 837 in Amsterdam IJburg! Opening 10-15 juli 2026. Meld je aan voor 20% korting + gratis goodiebag.">
    <meta name="keywords" content="The Health House, IJburg, Amsterdam, sportvoeding, supplementen, health store, IJburglaan, opening">
    <meta property="og:title" content="The Health House IJburg — Opening Juli 2026">
    <meta property="og:description" content="Binnenkort geopend: The Health House aan de IJburglaan 837 in Amsterdam IJburg. Meld je aan voor 20% korting!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thehealthhouse.eu/ijburg/">
    <link rel="canonical" href="https://thehealthhouse.eu/ijburg/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --navy: #1B2A4A;
            --navy-dark: #111d33;
            --red: #D53949;
            --red-dark: #b82e3c;
            --white: #ffffff;
            --light: #f5f6f8;
            --gray: #6b7280;
            --gray-light: #e5e7eb;
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', -apple-system, sans-serif; color: #1f2937; line-height: 1.6; overflow-x: hidden; }

        /* ANNOUNCEMENT BAR */
        .announce-bar {
            background: var(--red);
            color: white;
            text-align: center;
            padding: 10px 20px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            font-family: 'Poppins', sans-serif;
        }
        .announce-bar span { animation: pulse-text 2s ease-in-out infinite; display: inline-block; }
        @keyframes pulse-text { 0%,100%{ opacity:1; } 50%{ opacity:0.7; } }

        /* HEADER */
        header {
            background: var(--navy);
            padding: 16px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.15);
        }
        .logo-wrap { display: flex; align-items: center; gap: 14px; }
        .logo-wrap img { height: 44px; width: auto; }
        .logo-divider { width: 1px; height: 30px; background: rgba(255,255,255,0.25); }
        .logo-location { color: rgba(255,255,255,0.85); font-family: 'Poppins', sans-serif; font-size: 0.8rem; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; }
        .header-cta {
            background: var(--red);
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }
        .header-cta:hover { background: var(--red-dark); transform: translateY(-1px); }

        /* HERO */
        .hero {
            background: var(--navy);
            position: relative;
            overflow: hidden;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(213,57,73,0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(213,57,73,0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(255,255,255,0.03) 0%, transparent 70%);
        }
        .hero-pattern {
            position: absolute; inset: 0; opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-content { position: relative; z-index: 2; max-width: 800px; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(213,57,73,0.15);
            border: 1px solid rgba(213,57,73,0.4);
            color: #ff8a95;
            padding: 8px 20px; border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.8rem; font-weight: 700;
            letter-spacing: 2px; text-transform: uppercase;
            margin-bottom: 30px;
            animation: fadeInDown 0.8s ease;
        }
        .hero-badge .dot { width: 8px; height: 8px; background: var(--red); border-radius: 50%; animation: blink 1.5s infinite; }
        @keyframes blink { 0%,100%{ opacity:1; } 50%{ opacity:0.3; } }
        .hero h1 {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900; color: white;
            line-height: 1.1; margin-bottom: 10px;
            animation: fadeInUp 0.8s ease;
        }
        .hero h1 .accent { color: var(--red); }
        .hero .location-text {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            color: rgba(255,255,255,0.7);
            font-weight: 500; margin-bottom: 15px;
            animation: fadeInUp 1s ease;
        }
        .hero .location-text strong { color: white; }
        .hero .opening-date {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            color: var(--red);
            font-weight: 700;
            margin-bottom: 30px;
            animation: fadeInUp 1.1s ease;
            letter-spacing: 1px;
        }
        .hero-address {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            color: rgba(255,255,255,0.6);
            margin-bottom: 40px;
            animation: fadeInUp 1.2s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .hero-address svg { flex-shrink: 0; }
        .hero-offer {
            margin-bottom: 30px; animation: fadeInUp 1.1s ease;
            display: inline-flex; align-items: center; gap: 10px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 12px 24px; border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        .hero-offer .gift-icon { font-size: 1.5rem; }
        .hero-offer p { color: rgba(255,255,255,0.9); font-size: 0.95rem; font-weight: 500; }
        .hero-offer strong { color: var(--red); }
        .hero-buttons { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; animation: fadeInUp 1.4s ease; }
        .btn-primary {
            background: var(--red); color: white; border: none;
            padding: 16px 40px; border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700; font-size: 1rem;
            cursor: pointer; transition: all 0.3s;
            text-decoration: none;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-primary:hover { background: var(--red-dark); transform: translateY(-2px); box-shadow: 0 8px 25px rgba(213,57,73,0.35); }
        .btn-outline {
            background: transparent; color: white;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 14px 36px; border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700; font-size: 1rem;
            cursor: pointer; transition: all 0.3s;
            text-decoration: none;
        }
        .btn-outline:hover { border-color: white; background: rgba(255,255,255,0.05); }
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes fadeInDown { from { opacity:0; transform:translateY(-20px); } to { opacity:1; transform:translateY(0); } }

        /* COUNTDOWN */
        .countdown-section { padding: 60px 20px; background: var(--light); text-align: center; }
        .countdown-section h2 { font-family: 'Poppins', sans-serif; font-size: 1.6rem; font-weight: 800; color: var(--navy); margin-bottom: 30px; }
        .countdown-grid { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .countdown-item {
            background: white; border-radius: 16px; padding: 24px 30px;
            min-width: 120px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .countdown-item .number {
            font-family: 'Poppins', sans-serif; font-size: 3rem; font-weight: 900;
            color: var(--navy); line-height: 1;
        }
        .countdown-item .label {
            font-family: 'Poppins', sans-serif; font-size: 0.85rem; font-weight: 600;
            color: var(--gray); text-transform: uppercase; letter-spacing: 1px; margin-top: 4px;
        }

        /* INFO CARDS */
        .info-section { padding: 80px 20px; background: white; }
        .info-grid { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .info-card {
            background: var(--light); border-radius: 16px; padding: 40px 30px;
            text-align: center; transition: all 0.3s;
        }
        .info-card:hover { transform: translateY(-5px); box-shadow: 0 12px 35px rgba(0,0,0,0.1); }
        .info-icon {
            width: 64px; height: 64px;
            background: linear-gradient(135deg, var(--navy), var(--navy-dark));
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px;
        }
        .info-icon svg { width: 28px; height: 28px; }
        .info-card h3 { font-family: 'Poppins', sans-serif; font-size: 1.15rem; font-weight: 800; color: var(--navy); margin-bottom: 8px; }
        .info-card p { color: var(--gray); font-size: 0.95rem; line-height: 1.7; }
        .info-card .highlight { color: var(--red); font-weight: 700; }

        /* HOURS */
        .hours-section { padding: 80px 20px; background: var(--light); }
        .hours-container { max-width: 900px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .hours-left h2 { font-family: 'Poppins', sans-serif; font-size: 2.2rem; font-weight: 900; color: var(--navy); margin-bottom: 10px; }
        .hours-left p { color: var(--gray); font-size: 1rem; margin-bottom: 25px; }
        .hours-table { width: 100%; }
        .hours-row {
            display: flex; justify-content: space-between;
            padding: 14px 0; border-bottom: 1px solid var(--gray-light); font-size: 0.95rem;
        }
        .hours-row:last-child { border: none; }
        .hours-row .day { font-weight: 600; color: var(--navy); }
        .hours-row .time { color: var(--gray); font-weight: 500; }
        .hours-row.sunday { background: rgba(213,57,73,0.05); padding: 14px 12px; border-radius: 8px; margin: 4px -12px; }
        .hours-row.sunday .day { color: var(--red); }
        .hours-row.sunday .time { color: var(--red); font-weight: 600; }
        .hours-right {
            background: var(--navy); border-radius: 20px; padding: 40px; color: white; text-align: center;
        }
        .hours-right .big-text { font-family: 'Poppins', sans-serif; font-size: 4rem; font-weight: 900; line-height: 1; }
        .hours-right .sub-text { font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 600; opacity: 0.7; margin-top: 8px; }
        .hours-right .divider { width: 50px; height: 3px; background: var(--red); margin: 20px auto; border-radius: 3px; }
        .hours-right .tagline { font-size: 0.95rem; opacity: 0.8; line-height: 1.6; }

        /* MAP */
        .map-section { padding: 0; background: var(--navy); }
        .map-header { padding: 60px 20px 30px; text-align: center; }
        .map-header h2 { font-family: 'Poppins', sans-serif; font-size: 2rem; font-weight: 900; color: white; margin-bottom: 8px; }
        .map-header p { color: rgba(255,255,255,0.6); font-size: 1rem; }
        .map-wrap { max-width: 1200px; margin: 0 auto; padding: 0 20px 60px; }
        .map-wrap iframe { width: 100%; height: 400px; border: none; border-radius: 16px; }

        /* PRODUCTS */
        .products-section { padding: 80px 20px; background: white; text-align: center; }
        .products-section h2 { font-family: 'Poppins', sans-serif; font-size: 2.2rem; font-weight: 900; color: var(--navy); margin-bottom: 10px; }
        .products-section .subtitle { color: var(--gray); font-size: 1rem; margin-bottom: 50px; }
        .products-grid { max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
        .product-cat {
            background: var(--light); border-radius: 16px; padding: 35px 20px;
            text-align: center; transition: all 0.3s; cursor: default;
        }
        .product-cat:hover { transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .product-cat .cat-icon { font-size: 2.5rem; margin-bottom: 12px; display: block; }
        .product-cat h4 { font-family: 'Poppins', sans-serif; font-size: 0.95rem; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
        .product-cat p { color: var(--gray); font-size: 0.8rem; }

        /* SIGNUP */
        .signup-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-dark) 100%);
            text-align: center; position: relative; overflow: hidden;
        }
        .signup-section::before {
            content: ''; position: absolute; inset: 0;
            background: 
                radial-gradient(circle at 30% 50%, rgba(213,57,73,0.12) 0%, transparent 50%),
                radial-gradient(circle at 70% 50%, rgba(213,57,73,0.08) 0%, transparent 50%);
        }
        .signup-inner { position: relative; z-index: 2; max-width: 680px; margin: 0 auto; }
        .signup-gift { font-size: 3rem; margin-bottom: 16px; display: block; }
        .signup-inner h2 { font-family: 'Poppins', sans-serif; font-size: 2.2rem; font-weight: 900; color: white; margin-bottom: 8px; line-height: 1.2; }
        .signup-inner h2 .accent { color: var(--red); }
        .signup-inner .signup-sub { color: rgba(255,255,255,0.7); font-size: 1.05rem; margin-bottom: 12px; }
        .signup-perks { display: flex; gap: 24px; justify-content: center; flex-wrap: wrap; margin-bottom: 35px; }
        .signup-perk {
            display: flex; align-items: center; gap: 8px;
            color: rgba(255,255,255,0.85); font-size: 0.95rem; font-weight: 500;
        }
        .signup-perk .check {
            width: 24px; height: 24px;
            background: rgba(213,57,73,0.2);
            border: 1.5px solid var(--red);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .signup-perk .check svg { width: 12px; height: 12px; }
        .signup-form { display: flex; flex-direction: column; gap: 12px; max-width: 460px; margin: 0 auto; }
        .signup-row { display: flex; gap: 12px; }
        .signup-form input {
            flex: 1; padding: 16px 20px;
            border: 2px solid rgba(255,255,255,0.12);
            border-radius: 12px;
            background: rgba(255,255,255,0.06);
            color: white; font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            outline: none; transition: all 0.3s;
            backdrop-filter: blur(5px);
        }
        .signup-form input::placeholder { color: rgba(255,255,255,0.35); }
        .signup-form input:focus { border-color: var(--red); background: rgba(255,255,255,0.1); }
        .signup-form button {
            padding: 16px 32px; background: var(--red); color: white;
            border: none; border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 800; font-size: 1rem;
            letter-spacing: 0.5px; cursor: pointer;
            transition: all 0.3s; text-transform: uppercase;
        }
        .signup-form button:hover { background: var(--red-dark); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(213,57,73,0.4); }
        .signup-form button:disabled { opacity: 0.6; cursor: not-allowed; transform: none; box-shadow: none; }
        .signup-privacy { color: rgba(255,255,255,0.35); font-size: 0.75rem; margin-top: 8px; }
        .signup-success { display: none; background: rgba(34,197,94,0.12); border: 1.5px solid rgba(34,197,94,0.4); border-radius: 12px; padding: 24px; margin-top: 20px; }
        .signup-success.show { display: block; animation: fadeInUp 0.5s ease; }
        .signup-success .success-icon { font-size: 2rem; margin-bottom: 8px; display: block; }
        .signup-success h3 { color: #4ade80; font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 800; margin-bottom: 4px; }
        .signup-success p { color: rgba(255,255,255,0.7); font-size: 0.9rem; }

        /* CTA / SOCIAL */
        .cta-section { padding: 50px 20px; background: var(--navy-dark); text-align: center; }
        .cta-content { max-width: 600px; margin: 0 auto; }
        .cta-content h2 { font-family: 'Poppins', sans-serif; font-size: 1.5rem; font-weight: 900; color: white; margin-bottom: 8px; }
        .cta-content p { color: rgba(255,255,255,0.5); margin-bottom: 20px; font-size: 0.95rem; }
        .social-links { display: flex; gap: 16px; justify-content: center; margin-top: 16px; }
        .social-links a {
            width: 48px; height: 48px; border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.2);
            display: flex; align-items: center; justify-content: center;
            transition: all 0.3s;
        }
        .social-links a:hover { border-color: var(--red); background: rgba(213,57,73,0.15); transform: translateY(-3px); }
        .social-links a svg { width: 20px; height: 20px; fill: white; }

        /* FOOTER */
        footer {
            background: var(--navy-dark); padding: 30px 20px;
            text-align: center; border-top: 1px solid rgba(255,255,255,0.05);
        }
        footer p { color: rgba(255,255,255,0.4); font-size: 0.85rem; }
        footer a { color: rgba(255,255,255,0.6); text-decoration: none; }
        footer a:hover { color: white; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            header { padding: 12px 20px; }
            .logo-wrap img { height: 34px; }
            .logo-divider, .logo-location { display: none; }
            .header-cta { padding: 8px 18px; font-size: 0.8rem; }
            .hero { min-height: 70vh; padding: 60px 20px; }
            .info-grid { grid-template-columns: 1fr; }
            .hours-container { grid-template-columns: 1fr; gap: 30px; }
            .hours-right { padding: 30px; }
            .hours-right .big-text { font-size: 3rem; }
            .products-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
            .hero-buttons { flex-direction: column; align-items: center; }
            .btn-primary, .btn-outline { width: 100%; max-width: 300px; justify-content: center; text-align: center; }
            .hero-offer { flex-direction: column; text-align: center; gap: 6px; }
            .signup-row { flex-direction: column; }
            .signup-perks { flex-direction: column; align-items: center; gap: 12px; }
            .countdown-item { min-width: 80px; padding: 16px 20px; }
            .countdown-item .number { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

<div class="announce-bar">
    <span>OPENING 10 - 15 JULI 2026 — THE HEALTH HOUSE KOMT NAAR AMSTERDAM IJBURG</span>
</div>

<header>
    <div class="logo-wrap">
        <img src="https://thehealthhouse.eu/wp-content/uploads/2022/11/Logo.svg" alt="The Health House" onerror="this.onerror=null;this.src='https://raw.githubusercontent.com/healthhouse-repo/thh-thailand/main/assets/tth-logo.svg';">
        <div class="logo-divider"></div>
        <span class="logo-location">IJburg</span>
    </div>
    <a href="#aanmelden" class="header-cta">Meld Je Aan</a>
</header>

<section class="hero">
    <div class="hero-pattern"></div>
    <div class="hero-content">
        <div class="hero-badge">
            <span class="dot"></span>
            Nieuwe winkel
        </div>
        <h1>WIJ KOMEN NAAR<br><span class="accent">IJBURG</span></h1>
        <p class="location-text">Jouw nieuwe bestemming voor <strong>supplementen</strong>, <strong>sportvoeding</strong> & <strong>gezondheid</strong></p>
        <p class="opening-date">OPENING 10 - 15 JULI 2026</p>
        <div class="hero-address">
            <svg width="16" height="16" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            IJburglaan 837, Amsterdam IJburg
        </div>
        <div class="hero-offer">
            <span class="gift-icon">🎁</span>
            <p>Meld je aan voor <strong>20% korting</strong> + een gratis gepersonaliseerde goodiebag!</p>
        </div>
        <div class="hero-buttons">
            <a href="#aanmelden" class="btn-primary">
                <svg width="18" height="18" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                Meld Je Nu Aan
            </a>
            <a href="#openingstijden" class="btn-outline">Bekijk Openingstijden</a>
        </div>
    </div>
</section>

<section class="countdown-section">
    <h2>Aftellen naar de opening</h2>
    <div class="countdown-grid" id="countdown">
        <div class="countdown-item"><div class="number" id="cd-days">--</div><div class="label">Dagen</div></div>
        <div class="countdown-item"><div class="number" id="cd-hours">--</div><div class="label">Uren</div></div>
        <div class="countdown-item"><div class="number" id="cd-mins">--</div><div class="label">Minuten</div></div>
        <div class="countdown-item"><div class="number" id="cd-secs">--</div><div class="label">Seconden</div></div>
    </div>
</section>

<section class="info-section">
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon"><svg fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>
            <h3>600+ Producten</h3>
            <p>Van <span class="highlight">whey protein</span> tot vitamines — alles wat je nodig hebt onder een dak.</p>
        </div>
        <div class="info-card">
            <div class="info-icon"><svg fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3>Expert Advies</h3>
            <p>Ons team helpt je met <span class="highlight">persoonlijk advies</span> om jouw doelen te bereiken.</p>
        </div>
        <div class="info-card">
            <div class="info-icon"><svg fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
            <h3>Topmerken</h3>
            <p>Alleen <span class="highlight">A-merken</span> zoals Optimum Nutrition, Applied Nutrition, Ryse & meer.</p>
        </div>
    </div>
</section>

<section class="hours-section" id="openingstijden">
    <div class="hours-container">
        <div class="hours-left">
            <h2>Openingstijden</h2>
            <p>Wij zijn dagelijks voor je klaar in Amsterdam IJburg.</p>
            <div class="hours-table">
                <div class="hours-row"><span class="day">Maandag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row"><span class="day">Dinsdag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row"><span class="day">Woensdag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row"><span class="day">Donderdag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row"><span class="day">Vrijdag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row"><span class="day">Zaterdag</span><span class="time">10:00 — 18:00</span></div>
                <div class="hours-row sunday"><span class="day">Zondag</span><span class="time">12:00 — 18:00</span></div>
            </div>
        </div>
        <div class="hours-right">
            <div class="big-text">7</div>
            <div class="sub-text">DAGEN PER WEEK</div>
            <div class="divider"></div>
            <div class="tagline">Persoonlijk advies & directe afhaalmogelijkheid — geen wachten op bezorging.</div>
        </div>
    </div>
</section>

<section class="map-section" id="locatie">
    <div class="map-header">
        <h2>Vind Ons</h2>
        <p>IJburglaan 837, Amsterdam IJburg</p>
    </div>
    <div class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.5!2d4.9958!3d52.3533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60997b5d3a0e7%3A0x0!2zNTLCsDIxJzEyLjAiTiA0wrA1OSc0NS4wIkU!5e0!3m2!1snl!2snl!4v1700000000000!5m2!1snl!2snl&q=IJburglaan+837,+Amsterdam" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="products-section">
    <h2>Wat Vind Je Bij Ons?</h2>
    <p class="subtitle">Een compleet assortiment voor jouw gezondheid en sportdoelen</p>
    <div class="products-grid">
        <div class="product-cat"><span class="cat-icon">💪</span><h4>Proteïne</h4><p>Whey, Casein, Vegan</p></div>
        <div class="product-cat"><span class="cat-icon">⚡</span><h4>Pre-Workout</h4><p>Energie & Focus</p></div>
        <div class="product-cat"><span class="cat-icon">🔥</span><h4>Vetverbranders</h4><p>Afvallen & Snijden</p></div>
        <div class="product-cat"><span class="cat-icon">💊</span><h4>Vitamines</h4><p>Gezondheid & Vitaliteit</p></div>
        <div class="product-cat"><span class="cat-icon">🥜</span><h4>Gezonde Snacks</h4><p>Repen & Meer</p></div>
        <div class="product-cat"><span class="cat-icon">🏋️</span><h4>Creatine</h4><p>Kracht & Power</p></div>
        <div class="product-cat"><span class="cat-icon">🥤</span><h4>Verse Shakes</h4><p>Vers gemaakt in de winkel</p></div>
        <div class="product-cat"><span class="cat-icon">🎯</span><h4>Accessoires</h4><p>Shakers & Gear</p></div>
    </div>
</section>

<section class="signup-section" id="aanmelden">
    <div class="signup-inner">
        <span class="signup-gift">🎁</span>
        <h2>ONTVANG <span class="accent">20% KORTING</span><br>+ GRATIS GOODIEBAG</h2>
        <p class="signup-sub">Meld je aan en ontvang een persoonlijke welkomstvoucher en een gratis gepersonaliseerde goodiebag bij je eerste bezoek aan The Health House IJburg.</p>
        <div class="signup-perks">
            <div class="signup-perk"><span class="check"><svg fill="none" stroke="#D53949" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>20% korting voucher</div>
            <div class="signup-perk"><span class="check"><svg fill="none" stroke="#D53949" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>Gratis goodiebag</div>
            <div class="signup-perk"><span class="check"><svg fill="none" stroke="#D53949" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>Exclusieve updates</div>
        </div>
        <form class="signup-form" id="signupForm" onsubmit="handleSignup(event)">
            <div class="signup-row">
                <input type="text" name="naam" placeholder="Voornaam" required>
                <input type="text" name="achternaam" placeholder="Achternaam">
            </div>
            <input type="email" name="email" placeholder="E-mailadres" required>
            <input type="tel" name="telefoon" placeholder="Telefoonnummer (optioneel)">
            <button type="submit" id="signupBtn">MELD JE AAN — HET IS GRATIS!</button>
        </form>
        <p class="signup-privacy">We respecteren je privacy. Je gegevens worden alleen gebruikt voor deze actie.</p>
        <div class="signup-success" id="signupSuccess">
            <span class="success-icon">✅</span>
            <h3>Je bent aangemeld!</h3>
            <p>We sturen je voucher en goodiebag-details naar je e-mail. Tot snel in IJburg!</p>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-content">
        <h2>Volg Ons Voor Updates</h2>
        <p>Blijf op de hoogte van onze opening, aanbiedingen en meer.</p>
        <div class="social-links">
            <a href="https://www.instagram.com/thehealthhouse.nl" target="_blank" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
            <a href="https://www.facebook.com/thehealthhousenl" target="_blank" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
            <a href="https://www.tiktok.com/@thehealthhouse" target="_blank" aria-label="TikTok"><svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2026 The Health House. Alle rechten voorbehouden. | <a href="https://www.thehealthhouse.eu" target="_blank">thehealthhouse.eu</a></p>
</footer>

<script>
// Countdown to July 10, 2026
function updateCountdown() {
    const target = new Date('2026-07-10T10:00:00+02:00');
    const now = new Date();
    const diff = target - now;
    if (diff <= 0) {
        document.getElementById('cd-days').textContent = '0';
        document.getElementById('cd-hours').textContent = '0';
        document.getElementById('cd-mins').textContent = '0';
        document.getElementById('cd-secs').textContent = '0';
        return;
    }
    const d = Math.floor(diff / 86400000);
    const h = Math.floor((diff % 86400000) / 3600000);
    const m = Math.floor((diff % 3600000) / 60000);
    const s = Math.floor((diff % 60000) / 1000);
    document.getElementById('cd-days').textContent = d;
    document.getElementById('cd-hours').textContent = h;
    document.getElementById('cd-mins').textContent = m;
    document.getElementById('cd-secs').textContent = s;
}
updateCountdown();
setInterval(updateCountdown, 1000);

// Form submission
function handleSignup(e) {
    e.preventDefault();
    const form = e.target;
    const btn = document.getElementById('signupBtn');
    const data = {
        naam: form.naam.value.trim(),
        achternaam: form.achternaam.value.trim(),
        email: form.email.value.trim(),
        telefoon: form.telefoon.value.trim(),
        bron: 'IJburg Landing Page',
        datum: new Date().toISOString()
    };
    btn.disabled = true;
    btn.textContent = 'Even geduld...';
    const signups = JSON.parse(localStorage.getItem('thh_ijburg_signups') || '[]');
    signups.push(data);
    localStorage.setItem('thh_ijburg_signups', JSON.stringify(signups));
    setTimeout(() => {
        form.style.display = 'none';
        document.getElementById('signupSuccess').classList.add('show');
        fetch('https://formsubmit.co/ajax/info@thehealthhouse.nl', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                _subject: 'Nieuwe IJburg aanmelding: ' + data.naam,
                Naam: data.naam + ' ' + data.achternaam,
                Email: data.email,
                Telefoon: data.telefoon || 'Niet opgegeven',
                Datum: data.datum
            })
        }).catch(() => {});
    }, 800);
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Store",
    "name": "The Health House IJburg",
    "description": "Supplementen, sportvoeding en gezondheidsproducten in Amsterdam IJburg. Opening juli 2026.",
    "url": "https://thehealthhouse.eu/ijburg/",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "IJburglaan 837",
        "addressLocality": "Amsterdam",
        "addressRegion": "Noord-Holland",
        "postalCode": "1087 GG",
        "addressCountry": "NL"
    },
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
            "opens": "10:00",
            "closes": "18:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Sunday",
            "opens": "12:00",
            "closes": "18:00"
        }
    ],
    "parentOrganization": {
        "@type": "Organization",
        "name": "The Health House",
        "url": "https://www.thehealthhouse.eu"
    }
}
</script>

</body>
</html>
    <?php
    exit;
});
