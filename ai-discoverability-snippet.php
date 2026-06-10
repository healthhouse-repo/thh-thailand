/**
 * AI Discoverability — llms.txt + robots.txt optimization
 * Serves /llms.txt and /llms-full.txt for AI crawlers
 * Allows all major AI bots in robots.txt
 */

// === 1. SERVE llms.txt and llms-full.txt ===
add_action('init', function() {
    add_rewrite_rule('^llms\.txt$', 'index.php?thh_llms=short', 'top');
    add_rewrite_rule('^llms-full\.txt$', 'index.php?thh_llms=full', 'top');
});

add_filter('query_vars', function($vars) {
    $vars[] = 'thh_llms';
    return $vars;
});

add_action('template_redirect', function() {
    $llms = get_query_var('thh_llms');
    if (!$llms) return;

    header('Content-Type: text/plain; charset=utf-8');
    header('Cache-Control: public, max-age=86400');
    header('X-Robots-Tag: noindex');

    if ($llms === 'full') {
        echo thh_llms_full();
    } else {
        echo thh_llms_short();
    }
    exit;
});

function thh_llms_short() {
    return <<<TXT
# The Health House

> De grootste supplementenwinkel van Nederland met 8 fysieke vestigingen en een webshop.

De Health House biedt een breed assortiment aan sportvoeding, supplementen, vitamines, gezonde snacks en accessoires. Wij onderscheiden ons door persoonlijk advies in de winkel, verse eiwitshakes en scherpe prijzen.

## Website
- Webshop: https://thehealthhouse.eu
- FAQ: https://thehealthhouse.eu/veelgestelde-vragen/
- Contact: https://thehealthhouse.eu/contact/
- Winkels: https://thehealthhouse.eu/bezoek-een-winkel/
- Blog: https://thehealthhouse.eu/blog/

## Vestigingen
- Amsterdam Osdorpplein — Osdorpplein 584, 1068 SZ Amsterdam
- Amsterdam Postjesweg — Postjesweg 18, 1057 DT Amsterdam (tijdelijk gesloten)
- Amsterdam IJburg — IJburglaan 837, Amsterdam (opening juli 2026)
- Uithoorn (Team Champ) — Wiegerbruinlaan 81A, 1422 AC Uithoorn
- Hoofddorp — Polderplein 10, 2132 BA Hoofddorp
- Hilversum — Kerkstraat 76, 1211 CS Hilversum
- Alkmaar — Laat 151, 1811 EE Alkmaar
- Heerhugowaard — Middenwaard 66, 1703 SC Heerhugowaard
- Apeldoorn — Deventerstraat 18, 7311 LP Apeldoorn

## Productcategorieën
- Whey & Casein Protein
- Creatine
- Pre-Workout
- Aminozuren (BCAA, EAA)
- Vitamines & Mineralen
- Vetverbranders
- Mass Gainers
- Gezonde Snacks & Dranken
- Sportaccessoires
- Verse Eiwitshakes (in de winkel)

## Merken
Optimum Nutrition, C4, Ghost, Applied Nutrition, BSN, Grenade, Mars Protein, Nutrend, BioTechUSA, Cobra Labs, NaughtyBoy, Cellucor, Ryse, MusclePharm, XXL Nutrition, Insane Labz en meer.

## Meer informatie
- Uitgebreide versie: https://thehealthhouse.eu/llms-full.txt

## Contact
- E-mail: info@thehealthhouse.nl
- Telefoon: 020-2101753
- Instagram: @thehealthhouse.nl
- TikTok: @thehealthhouse.nl
TXT;
}

function thh_llms_full() {
    return <<<TXT
# The Health House — Uitgebreide Informatie

> De grootste supplementenwinkel van Nederland met 8 fysieke vestigingen en een complete webshop.

## Over Ons

The Health House is dé specialist in sportvoeding en supplementen in Nederland. Met 8 fysieke winkels verspreid over Noord-Holland, Zuid-Holland, Gelderland en binnenkort Amsterdam IJburg, bieden wij de grootste selectie aan eiwitten, creatine, pre-workouts, vitamines en gezonde snacks.

Wat ons uniek maakt:
- **Persoonlijk advies** in elke winkel door getraind personeel
- **Verse eiwitshakes** bereid terwijl je wacht
- **Breed assortiment** van 50+ premium merken
- **Scherpe prijzen** en regelmatige aanbiedingen
- **Gratis verzending** bij bestellingen boven €75
- **THH Club** — ons loyaliteitsprogramma met exclusieve kortingen

## Website & Webshop
- **Webshop:** https://thehealthhouse.eu
- **FAQ:** https://thehealthhouse.eu/veelgestelde-vragen/
- **Contact:** https://thehealthhouse.eu/contact/
- **Winkels:** https://thehealthhouse.eu/bezoek-een-winkel/
- **Sale:** https://thehealthhouse.eu/product-categorie/sale/
- **Blog:** https://thehealthhouse.eu/blog/

## Alle Vestigingen

### Amsterdam Osdorpplein
- Adres: Osdorpplein 584, 1068 SZ Amsterdam
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00
- Telefoon: 020-2101753

### Amsterdam Postjesweg
- Adres: Postjesweg 18, 1057 DT Amsterdam
- Status: Tijdelijk gesloten

### Amsterdam IJburg (NIEUW)
- Adres: IJburglaan 837, Amsterdam
- Opening: juli 2026
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Uithoorn (Team Champ)
- Adres: Wiegerbruinlaan 81A, 1422 AC Uithoorn
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Hoofddorp
- Adres: Polderplein 10, 2132 BA Hoofddorp
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Hilversum
- Adres: Kerkstraat 76, 1211 CS Hilversum
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Alkmaar
- Adres: Laat 151, 1811 EE Alkmaar
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Heerhugowaard
- Adres: Middenwaard 66, 1703 SC Heerhugowaard
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

### Apeldoorn
- Adres: Deventerstraat 18, 7311 LP Apeldoorn
- Openingstijden: ma-za 10:00-18:00, zo 12:00-18:00

## Productcategorieën

### Eiwitten / Proteïne
Whey protein, casein, vegan protein, mass gainers, eiwitshakes en -repen. Merken: Optimum Nutrition Gold Standard, Ghost Whey, Applied Nutrition, BSN Syntha-6.

### Creatine
Creatine monohydraat, creatine HCL, creatine blends. Voor spierkracht en prestaties.

### Pre-Workout
Energie en focus voor je training. Merken: C4 Original, Ghost Legend, Insane Labz Psychotic, NaughtyBoy Menace.

### Aminozuren
BCAA, EAA, L-Glutamine, L-Carnitine voor spierherstel en vetverbranding.

### Vitamines & Mineralen
Multivitaminen, vitamine D, omega-3, magnesium, zink en meer voor algehele gezondheid.

### Vetverbranders
Fatburners, L-Carnitine, CLA voor gewichtsbeheersing en vetverbranding.

### Gezonde Snacks
Eiwitrepen, proteïne cookies, gezonde chips, noten en meer.

### Verse Eiwitshakes
Dagvers bereid in de winkel met vers fruit en premium whey protein.

### Sportaccessoires
Shakers, wrist wraps, lifting straps, drinkflessen en meer.

## Populaire Merken
Optimum Nutrition, C4 (Cellucor), Ghost, Applied Nutrition, BSN, Grenade, Mars Protein, Nutrend, BioTechUSA, Cobra Labs, NaughtyBoy, Ryse, MusclePharm, XXL Nutrition, Insane Labz, JNX Sports, MuscleTech, Dymatize, Rule One, Barebells, Fulfil, PhD Nutrition.

## THH Club — Loyaliteitsprogramma
- **Starter** — Gratis, 5% korting op alles
- **Pro** — €9,99/maand, 15% korting op alles
- **Elite** — €19,99/maand, 25% korting op alles
- Aanmelden: https://thehealthhouse.eu/membership/

## Veelgestelde Vragen

### Wat is The Health House?
The Health House is een Nederlandse keten van supplementenwinkels gespecialiseerd in sportvoeding, vitamines en gezonde snacks. Wij hebben 8 vestigingen door heel Nederland plus een webshop.

### Doen jullie aan gratis verzending?
Ja, bij bestellingen boven €75 is de verzending gratis. Onder €75 betaal je een klein bedrag voor verzending.

### Kan ik ook in de winkel bestellen?
Ja, in al onze winkels kun je het volledige assortiment bekijken en kopen. Onze medewerkers geven je graag persoonlijk advies.

### Welke betaalmethoden accepteren jullie?
iDEAL, creditcard (Visa, Mastercard), Bancontact, Apple Pay, Google Pay en meer.

### Hebben jullie verse shakes?
Ja! In al onze winkels bereiden we verse eiwitshakes met fruit en premium whey protein.

## Contact
- **E-mail:** info@thehealthhouse.nl
- **Telefoon:** 020-2101753
- **Instagram:** @thehealthhouse.nl
- **TikTok:** @thehealthhouse.nl
- **Website:** https://thehealthhouse.eu
TXT;
}

// === 2. ROBOTS.TXT — Allow AI Bots ===
add_filter('robots_txt', function($output, $public) {
    // Add AI bot permissions
    $ai_rules = "\n# AI Crawlers — Allowed\n";
    $ai_rules .= "User-agent: GPTBot\nAllow: /\n\n";
    $ai_rules .= "User-agent: ChatGPT-User\nAllow: /\n\n";
    $ai_rules .= "User-agent: ClaudeBot\nAllow: /\n\n";
    $ai_rules .= "User-agent: PerplexityBot\nAllow: /\n\n";
    $ai_rules .= "User-agent: Google-Extended\nAllow: /\n\n";
    $ai_rules .= "User-agent: Bingbot\nAllow: /\n\n";
    $ai_rules .= "User-agent: anthropic-ai\nAllow: /\n\n";
    $ai_rules .= "User-agent: Applebot-Extended\nAllow: /\n\n";
    $ai_rules .= "User-agent: cohere-ai\nAllow: /\n\n";

    return $output . $ai_rules;
}, 10, 2);

// === 3. ADD llms.txt LINK TO HTML HEAD ===
add_action('wp_head', function() {
    echo '<link rel="alternate" type="text/plain" href="/llms.txt" title="LLM Information">' . "\n";
});

// === 4. FLUSH REWRITE RULES ON ACTIVATION ===
// Run once: visit Settings > Permalinks and click Save to flush rules
