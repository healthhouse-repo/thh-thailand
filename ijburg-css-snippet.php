<?php
// IJburg Landing Page — CSS Injection
// Injects CSS only on the /ijburg/ page
add_action('wp_head', function() {
    if (!is_page('ijburg')) return;
    echo '<style id="ijburg-css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

.ijburg-page * {
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
.ijburg-page {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Announcement Bar */
.ijburg-announce {
    background: #E31E24;
    color: white;
    text-align: center;
    padding: 12px 20px;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

/* Hero Section */
.ijburg-hero {
    background: linear-gradient(135deg, #021152 0%, #0a1a5c 50%, #0d2060 100%);
    padding: 100px 20px 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ijburg-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(ellipse at center, rgba(227,30,36,0.08) 0%, transparent 70%);
    animation: heroGlow 8s ease-in-out infinite;
}
@keyframes heroGlow {
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.2); opacity: 1; }
}
.ijburg-hero-badge {
    display: inline-block;
    background: rgba(227,30,36,0.15);
    border: 1px solid rgba(227,30,36,0.3);
    color: #E31E24;
    padding: 8px 24px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 30px;
    position: relative;
}
.ijburg-hero h1 {
    color: white;
    font-size: clamp(36px, 6vw, 64px);
    font-weight: 900;
    line-height: 1.1;
    margin: 0 0 10px;
    position: relative;
    text-transform: uppercase;
}
.ijburg-hero h1 span {
    color: #E31E24;
}
.ijburg-hero-sub {
    color: rgba(255,255,255,0.7);
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 50px;
    position: relative;
}

/* Countdown */
.ijburg-countdown {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    position: relative;
}
.ijburg-countdown-item {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 16px;
    padding: 20px 25px;
    min-width: 100px;
    backdrop-filter: blur(10px);
}
.ijburg-countdown-number {
    color: white;
    font-size: 42px;
    font-weight: 800;
    line-height: 1;
}
.ijburg-countdown-label {
    color: rgba(255,255,255,0.5);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 5px;
}

/* Info Cards */
.ijburg-info {
    padding: 80px 20px;
    background: #f8f8f8;
}
.ijburg-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}
.ijburg-info-card {
    background: white;
    border-radius: 16px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    transition: transform 0.3s;
}
.ijburg-info-card:hover {
    transform: translateY(-5px);
}
.ijburg-info-icon {
    font-size: 48px;
    margin-bottom: 20px;
}
.ijburg-info-card h3 {
    color: #021152;
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 10px;
}
.ijburg-info-card p {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
}

/* Opening Times */
.ijburg-times {
    padding: 80px 20px;
    background: white;
}
.ijburg-section-title {
    text-align: center;
    margin-bottom: 50px;
}
.ijburg-section-title h2 {
    color: #021152;
    font-size: 32px;
    font-weight: 800;
    margin: 0 0 10px;
    text-transform: uppercase;
}
.ijburg-section-title p {
    color: #666;
    font-size: 16px;
    margin: 0;
}
.ijburg-times-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
    align-items: start;
}
.ijburg-times-card {
    background: #f8f8f8;
    border-radius: 16px;
    padding: 40px;
}
.ijburg-times-card h3 {
    color: #021152;
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 25px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.ijburg-time-row {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid #e5e5e5;
    color: #333;
    font-size: 15px;
}
.ijburg-time-row:last-child {
    border-bottom: none;
}
.ijburg-map-card {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.ijburg-map-card iframe {
    width: 100%;
    height: 350px;
    border: none;
}
.ijburg-map-address {
    background: #021152;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 15px;
}
.ijburg-map-address a {
    color: #E31E24;
    text-decoration: none;
    font-weight: 600;
}

/* Categories */
.ijburg-categories {
    padding: 80px 20px;
    background: #f8f8f8;
}
.ijburg-cat-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
}
.ijburg-cat-card {
    background: white;
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
}
.ijburg-cat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}
.ijburg-cat-emoji {
    font-size: 40px;
    margin-bottom: 12px;
}
.ijburg-cat-card h4 {
    color: #021152;
    font-size: 16px;
    font-weight: 700;
    margin: 0 0 5px;
}
.ijburg-cat-card p {
    color: #999;
    font-size: 13px;
    margin: 0;
}

/* Signup Section */
.ijburg-signup {
    padding: 80px 20px;
    background: linear-gradient(135deg, #021152, #0d2060);
    text-align: center;
}
.ijburg-signup h2 {
    color: white;
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 900;
    margin: 0 0 5px;
    text-transform: uppercase;
}
.ijburg-signup h2 span {
    color: #E31E24;
}
.ijburg-signup-sub {
    color: rgba(255,255,255,0.7);
    font-size: 16px;
    max-width: 600px;
    margin: 15px auto 30px;
    line-height: 1.6;
}
.ijburg-benefits {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}
.ijburg-benefit {
    color: white;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.ijburg-benefit-check {
    background: #E31E24;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}
.ijburg-form {
    max-width: 550px;
    margin: 0 auto;
}
.ijburg-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 12px;
}
.ijburg-form input {
    width: 100%;
    padding: 16px 20px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 10px;
    background: rgba(255,255,255,0.08);
    color: white;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    transition: border-color 0.3s;
}
.ijburg-form input::placeholder {
    color: rgba(255,255,255,0.4);
}
.ijburg-form input:focus {
    outline: none;
    border-color: #E31E24;
    background: rgba(255,255,255,0.12);
}
.ijburg-form-full {
    margin-bottom: 12px;
}
.ijburg-form-btn {
    width: 100%;
    padding: 18px;
    background: #E31E24;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background 0.3s, transform 0.1s;
}
.ijburg-form-btn:hover {
    background: #c91a1f;
}
.ijburg-form-btn:active {
    transform: scale(0.98);
}
.ijburg-form-privacy {
    color: rgba(255,255,255,0.4);
    font-size: 12px;
    margin-top: 15px;
}

/* Social */
.ijburg-social {
    padding: 60px 20px;
    background: #0a0f2e;
    text-align: center;
}
.ijburg-social h3 {
    color: white;
    font-size: 24px;
    font-weight: 800;
    margin: 0 0 8px;
}
.ijburg-social p {
    color: rgba(255,255,255,0.5);
    font-size: 14px;
    margin: 0 0 25px;
}
.ijburg-social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
}
.ijburg-social-link {
    width: 50px;
    height: 50px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s;
}
.ijburg-social-link:hover {
    background: #E31E24;
    border-color: #E31E24;
    transform: scale(1.1);
}
.ijburg-social-link svg {
    width: 22px;
    height: 22px;
    fill: currentColor;
}

/* Responsive */
@media (max-width: 768px) {
    .ijburg-countdown { gap: 10px; }
    .ijburg-countdown-item { min-width: 70px; padding: 15px; }
    .ijburg-countdown-number { font-size: 30px; }
    .ijburg-times-grid { grid-template-columns: 1fr; }
    .ijburg-cat-grid { grid-template-columns: repeat(2, 1fr); }
    .ijburg-form-row { grid-template-columns: 1fr; }
    .ijburg-hero-footer-grid { grid-template-columns: 1fr 1fr; }
    .ijburg-benefits { flex-direction: column; align-items: center; }
}

/* Form Labels */
.ijburg-form-label {
    display: block;
    color: rgba(255,255,255,0.8);
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 6px;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.ijburg-form-label .required {
    color: #E31E24;
}

/* Hero Footer */
.ijburg-hero-footer {
    background: linear-gradient(135deg, #021152 0%, #0d2060 100%);
    padding: 60px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ijburg-hero-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(227,30,36,0.1) 0%, transparent 60%);
}
.ijburg-hero-footer-inner {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.ijburg-hero-footer h2 {
    color: white;
    font-size: clamp(24px, 4vw, 40px);
    font-weight: 900;
    text-transform: uppercase;
    margin: 0 0 10px;
    line-height: 1.2;
}
.ijburg-hero-footer h2 span {
    color: #E31E24;
}
.ijburg-hero-footer p {
    color: rgba(255,255,255,0.7);
    font-size: 16px;
    line-height: 1.6;
    margin: 0 auto 30px;
    max-width: 650px;
}
.ijburg-hero-footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    margin-bottom: 35px;
}
.ijburg-hf-item {
    display: flex;
    align-items: center;
    gap: 15px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 20px;
    text-align: left;
}
.ijburg-hf-icon {
    font-size: 28px;
    flex-shrink: 0;
}
.ijburg-hf-text h4 {
    color: white;
    font-size: 15px;
    font-weight: 700;
    margin: 0 0 3px;
}
.ijburg-hf-text p {
    color: rgba(255,255,255,0.5);
    font-size: 13px;
    margin: 0;
}
.ijburg-hero-footer-btn {
    display: inline-block;
    background: #E31E24;
    color: white;
    padding: 16px 50px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background 0.3s, transform 0.1s;
}
.ijburg-hero-footer-btn:hover {
    background: #c91a1f;
    color: white;
    text-decoration: none;
}
</style>';
});
