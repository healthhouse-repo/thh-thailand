<?php
// IJburg Landing Page — CSS Injection
// Injects CSS only on the /ijburg/ page
add_action('wp_head', function() {
    if (!is_page('ijburg')) return;
    ?>
    <style id="ijburg-css">
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

.ijburg-page * {
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
}
.ijburg-page {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Announcement Bar */
.ijburg-announce {
    background: #E31837;
    color: white;
    text-align: center;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

/* Location Badge */
.ijburg-badge {
    display: inline-block;
    background: rgba(227, 24, 55, 0.1);
    color: #E31837;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* Hero Section */
.ijburg-hero {
    background: linear-gradient(135deg, #0A1628 0%, #1a2a4a 50%, #0A1628 100%);
    color: white;
    text-align: center;
    padding: 80px 20px 60px;
    position: relative;
    overflow: hidden;
}
.ijburg-hero::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(227,24,55,0.15) 0%, transparent 60%),
                radial-gradient(ellipse at 70% 50%, rgba(227,24,55,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.ijburg-hero h1 {
    font-size: clamp(36px, 6vw, 72px);
    font-weight: 900;
    margin: 0 0 10px;
    text-transform: uppercase;
    position: relative;
    color: white;
}
.ijburg-hero h1 span {
    color: #E31837;
}
.ijburg-hero p {
    font-size: 18px;
    opacity: 0.8;
    margin: 0 0 40px;
    position: relative;
    color: white;
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
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 20px 30px;
    min-width: 100px;
    border: 1px solid rgba(255,255,255,0.1);
}
.ijburg-countdown-number {
    font-size: 48px;
    font-weight: 800;
    color: #E31837;
    line-height: 1;
}
.ijburg-countdown-label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 0.7;
    margin-top: 5px;
    color: white;
}

/* Info Cards */
.ijburg-info-section {
    padding: 60px 20px;
    background: #f8f9fa;
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
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s ease;
}
.ijburg-info-card:hover {
    transform: translateY(-5px);
}
.ijburg-info-icon {
    font-size: 48px;
    margin-bottom: 20px;
}
.ijburg-info-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #0A1628;
    margin: 0 0 10px;
}
.ijburg-info-card p {
    font-size: 15px;
    color: #666;
    margin: 0;
    line-height: 1.6;
}

/* Opening Hours */
.ijburg-hours-section {
    padding: 60px 20px;
    background: white;
}
.ijburg-hours-section h2 {
    text-align: center;
    font-size: 32px;
    font-weight: 800;
    color: #0A1628;
    margin: 0 0 10px;
}
.ijburg-hours-subtitle {
    text-align: center;
    color: #666;
    font-size: 16px;
    margin: 0 0 40px;
}
.ijburg-hours-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}
.ijburg-hours-card {
    background: #f8f9fa;
    border-radius: 16px;
    padding: 30px;
}
.ijburg-hours-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #0A1628;
    margin: 0 0 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.ijburg-hours-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 15px;
}
.ijburg-hours-row:last-child {
    border-bottom: none;
}
.ijburg-hours-day {
    color: #333;
    font-weight: 500;
}
.ijburg-hours-time {
    color: #E31837;
    font-weight: 600;
}
.ijburg-map-card {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.ijburg-address-bar {
    background: #0A1628;
    color: white;
    padding: 15px 20px;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}

/* Product Categories */
.ijburg-categories {
    padding: 60px 20px;
    background: #f8f9fa;
}
.ijburg-categories h2 {
    text-align: center;
    font-size: 32px;
    font-weight: 800;
    color: #0A1628;
    margin: 0 0 10px;
}
.ijburg-categories-subtitle {
    text-align: center;
    color: #666;
    font-size: 16px;
    margin: 0 0 40px;
}
.ijburg-cat-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
}
.ijburg-cat-card {
    background: white;
    border-radius: 12px;
    padding: 25px 20px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    cursor: default;
}
.ijburg-cat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}
.ijburg-cat-emoji {
    font-size: 36px;
    margin-bottom: 10px;
}
.ijburg-cat-card h4 {
    font-size: 14px;
    font-weight: 700;
    color: #0A1628;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Signup Section */
.ijburg-signup {
    padding: 80px 20px;
    background: linear-gradient(135deg, #0A1628 0%, #1a2a4a 100%);
    color: white;
    text-align: center;
}
.ijburg-signup h2 {
    font-size: 36px;
    font-weight: 800;
    margin: 0 0 10px;
    color: white;
}
.ijburg-signup-subtitle {
    font-size: 18px;
    opacity: 0.8;
    margin: 0 0 40px;
    color: white;
}
.ijburg-signup-form {
    max-width: 500px;
    margin: 0 auto;
}
.ijburg-form-label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 6px;
    text-align: left;
    color: rgba(255,255,255,0.8);
}
.ijburg-signup-form input {
    width: 100%;
    padding: 14px 20px;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 10px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 15px;
    font-family: "Poppins", sans-serif;
    margin-bottom: 15px;
    transition: border-color 0.3s;
}
.ijburg-signup-form input::placeholder {
    color: rgba(255,255,255,0.5);
}
.ijburg-signup-form input:focus {
    outline: none;
    border-color: #E31837;
}
.ijburg-signup-btn {
    width: 100%;
    padding: 16px;
    background: #E31837;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: "Poppins", sans-serif;
    margin-top: 10px;
}
.ijburg-signup-btn:hover {
    background: #c41430;
    transform: translateY(-2px);
}
.ijburg-signup-note {
    font-size: 13px;
    opacity: 0.6;
    margin-top: 15px;
    color: white;
}

/* Social Links */
.ijburg-social {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}
.ijburg-social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    color: white;
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
}
.ijburg-social a:hover {
    background: #E31837;
    transform: translateY(-3px);
}

/* Hero Footer CTA */
.ijburg-hero-footer {
    background: linear-gradient(135deg, #E31837 0%, #c41430 100%);
    color: white;
    text-align: center;
    padding: 60px 20px;
    position: relative;
    overflow: hidden;
}
.ijburg-hero-footer::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.ijburg-hero-footer h2 {
    font-size: clamp(24px, 4vw, 40px);
    font-weight: 800;
    margin: 0 0 15px;
    text-transform: uppercase;
    position: relative;
    color: white;
}
.ijburg-hero-footer p {
    font-size: 18px;
    opacity: 0.9;
    margin: 0 0 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    color: white;
}
.ijburg-hero-footer-btn {
    display: inline-block;
    padding: 16px 40px;
    background: white;
    color: #E31837;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
}
.ijburg-hero-footer-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    color: #E31837;
}

/* Responsive */
@media (max-width: 768px) {
    .ijburg-hero {
        padding: 50px 15px 40px;
    }
    .ijburg-countdown {
        gap: 10px;
    }
    .ijburg-countdown-item {
        padding: 15px 20px;
        min-width: 70px;
    }
    .ijburg-countdown-number {
        font-size: 32px;
    }
    .ijburg-hours-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .ijburg-cat-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .ijburg-hero-footer {
        padding: 40px 15px;
    }
}
    </style>
    <?php
}, 999);
