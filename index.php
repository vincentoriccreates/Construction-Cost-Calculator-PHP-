<?php
// ─────────────────────────────────────────────────────────────────────────────
// DATA TABLES — all hardcoded from Excel reference sheet
// ─────────────────────────────────────────────────────────────────────────────

$structural_types = ['Residential', 'Agricultural', 'Commercial/Industrial', 'Government'];

$construction_types = [
    'I','II','III-A','III-B','III-C','III-D','IV-A','IV-B','IV-C','V-A','V-B','V-C',
    'I (2)','II (2)','III-A (2)','III-B (2)','III-C (2)','III-D (2)','IV-A (2)','IV-B (2)','IV-C (2)','V-A (2)','V-B (2)','V-C (2)',
    'I (3)','II (3)','III-A (3)','III-B (3)','III-C (3)','III-D (3)','IV-A (3)','IV-B (3)','IV-C (3)','V-A (3)','V-B (3)','V-C (3)',
    'I (4)','II (4)','III-A (4)','III-B (4)','III-C (4)','III-D (4)','IV-A (4)','IV-B (4)','IV-C (4)','V-A (4)','V-B (4)','V-C (4)',
    'I (5)','II (5)','III-A (5)','III-B (5)','III-C (5)','III-D (5)','IV-A (5)','IV-B (5)','IV-C (5)','V-A (5)','V-B (5)','V-C (5)',
    'I (6)','II (6)','III-A (6)','III-B (6)','III-C (6)','III-D (6)','IV-A (6)','IV-B (6)','IV-C (6)','V-A (6)','V-B (6)','V-C (6)',
    'I (7)','II (7)','III-A (7)','III-B (7)','III-C (7)','III-D (7)','IV-A (7)','IV-B (7)','IV-C (7)','V-A (7)','V-B (7)','V-C (7)',
    'I (8)','II (8)','III-A (8)','III-B (8)','III-C (8)','III-D (8)','IV-A (8)','IV-B (8)','IV-C (8)','V-A (8)','V-B (8)','V-C (8)',
    'I (9)','II (9)','III-A (9)','III-B (9)','III-C (9)','III-D (9)','IV-A (9)','IV-B (9)','IV-C (9)','V-A (9)','V-B (9)','V-C (9)',
    'I (10)','II (10)','III-A (10)','III-B (10)','III-C (10)','III-D (10)','IV-A (10)','IV-B (10)','IV-C (10)','V-A (10)','V-B (10)','V-C (10)',
    'I (11)','II (11)','III-A (11)','III-B (11)','III-C (11)','III-D (11)','IV-A (11)','IV-B (11)','IV-C (11)','V-A (11)','V-B (11)','V-C (11)',
    'I (12)','II (12)','III-A (12)','III-B (12)','III-C (12)','III-D (12)','IV-A (12)','IV-B (12)','IV-C (12)','V-A (12)','V-B (12)','V-C (12)',
    'I (13)','II (13)','III-A (13)','III-B (13)','III-C (13)','III-D (13)','IV-A (13)','IV-B (13)','IV-C (13)','V-A (13)','V-B (13)','V-C (13)',
];

$unit_costs = [
    // Group 1
    'I'        => 2890,   'II'       => 3190,   'III-A'    => 6200,   'III-B'    => 5300,
    'III-C'    => 4470,   'III-D'    => 3580,   'IV-A'     => 11010,  'IV-B'     => 9440,
    'IV-C'     => 8000,   'V-A'      => 15510,  'V-B'      => 14570,  'V-C'      => 12250,
    // Group 2
    'I (2)'    => 0,      'II (2)'   => 3120,   'III-A (2)'=> 6350,   'III-B (2)'=> 5820,
    'III-C (2)'=> 5020,   'III-D (2)'=> 4420,   'IV-A (2)' => 10750,  'IV-B (2)' => 9250,
    'IV-C (2)' => 8090,   'V-A (2)'  => 15520,  'V-B (2)'  => 14710,  'V-C (2)'  => 13220,
    // Group 3
    'I (3)'    => 0,      'II (3)'   => 0,      'III-A (3)'=> 0,      'III-B (3)'=> 0,
    'III-C (3)'=> 0,      'III-D (3)'=> 0,      'IV-A (3)' => 0,      'IV-B (3)' => 0,
    'IV-C (3)' => 0,      'V-A (3)'  => 6060,   'V-B (3)'  => 4850,   'V-C (3)'  => 0,
    // Group 4
    'I (4)'    => 0,      'II (4)'   => 0,      'III-A (4)'=> 0,      'III-B (4)'=> 0,
    'III-C (4)'=> 0,      'III-D (4)'=> 0,      'IV-A (4)' => 6670,   'IV-B (4)' => 5700,
    'IV-C (4)' => 4920,   'V-A (4)'  => 11620,  'V-B (4)'  => 9770,   'V-C (4)'  => 7870,
    // Group 5
    'I (5)'    => 0,      'II (5)'   => 0,      'III-A (5)'=> 0,      'III-B (5)'=> 0,
    'III-C (5)'=> 0,      'III-D (5)'=> 0,      'IV-A (5)' => 11690,  'IV-B (5)' => 9620,
    'IV-C (5)' => 8000,   'V-A (5)'  => 17500,  'V-B (5)'  => 14830,  'V-C (5)'  => 13380,
    // Group 6
    'I (6)'    => 0,      'II (6)'   => 0,      'III-A (6)'=> 0,      'III-B (6)'=> 0,
    'III-C (6)'=> 0,      'III-D (6)'=> 0,      'IV-A (6)' => 0,      'IV-B (6)' => 0,
    'IV-C (6)' => 0,      'V-A (6)'  => 9680,   'V-B (6)'  => 8730,   'V-C (6)'  => 0,
    // Group 7
    'I (7)'    => 0,      'II (7)'   => 0,      'III-A (7)'=> 0,      'III-B (7)'=> 0,
    'III-C (7)'=> 0,      'III-D (7)'=> 0,      'IV-A (7)' => 10880,  'IV-B (7)' => 10260,
    'IV-C (7)' => 9550,   'V-A (7)'  => 15840,  'V-B (7)'  => 14220,  'V-C (7)'  => 12880,
    // Group 8
    'I (8)'    => 0,      'II (8)'   => 0,      'III-A (8)'=> 0,      'III-B (8)'=> 0,
    'III-C (8)'=> 0,      'III-D (8)'=> 0,      'IV-A (8)' => 5800,   'IV-B (8)' => 5220,
    'IV-C (8)' => 4210,   'V-A (8)'  => 10260,  'V-B (8)'  => 8480,   'V-C (8)'  => 6650,
    // Group 9
    'I (9)'    => 0,      'II (9)'   => 0,      'III-A (9)'=> 0,      'III-B (9)'=> 0,
    'III-C (9)'=> 0,      'III-D (9)'=> 0,      'IV-A (9)' => 5720,   'IV-B (9)' => 4910,
    'IV-C (9)' => 3790,   'V-A (9)'  => 10250,  'V-B (9)'  => 7840,   'V-C (9)'  => 6540,
    // Group 10
    'I (10)'   => 0,      'II (10)'  => 0,      'III-A (10)'=> 0,     'III-B (10)'=> 0,
    'III-C (10)'=> 0,     'III-D (10)'=> 0,     'IV-A (10)' => 0,     'IV-B (10)' => 0,
    'IV-C (10)' => 0,     'V-A (10)' => 0,      'V-B (10)' => 10250,  'V-C (10)' => 6000,
    // Group 11
    'I (11)'   => 0,      'II (11)'  => 0,      'III-A (11)'=> 0,     'III-B (11)'=> 0,
    'III-C (11)'=> 0,     'III-D (11)'=> 0,     'IV-A (11)' => 0,     'IV-B (11)' => 0,
    'IV-C (11)' => 0,     'V-A (11)' => 5790,   'V-B (11)' => 4810,   'V-C (11)' => 3250,
    // Group 12
    'I (12)'   => 0,      'II (12)'  => 0,      'III-A (12)'=> 0,     'III-B (12)'=> 0,
    'III-C (12)'=> 0,     'III-D (12)'=> 0,     'IV-A (12)' => 0,     'IV-B (12)' => 0,
    'IV-C (12)' => 0,     'V-A (12)' => 0,      'V-B (12)' => 9280,   'V-C (12)' => 7320,
    // Group 13
    'I (13)'   => 0,      'II (13)'  => 0,      'III-A (13)'=> 0,     'III-B (13)'=> 0,
    'III-C (13)'=> 0,     'III-D (13)'=> 0,     'IV-A (13)' => 0,     'IV-B (13)' => 0,
    'IV-C (13)' => 0,     'V-A (13)' => 7570,      'V-B (13)' => 6890,   'V-C (13)' => 0,
];

$components = [
    'Carport (Close)'     => 40,
    'Mezzanine'           => 80,
    'Porch'               => 40,
    'Balcony'             => 50,
    'Garage'              => 45,
    'Open Terrace'        => 20,
    'CoveredTerrace'      => 40,
    'Roof Deck Penthouse' => 40,
    'Roof Deck Covered'   => 20,
    'Basement'            => 70,
    'Carport (Open)'      => 30,
];

$assessment_levels = [
    'Residential' => [
        [0, 175000, 0],         [175000, 300000, 0.05],
        [300000, 500000, 0.10], [500000, 750000, 0.15],
        [750000, 1000000, 0.20],[1000000, 2000000, 0.25],
        [2000000, 5000000, 0.30],[5000000, 10000000, 0.35],
        [10000000, null, 0.40],
    ],
    'Agricultural' => [
        [0, 300000, 0.10],      [300000, 500000, 0.15],
        [500000, 750000, 0.20], [750000, 1000000, 0.25],
        [1000000, 2000000, 0.30],[2000000, null, 0.40],
    ],
    'Commercial/Industrial' => [
        [0, 300000, 0.10],      [300000, 500000, 0.15],
        [500000, 750000, 0.20], [750000, 1000000, 0.25],
        [1000000, 2000000, 0.30],[2000000, 5000000, 0.35],
        [5000000, 10000000, 0.40],[10000000, null, 0.50],
    ],
    'Government' => [[0, 10000000, 0.15]],
];

$additional_items = [
    'Pavement (Tennis Court)'               => 100.00,
    'Pavement (Concrete 10 cm. thick)'      => 60.00,
    'Pavement (Concrete 15 cm. thick)'      => 65.00,
    'Pavement (Concrete 20 cm. thick)'      => 100.00,
    'Pavement (Asphalt 1 course)'           => 50.00,
    'Pavement (Asphalt 2 course)'           => 75.00,
    'Pavement (Asphalt 3 course)'           => 100.00,
    'Floor Finishes - Marble Slabs'         => 320.00,
    'Floor Finishes - Marble Tiles'         => 150.00,
    'Floor Finishes - Cracy Cut Marbles'    => 100.00,
    'Floor Finishes - Granalithic'          => 60.00,
    'Floor Finishes - Narra'                => 60.00,
    'Floor Finishes - Yakal'                => 80.00,
    'Floor Finishes - Narra/Fancy'          => 60.00,
    'Floor Finishes - Wood Tiles'           => 260.00,
    'Floor Finishes - Ordinary Wood Tiles'  => 200.00,
    'Floor Finishes - Vinyl Tiles'          => 150.00,
    'Floor Finishes - Wahout Feebles'       => 90.00,
    'Floor Finishes - Unglased Tiles'       => 120.00,
    'Walling - Double Walling (Ordinary Plywood)' => 300.00,
    'Walling - Double Walling (Narra Panelling)'  => 400.00,
    'Walling - Galzed White Tiles'          => 400.00,
    'Walling - Galzed Color Tiles'          => 450.00,
    'Walling - Fancy Tiles'                 => 450.00,
    'Walling - Synthetic Rubble'            => 400.00,
    'Walling - Bricks'                      => 400.00,
    'Swimming Pool -V(A)'                      => 7570.00,
    'Swimming Pool -V(B)'                      => 6890.00,
];

// Pass PHP data to JavaScript
$js_unit_costs        = json_encode($unit_costs);
$js_components        = json_encode($components);
$js_assessment_levels = json_encode($assessment_levels);
$js_additional_items  = json_encode($additional_items);
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Construction Cost Calculator</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  :root {
    --green-50:  #f0faf4;
    --green-100: #dcf5e6;
    --green-200: #b5eccc;
    --green-400: #4caf7d;
    --green-500: #2e9e64;
    --green-600: #1e7d4e;
    --ink:       #1a2332;
    --ink-light: #4a5568;
    --border:    #e2e8f0;
    --shadow-sm: 0 2px 8px rgba(30,50,80,.06);
    --shadow-md: 0 6px 24px rgba(30,50,80,.10);
    --shadow-lg: 0 16px 48px rgba(30,50,80,.14);
    --radius:    14px;
    --bg-primary: #fff;
    --bg-secondary: #f4f7fb;
    --text-primary: #1a2332;
    --text-secondary: #4a5568;
    --card-bg: #fff;
    --input-bg: #fff;
    --input-border: #e2e8f0;
    --table-header-bg: #1a2332;
    --table-header-text: #fff;
  }

  :root.dark-mode {
    --green-50:  #1a4d3e;
    --green-100: #2a6a54;
    --green-200: #3a8769;
    --ink:       #e8f0f7;
    --ink-light: #b8c5d6;
    --border:    #4a5a72;
    --shadow-sm: 0 2px 8px rgba(0,0,0,.25);
    --shadow-md: 0 6px 24px rgba(0,0,0,.3);
    --shadow-lg: 0 16px 48px rgba(0,0,0,.35);
    --bg-primary: #1a202c;
    --bg-secondary: #242d3d;
    --text-primary: #e8f0f7;
    --text-secondary: #b8c5d6;
    --card-bg: #2a3a4d;
    --input-bg: #1f2937;
    --input-border: #4a5a72;
    --table-header-bg: #1f2937;
    --table-header-text: #e8f0f7;
  }

  *, *::before, *::after { box-sizing: border-box; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg-secondary);
    color: var(--text-primary);
    min-height: 100vh;
    padding: 2rem 1rem;
    transition: background .3s, color .3s;
  }

  /* ── Page background texture ── */
  body::before {
    content: '';
    position: fixed; inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 20% 10%, rgba(76,175,125,.08) 0%, transparent 60%),
      radial-gradient(ellipse 60% 50% at 80% 90%, rgba(46,158,100,.06) 0%, transparent 55%);
    pointer-events: none; z-index: 0;
    transition: background .3s;
  }

  :root.dark-mode body::before {
    background:
      radial-gradient(ellipse 80% 60% at 20% 10%, rgba(46,158,100,.04) 0%, transparent 60%),
      radial-gradient(ellipse 60% 50% at 80% 90%, rgba(46,158,100,.02) 0%, transparent 55%);
  }

  .page-wrapper { position: relative; z-index: 1; max-width: 900px; margin: 0 auto; }

  /* ── Header ── */
  .page-header {
    text-align: center;
    margin-bottom: 2rem;
  }
  .page-header .badge-label {
    display: inline-block;
    background: var(--green-100);
    color: var(--green-600);
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    padding: .3rem .9rem;
    border-radius: 100px;
    margin-bottom: .75rem;
    transition: background .3s, color .3s;
  }

  :root.dark-mode .page-header .badge-label {
    background: rgba(58, 135, 105, 0.2);
    color: #7dd4c5;
  }

  .page-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.7rem, 4vw, 2.4rem);
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 .4rem;
    line-height: 1.15;
    transition: color .3s;
  }
  .page-header p {
    color: var(--text-secondary);
    font-size: .92rem;
    margin: 0;
    transition: color .3s;
  }

  /* ── Card ── */
  .calc-card {
    background: var(--card-bg);
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    border: 1px solid var(--border);
    transition: background .3s, border-color .3s, box-shadow .3s;
  }

  /* ── Section headers ── */
  .section-header {
    display: flex;
    align-items: center;
    gap: .6rem;
    padding: 1.1rem 1.6rem;
    background: var(--green-50);
    border-bottom: 1px solid var(--green-200);
    transition: background .3s, border-color .3s;
  }
  .section-header .dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--green-500);
    flex-shrink: 0;
    transition: background .3s;
  }
  .section-header span {
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .09em;
    text-transform: uppercase;
    color: var(--green-600);
    transition: color .3s;
  }

  /* ── Input Section ── */
  .input-section {
    padding: 1.5rem 1.6rem 1.3rem;
    background: linear-gradient(135deg, var(--green-50) 0%, rgba(248, 255, 254, 0.3) 100%);
    border-bottom: 1px solid var(--border);
    transition: background .3s;
  }

  :root.dark-mode .input-section {
    background: linear-gradient(135deg, var(--green-50) 0%, rgba(38, 45, 61, 0.3) 100%);
  }

  .input-section .row { gap: .6rem 0; }

  label.form-label {
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .04em;
    text-transform: uppercase;
    color: var(--text-secondary);
    margin-bottom: .35rem;
    transition: color .3s;
  }

  .form-select, .form-control {
    border: 1.5px solid var(--input-border);
    border-radius: 9px;
    padding: .55rem .85rem;
    font-size: .9rem;
    font-family: 'DM Sans', sans-serif;
    color: var(--text-primary);
    background-color: var(--input-bg);
    transition: border-color .18s, box-shadow .18s, background .2s, color .2s;
    height: 44px;
  }
  .form-select:focus, .form-control:focus {
    border-color: var(--green-400);
    box-shadow: 0 0 0 3px rgba(76,175,125,.18);
    outline: none;
  }

  /* EST COST display chip */
  .unit-cost-chip {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    background: var(--green-100);
    border: 1px solid var(--green-200);
    border-radius: 8px;
    padding: .45rem .85rem;
    font-family: 'DM Mono', monospace;
    font-size: .9rem;
    font-weight: 500;
    color: var(--green-600);
    min-width: 140px;
    height: 44px;
    transition: background .3s, border-color .3s, color .3s;
  }

  :root.dark-mode .unit-cost-chip {
    background: rgba(58, 135, 105, 0.15);
    border-color: rgba(122, 211, 197, 0.3);
    color: #7dd4c5;
  }

  .unit-cost-chip .chip-label {
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .05em;
    text-transform: uppercase;
    color: var(--green-500);
    opacity: .8;
  }

  /* ── Components Table Section ── */
  .table-section { padding: 0; }

  .components-table-wrap {
    padding: 0 1.6rem 1.4rem;
  }

  .table { margin: 0; border-collapse: separate; border-spacing: 0; }
  .table thead th {
    background: var(--table-header-bg);
    color: var(--table-header-text);
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: .75rem 1rem;
    border: none;
    white-space: nowrap;
    transition: background .3s, color .3s;
  }
  .table thead th:first-child { border-radius: 10px 0 0 0; }
  .table thead th:last-child  { border-radius: 0 10px 0 0; }

  .table tbody tr { transition: background .15s; }
  .table tbody tr:hover { background: var(--green-50); }
  .table tbody td {
    vertical-align: middle;
    padding: .6rem .8rem;
    border-bottom: 1px solid var(--border);
    border-left: none; border-right: none; border-top: none;
    color: var(--text-primary);
    transition: border-color .3s, color .3s;
  }

  .row-num {
    width: 28px; height: 28px;
    background: var(--green-100);
    color: var(--green-600);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: .75rem; font-weight: 700;
    flex-shrink: 0;
  }

  .table .form-select, .table .form-control {
    height: 38px;
    padding: .35rem .65rem;
    font-size: .87rem;
    border-radius: 7px;
  }

  .pct-input-wrap { position: relative; }
  .pct-input-wrap .form-control { padding-right: 2rem; }
  .pct-input-wrap::after {
    content: '%';
    position: absolute; right: .7rem; top: 50%;
    transform: translateY(-50%);
    font-size: .82rem; color: var(--text-secondary); pointer-events: none;
    transition: color .3s;
  }

  .computed-cost {
    font-family: 'DM Mono', monospace;
    font-size: .9rem;
    font-weight: 500;
    color: var(--text-primary);
    text-align: right;
    white-space: nowrap;
    min-width: 130px;
    transition: color .3s;
  }

  /* ── Summary Section ── */
  .summary-section {
    background: var(--ink);
    padding: 1.4rem 1.6rem;
    border-top: 1px solid rgba(255,255,255,.07);
    transition: background .3s;
  }

  :root.dark-mode .summary-section {
    background: #0a0d16;
  }

  .summary-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  @media (max-width: 600px) { .summary-grid { grid-template-columns: 1fr; } }

  .summary-item {
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 10px;
    padding: 1rem 1.2rem;
    transition: background .3s, border-color .3s;
  }

  :root.dark-mode .summary-item {
    background: rgba(58, 135, 105, 0.08);
    border: 1px solid rgba(122, 211, 197, 0.15);
  }

  .summary-item .s-label {
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(255,255,255,.5);
    margin-bottom: .35rem;
    transition: color .3s;
  }
  .summary-item .s-value {
    font-family: 'DM Mono', monospace;
    font-size: 1.55rem;
    font-weight: 500;
    color: #fff;
    line-height: 1;
  }
  .summary-item.highlight {
    background: var(--green-500);
    border-color: var(--green-400);
    grid-column: 1 / -1;
    transition: background .3s, border-color .3s;
  }
  .summary-item.highlight .s-label { color: rgba(255,255,255,.75); }
  .summary-item.highlight .s-value { font-size: 2rem; color: #fff; }

  /* ── Assessment Section ── */
  .assessment-section {
    padding: 1.3rem 1.6rem;
    background: #fafbff;
    border-top: 1px solid var(--border);
    transition: background .3s;
  }

  :root.dark-mode .assessment-section {
    background: #151c2a;
  }

  .assess-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: .75rem;
  }
  @media (max-width: 700px) { .assess-grid { grid-template-columns: 1fr 1fr; } }

  .assess-card {
    border: 1.5px solid var(--border);
    border-radius: 10px;
    padding: .9rem 1rem;
    background: #fff;
    box-shadow: var(--shadow-sm);
    transition: background .3s, border-color .3s, box-shadow .3s;
  }

  :root.dark-mode .assess-card {
    background: #2a3a4d;
    border-color: #4a5a72;
  }

  .assess-card .ac-label {
    font-size: .7rem;
    font-weight: 600;
    letter-spacing: .07em;
    text-transform: uppercase;
    color: var(--ink-light);
    margin-bottom: .3rem;
  }
  .assess-card .ac-value {
    font-family: 'DM Mono', monospace;
    font-size: 1.05rem;
    font-weight: 500;
    color: var(--text-primary);
    transition: color .3s;
  }
  .assess-card.accent {
    border-color: var(--green-400);
    background: var(--green-50);
    transition: background .3s, border-color .3s;
  }

  :root.dark-mode .assess-card.accent {
    background: rgba(58, 135, 105, 0.2);
    border-color: #7dd4c5;
  }

  .assess-card.accent .ac-value { color: var(--green-600); }

  :root.dark-mode .assess-card.accent .ac-value { color: #7dd4c5; }

  /* ── Tooltip on formula ── */
  .formula-hint {
    font-size: .72rem;
    color: var(--text-secondary);
    margin-top: .3rem;
    font-family: 'DM Mono', monospace;
    opacity: .7;
    transition: color .3s;
  }

  /* ── Formula Breakdown Box ── */
  .formula-box-section {
    padding: 0 1.6rem 1.6rem;
    background: var(--card-bg);
    transition: background .3s;
  }

  .formula-yellow-box {
    background: #fffde7;
    border: 2px solid #f9c800;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(249,200,0,.18);
    transition: background .3s, border-color .3s, box-shadow .3s;
  }

  :root.dark-mode .formula-yellow-box {
    background: #2a3a4d;
    border-color: #d4a574;
    box-shadow: 0 2px 12px rgba(212,165,116,.1);
  }

  .formula-box-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f9c800;
    padding: .55rem 1rem;
    transition: background .3s;
  }

  :root.dark-mode .formula-box-header {
    background: #3d4f68;
    border-bottom: 1px solid #d4a574;
  }

  .formula-box-title {
    font-size: .82rem;
    font-weight: 700;
    color: #5a3e00;
    letter-spacing: .04em;
    transition: color .3s;
  }

  :root.dark-mode .formula-box-title {
    color: #d4a574;
  }

  .copy-btn {
    display: inline-flex;
    align-items: center;
    gap: .35rem;
    background: #5a3e00;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: .3rem .75rem;
    font-size: .78rem;
    font-weight: 600;
    font-family: 'DM Sans', sans-serif;
    cursor: pointer;
    transition: background .15s, transform .1s;
  }
  .copy-btn:hover  { background: #3d2900; }
  .copy-btn:active { transform: scale(.96); }
  .copy-btn.copied { background: var(--green-600); }

  :root.dark-mode .copy-btn {
    background: #4a5a72;
    color: #d4a574;
  }
  :root.dark-mode .copy-btn:hover { background: #5a6a82; }
  :root.dark-mode .copy-btn.copied { background: #3a8769; }

  .formula-textarea {
    width: 100%;
    border: none;
    background: #fffde7;
    padding: 1rem 1.1rem;
    font-family: 'DM Mono', monospace;
    font-size: .88rem;
    font-weight: 500;
    color: #2d1f00;
    line-height: 1.75;
    resize: none;
    outline: none;
    min-height: 160px;
    cursor: text;
    white-space: pre;
    user-select: text;
    -webkit-user-select: text;
    caret-color: transparent;
    transition: background .3s, color .3s;
  }

  :root.dark-mode .formula-textarea {
    background: #1f2937;
    color: #d4a574;
  }

  .formula-textarea:focus {
    caret-color: #9a7a00;
  }

  :root.dark-mode .formula-textarea:focus {
    caret-color: #d4a574;
  }

  .formula-textarea::selection {
    background: #f9c800;
    color: #2d1f00;
  }

  :root.dark-mode .formula-textarea::selection {
    background: #4a5a72;
    color: #d4a574;
  }

  .formula-box-footer {
    padding: .45rem 1rem;
    border-top: 1px solid #f0d000;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: border-color .3s;
  }

  :root.dark-mode .formula-box-footer {
    border-top-color: #4a5a72;
  }

  .formula-tip {
    font-size: .72rem;
    color: #9a7a00;
    font-style: italic;
    transition: color .3s;
  }

  :root.dark-mode .formula-tip {
    color: #d4a574;
  }

  .copy-confirm {
    font-size: .75rem;
    font-weight: 700;
    color: var(--green-600);
  }

  /* ── Disabled input styling ── */
  .form-control:disabled {
    background: #f1f5f9;
    color: #b0bec5;
    cursor: not-allowed;
    border-color: #e2e8f0;
    transition: background .3s, color .3s, border-color .3s;
  }

  :root.dark-mode .form-control:disabled {
    background: #1a1f2a;
    color: #6b7a8f;
    border-color: #4a5a72;
  }

  .pct-input-wrap input:disabled + * { opacity: .4; }

  /* ── Add / Remove Row controls ── */
  .add-row-bar {
    padding: .6rem 0 .2rem;
    display: flex;
    align-items: center;
  }
  .add-row-btn {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    background: transparent;
    border: 1.5px dashed var(--green-400);
    color: var(--green-600);
    border-radius: 8px;
    padding: .42rem 1rem;
    font-size: .8rem;
    font-weight: 600;
    font-family: 'DM Sans', sans-serif;
    cursor: pointer;
    transition: background .15s, border-color .15s, transform .1s, color .3s;
  }
  .add-row-btn:hover {
    background: var(--green-50);
    border-color: var(--green-500);
    transform: translateY(-1px);
  }
  .add-row-btn:active { transform: scale(.97); }

  :root.dark-mode .add-row-btn {
    border-color: rgba(122, 211, 197, 0.4);
    color: #7dd4c5;
  }

  :root.dark-mode .add-row-btn:hover {
    background: rgba(58, 135, 105, 0.15);
    border-color: #7dd4c5;
  }

  .add-row-btn-blue {
    border-color: #7aa3d4;
    color: #3d5a80;
  }
  .add-row-btn-blue:hover {
    background: #e8f0fe;
    border-color: #3d5a80;
  }

  :root.dark-mode .add-row-btn-blue {
    border-color: rgba(122, 211, 197, 0.4);
    color: #7dd4c5;
  }

  :root.dark-mode .add-row-btn-blue:hover {
    background: rgba(58, 135, 105, 0.15);
    border-color: #7dd4c5;
  }

  .remove-row-btn {
    background: none;
    border: none;
    cursor: pointer;
    color: #ccc;
    padding: .2rem .3rem;
    border-radius: 5px;
    transition: color .15s, background .15s;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .remove-row-btn:hover { color: #e74c3c; background: #fff0f0; }

  :root.dark-mode .remove-row-btn:hover { color: #f87171; background: rgba(220, 38, 38, 0.15); }

  /* row enter animation */
  @keyframes rowSlideIn {
    from { opacity: 0; transform: translateY(-8px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .row-new { animation: rowSlideIn .22s ease-out; }

  /* ── Additional Items Section ── */
  .addl-section {
    padding: 0 1.6rem 1.4rem;
  }
  .addl-table thead th {
    background: #3d5a80;
    transition: background .3s;
  }

  :root.dark-mode .addl-table thead th {
    background: #1f2937;
  }

  .addl-computed-cost {
    font-family: 'DM Mono', monospace;
    font-size: .9rem;
    font-weight: 500;
    color: var(--text-primary);
    text-align: right;
    white-space: nowrap;
    min-width: 130px;
    transition: color .3s;
  }
  .unit-cost-badge {
    display: inline-block;
    background: #e8f4fd;
    color: #1a5276;
    border: 1px solid #aed6f1;
    border-radius: 5px;
    padding: .15rem .5rem;
    font-family: 'DM Mono', monospace;
    font-size: .78rem;
    font-weight: 500;
    min-width: 70px;
    text-align: center;
    transition: background .3s, color .3s, border-color .3s;
  }

  :root.dark-mode .unit-cost-badge {
    background: rgba(58, 135, 105, 0.2);
    color: #7dd4c5;
    border-color: rgba(122, 211, 197, 0.3);
  }

  .unit-cost-badge.empty {
    background: #f1f5f9;
    color: #aaa;
    border-color: #e2e8f0;
  }

  :root.dark-mode .unit-cost-badge.empty {
    background: #1f2937;
    color: #8a99b0;
    border-color: #4a5a72;
  }

  /* Summary total additional cost row */
  .summary-item.addl-highlight {
    background: rgba(61,90,128,.15);
    border-color: rgba(61,90,128,.3);
    transition: background .3s, border-color .3s;
  }

  :root.dark-mode .summary-item.addl-highlight {
    background: rgba(122, 211, 197, 0.1);
    border-color: rgba(122, 211, 197, 0.2);
  }

  .summary-item.addl-highlight .s-label { color: rgba(255,255,255,.6); }
  .summary-item.addl-highlight .s-value { color: #aed6f1; }

  :root.dark-mode .summary-item.addl-highlight .s-value { color: #7dd4c5; }

  /* ── Background Game Canvas ── */
  #bgCanvas {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
  }
  #bgCanvas.interactive {
    pointer-events: auto;
    cursor: crosshair;
  }

  /* ── Dark Mode Toggle Button ── */
  #darkModeToggle {
    position: fixed;
    bottom: 1.2rem;
    right: 5.8rem;
    z-index: 100;
    background: var(--ink);
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: .5rem 1rem .5rem .75rem;
    font-family: 'DM Sans', sans-serif;
    font-size: .78rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: .4rem;
    box-shadow: 0 4px 16px rgba(0,0,0,.2);
    transition: background .2s, transform .15s;
    user-select: none;
  }
  #darkModeToggle:hover { background: var(--green-600); transform: translateY(-2px); }
  #darkModeToggle .dm-icon { font-size: 1rem; }

  /* ── Game toggle button ── */
  #gameToggle {
    position: fixed;
    bottom: 1.2rem;
    right: 1.2rem;
    z-index: 100;
    background: var(--ink);
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: .5rem 1rem .5rem .75rem;
    font-family: 'DM Sans', sans-serif;
    font-size: .78rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: .4rem;
    box-shadow: 0 4px 16px rgba(0,0,0,.2);
    transition: background .2s, transform .15s;
    user-select: none;
  }
  #gameToggle:hover { background: var(--green-600); transform: translateY(-2px); }
  #gameToggle .gt-icon { font-size: 1rem; }

  /* ── Score HUD ── */
  #gameHUD {
    position: fixed;
    bottom: 1.2rem;
    left: 1.2rem;
    z-index: 100;
    background: rgba(26,35,50,.85);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(76,175,125,.3);
    border-radius: 10px;
    padding: .5rem .9rem;
    font-family: 'DM Mono', monospace;
    font-size: .78rem;
    color: #fff;
    display: none;
    gap: 1.2rem;
    align-items: center;
  }
  #gameHUD.visible { display: flex; }
  #gameHUD .hud-item { display: flex; flex-direction: column; align-items: center; }
  #gameHUD .hud-label { font-size: .6rem; opacity: .6; text-transform: uppercase; letter-spacing: .07em; }
  #gameHUD .hud-val { font-size: 1rem; font-weight: 500; color: #4caf7d; }

  /* ── Floating score popup ── */
  .score-pop {
    position: fixed;
    font-family: 'DM Mono', monospace;
    font-size: .9rem;
    font-weight: 700;
    color: #2e9e64;
    pointer-events: none;
    z-index: 99;
    animation: scorePop .8s ease-out forwards;
    text-shadow: 0 1px 4px rgba(0,0,0,.2);
  }
  @keyframes scorePop {
    0%   { opacity: 1; transform: translateY(0) scale(1); }
    100% { opacity: 0; transform: translateY(-55px) scale(1.3); }
  }
  @media (max-width: 768px) {
    .input-section .row > div { margin-bottom: .5rem; }
    .components-table-wrap { padding: 0 .8rem 1rem; }
    .summary-section { padding: 1rem .8rem; }
  }
</style>
</head>
<body>

<!-- ── Background Game ── -->
<canvas id="bgCanvas"></canvas>

<div id="gameHUD">
  <div class="hud-item">
    <span class="hud-label">Demolished</span>
    <span class="hud-val" id="hudScore">0</span>
  </div>
  <div class="hud-item">
    <span class="hud-label">Combo</span>
    <span class="hud-val" id="hudCombo">x1</span>
  </div>
  <div class="hud-item">
    <span class="hud-label">Level</span>
    <span class="hud-val" id="hudLevel">1</span>
  </div>
</div>

<button id="darkModeToggle" onclick="toggleDarkMode()">
  <span class="dm-icon">🌙</span> Dark Mode
</button>

<button id="gameToggle" onclick="toggleGame()">
  <span class="gt-icon">🏗️</span> Play Background Game
</button>

<div class="page-wrapper">

  <!-- ─ Header ─────────────────────────────────── -->
  <div class="page-header">
    <div class="badge-label">Assessors Office LGU San Juan, Siquijor</div>
    <h1>Matik Compute sa Estimated Cost</h1>
    <p>Input building details below — totals update automatically</p>
  </div>

  <!-- ─ Main Card ────────────────────────────────── -->
  <div class="calc-card">

    <!-- ① Input Section -->
    <div class="section-header">
      <span class="dot"></span>
      <span>Property &amp; Construction Details</span>
    </div>

    <div class="input-section">
      <div class="row g-3 align-items-end">

        <div class="col-md-4">
          <label class="form-label">Structural Type</label>
          <select id="structuralType" class="form-select" onchange="compute()">
            <?php foreach ($structural_types as $st): ?>
              <option value="<?= htmlspecialchars($st) ?>"><?= htmlspecialchars($st) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Type of Construction</label>
          <select id="constructionType" class="form-select" onchange="onConstructionChange()">
            <?php
            $group_num = 0;
            $prev_group = '';
            $group_labels = [
              '' => 'Group 1',
              '(2)' => 'Group 2',  '(3)' => 'Group 3',  '(4)' => 'Group 4',
              '(5)' => 'Group 5',  '(6)' => 'Group 6',  '(7)' => 'Group 7',
              '(8)' => 'Group 8',  '(9)' => 'Group 9',  '(10)' => 'Group 10',
              '(11)' => 'Group 11','(12)' => 'Group 12','(13)' => 'Group 13',
            ];
            foreach ($unit_costs as $ct => $uc):
              // Determine group suffix
              preg_match('/(\(\d+\))$/', $ct, $m);
              $suffix = isset($m[1]) ? $m[1] : '';
              if ($suffix !== $prev_group):
                if ($prev_group !== '' || $group_num > 0) echo '</optgroup>';
                $glabel = $group_labels[$suffix] ?? $suffix;
                echo '<optgroup label="── ' . htmlspecialchars($glabel) . ' ──">';
                $prev_group = $suffix;
                $group_num++;
              endif;
              $cost_label = htmlspecialchars($ct);
              $disabled = $uc == 0 ? ' disabled style="color:#aaa;"' : '';
            ?>
              <option value="<?= htmlspecialchars($ct) ?>"<?= $disabled ?>><?= $cost_label ?></option>
            <?php endforeach; ?>
            </optgroup>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Unit Cost (EST COST / sqm)</label>
          <div class="unit-cost-chip">
            <span class="chip-label">₱</span>
            <span id="unitCostDisplay">6,200.00</span>
          </div>
        </div>

      </div>

      <!-- EST COST main area row -->
      <div class="row g-3 align-items-end mt-1">
        <div class="col-md-4">
          <label class="form-label"> EST COST (sqm)</label>
          <input type="number" id="mainArea" class="form-control" value="46"
                 min="0" step="0.01" oninput="compute()" placeholder="0.00">
          <div class="formula-hint" id="mainFormula">46 × 6,200 = ₱285,200.00</div>
        </div>
        <div class="col-md-8">
          <div style="background:var(--green-50);border:1px solid var(--green-200);border-radius:9px;padding:.6rem 1rem;">
            <small style="font-size:.75rem;color:var(--green-600);font-weight:600;">💡 FORMULA: EST COST = Area × Unit Cost &nbsp;|&nbsp; Component Cost = Area × Unit Cost × %</small>
          </div>
        </div>
      </div>
    </div>

    <!-- ② Components Table -->
    <div class="section-header">
      <span class="dot"></span>
      <span>Building Components</span>
    </div>

    <div class="table-section">
      <div class="components-table-wrap mt-3">
        <div class="table-responsive">
          <table class="table" id="componentsTable">
            <thead>
              <tr>
                <th style="width:36px">#</th>
                <th>Component</th>
                <th style="width:150px">Area (sqm)</th>
                <th style="width:110px">Percentage</th>
                <th style="width:160px;text-align:right">Computed Cost</th>
                <th style="width:36px"></th>
              </tr>
            </thead>
            <tbody id="compTbody">
              <!-- rows injected by JS -->
            </tbody>
          </table>
        </div>
        <div class="add-row-bar">
          <button class="add-row-btn" onclick="addCompRow()">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
            Add Building Component Row
          </button>
        </div>
      </div>
    </div>

    <!-- ②-B Additional Items -->
    <div class="section-header">
      <span class="dot" style="background:#3d5a80"></span>
      <span style="color:#3d5a80;">Cost of Additional Items</span>
    </div>

    <div class="addl-section mt-3">
      <div class="table-responsive">
        <table class="table addl-table" id="additionalTable">
          <thead>
            <tr>
              <th style="width:36px">#</th>
              <th>Item</th>
              <th style="width:115px">Unit Cost</th>
              <th style="width:150px">Area (sqm)</th>
              <th style="width:160px;text-align:right">Computed Cost</th>
              <th style="width:36px"></th>
            </tr>
          </thead>
          <tbody id="addlTbody">
            <!-- rows injected by JS -->
          </tbody>
        </table>
      </div>
      <div class="add-row-bar">
        <button class="add-row-btn add-row-btn-blue" onclick="addAddlRow()">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
          Add Additional Item Row
        </button>
      </div>
    </div>

    <!-- ③ Summary -->
    <div class="summary-section">
      <div class="summary-grid">
        <div class="summary-item">
          <div class="s-label">Main Floor Area</div>
          <div class="s-value" id="totalMainArea">0.00 <small style="font-size:.7em;opacity:.6">sqm</small></div>
        </div>
        <div class="summary-item">
          <div class="s-label">Total Component Area</div>
          <div class="s-value" id="totalCompArea">0.00 <small style="font-size:.7em;opacity:.6">sqm</small></div>
        </div>
        <div class="summary-item addl-highlight">
          <div class="s-label">Additional Items Cost</div>
          <div class="s-value" id="totalAddlCost">₱0.00</div>
        </div>
        <div class="summary-item highlight" style="grid-column:1/-1">
          <div class="s-label">Total Construction Cost <small style="opacity:.7;font-size:.7em">(Building + Additional Items)</small></div>
          <div class="s-value" id="totalCost">₱0.00</div>
        </div>
      </div>
    </div>

    <!-- ④ Assessment Results -->
    <div class="section-header">
      <span class="dot"></span>
      <span>Assessment Summary</span>
    </div>

    <div class="assessment-section">
      <div class="assess-grid">
        <div class="assess-card">
          <div class="ac-label">Market Value</div>
          <div class="ac-value" id="marketValue">₱0.00</div>
        </div>
        <div class="assess-card">
          <div class="ac-label">Assessment Level</div>
          <div class="ac-value" id="assessLevel">0.00%</div>
        </div>
        <div class="assess-card">
          <div class="ac-label">Assessed Value</div>
          <div class="ac-value" id="assessedValue">₱0.00</div>
        </div>
        <div class="assess-card accent">
          <div class="ac-label">Taxable Value (2%)</div>
          <div class="ac-value" id="taxableValue">₱0.00</div>
        </div>
      </div>
    </div>

    <!-- ⑤ Formula Breakdown Box -->
    <div class="section-header">
      <span class="dot"></span>
      <span>Formula Breakdown</span>
      <span style="margin-left:auto;font-size:.72rem;opacity:.7;font-weight:400;text-transform:none;letter-spacing:0;">Select text to copy a portion, or use Copy All</span>
    </div>

    <div class="formula-box-section">
      <div class="formula-box-wrap">
        <div class="formula-yellow-box">
          <div class="formula-box-header">
            <span class="formula-box-title">&#128203; Computation Breakdown</span>
            <button class="copy-btn" id="copyBtn" onclick="copyFormula()" title="Copy to clipboard">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
              <span id="copyBtnText">Copy All</span>
            </button>
          </div>
          <textarea id="formulaText" class="formula-textarea" spellcheck="false"></textarea>
          <div class="formula-box-footer">
            <span id="copyConfirm" class="copy-confirm" style="display:none">&#10003; All copied!</span>
            <span class="formula-tip">&#128073; Drag to highlight specific lines, then Ctrl+C &nbsp;&middot;&nbsp; Or click <strong>Copy All</strong></span>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.calc-card -->

  <p class="text-center mt-3" style="font-size:.75rem;color:#94a3b8;">
    Based on the Final Formula Compute sheet &nbsp;·&nbsp; All computations follow RPTA assessment guidelines
  </p>
   <p class="text-center mt-3" style="font-size:.75rem;color:#94a3b8;">
    © 2026 Vincent Oric.&nbsp;·&nbsp; All Rights Reserved.  &nbsp;·&nbsp; Published on GitHub
  </p>

</div><!-- /.page-wrapper -->

<script>
// ─────────────────────────────────────────────────────────────
// DARK MODE TOGGLE
// ─────────────────────────────────────────────────────────────
function toggleDarkMode() {
  const html = document.documentElement;
  const btn = document.getElementById('darkModeToggle');
  
  html.classList.toggle('dark-mode');
  const isDark = html.classList.contains('dark-mode');
  
  // Save preference to localStorage
  localStorage.setItem('darkMode', isDark);
  
  // Update button text and icon
  if (isDark) {
    btn.innerHTML = '<span class="dm-icon">☀️</span> Light Mode';
  } else {
    btn.innerHTML = '<span class="dm-icon">🌙</span> Dark Mode';
  }
}

// Check for saved dark mode preference or system preference on page load
function initDarkMode() {
  const savedDarkMode = localStorage.getItem('darkMode');
  const prefersLight = localStorage.getItem('darkMode') === 'false';
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  
  let shouldBeDark = false;
  
  if (savedDarkMode !== null) {
    shouldBeDark = savedDarkMode === 'true';
  } else if (prefersDark) {
    shouldBeDark = true;
  }
  
  if (shouldBeDark) {
    document.documentElement.classList.add('dark-mode');
    const btn = document.getElementById('darkModeToggle');
    if (btn) btn.innerHTML = '<span class="dm-icon">☀️</span> Light Mode';
  }
}

// Initialize dark mode when DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initDarkMode);
} else {
  initDarkMode();
}

// ─────────────────────────────────────────────────────────────
// PHP → JS data injection
// ─────────────────────────────────────────────────────────────
const UNIT_COSTS        = <?= $js_unit_costs ?>;
const COMPONENT_PCTS    = <?= $js_components ?>;
const ASSESSMENT_LEVELS = <?= $js_assessment_levels ?>;
const ADDITIONAL_ITEMS  = <?= $js_additional_items ?>;

// ─────────────────────────────────────────────────────────────
// Helpers
// ─────────────────────────────────────────────────────────────
const peso = v => '₱' + Number(v).toLocaleString('en-PH', {minimumFractionDigits:2, maximumFractionDigits:2});
const num2  = v => Number(v).toLocaleString('en-PH', {minimumFractionDigits:2, maximumFractionDigits:2});

function getUnitCost() {
  const ct = document.getElementById('constructionType').value;
  return UNIT_COSTS[ct] || 0;
}

function getAssessmentLevel(structuralType, fmv) {
  const brackets = ASSESSMENT_LEVELS[structuralType];
  if (!brackets) return 0;
  for (const [over, notOver, rate] of brackets) {
    if (fmv > over && (notOver === null || fmv <= notOver)) return rate;
  }
  return 0;
}

// ─────────────────────────────────────────────────────────────
// Update unit-cost chip when construction type changes
// ─────────────────────────────────────────────────────────────
function onConstructionChange() {
  const uc      = getUnitCost();
  const display = document.getElementById('unitCostDisplay');
  if (uc > 0) {
    display.textContent = num2(uc);
    display.style.color = '';
  } else {
    display.textContent = 'N/A';
    display.style.color = '#999';
  }
  compute();
}

// ─────────────────────────────────────────────────────────────
// Dynamic row counters
// ─────────────────────────────────────────────────────────────
let compRowCount = 0;
let addlRowCount = 0;

// ─────────────────────────────────────────────────────────────
// Build component options HTML (shared)
// ─────────────────────────────────────────────────────────────
function buildCompOptions() {
  let html = '<option value="">-- Select Component --</option>';
  for (const [name, pct] of Object.entries(COMPONENT_PCTS)) {
    html += `<option value="${name}" data-pct="${pct}">${name}</option>`;
  }
  return html;
}

// ─────────────────────────────────────────────────────────────
// Build additional item options HTML (shared, grouped)
// ─────────────────────────────────────────────────────────────
function buildAddlOptions() {
  const groups = {};
  for (const [name, unit] of Object.entries(ADDITIONAL_ITEMS)) {
    const cat = name.includes(' - ') ? name.split(' - ')[0]
              : name.includes(' (') ? name.split(' (')[0]
              : name;
    if (!groups[cat]) groups[cat] = [];
    groups[cat].push({ name, unit });
  }
  let html = '<option value="">-- Select Item --</option>';
  for (const [cat, items] of Object.entries(groups)) {
    html += `<optgroup label="${cat}">`;
    items.forEach(it => {
      html += `<option value="${it.name}" data-unit="${it.unit}">${it.name}</option>`;
    });
    html += '</optgroup>';
  }
  return html;
}

// ─────────────────────────────────────────────────────────────
// Add / Remove — Building Components
// ─────────────────────────────────────────────────────────────
function addCompRow() {
  compRowCount++;
  const n    = compRowCount;
  const tbody = document.getElementById('compTbody');
  const tr   = document.createElement('tr');
  tr.id        = `comp_tr_${n}`;
  tr.className = 'row-new';
  tr.innerHTML = `
    <td><div class="row-num">${tbody.rows.length + 1}</div></td>
    <td>
      <select class="form-select comp-select" data-row="${n}" onchange="onComponentChange(${n})">
        ${buildCompOptions()}
      </select>
    </td>
    <td>
      <input type="number" class="form-control area-input"
             id="area_${n}" data-row="${n}"
             value="" min="0" step="0.01" oninput="compute()" placeholder="0.00" disabled>
    </td>
    <td>
      <div class="pct-input-wrap">
        <input type="number" class="form-control pct-input"
               id="pct_${n}" data-row="${n}"
               value="" min="0" max="100" step="1" oninput="compute()" placeholder="—" disabled>
      </div>
    </td>
    <td><div class="computed-cost" id="cost_${n}">₱0.00</div></td>
    <td>
      <button class="remove-row-btn" onclick="removeCompRow('comp_tr_${n}')" title="Remove row">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/>
        </svg>
      </button>
    </td>`;
  tbody.appendChild(tr);
  renumberRows('compTbody');
  compute();
}

function removeCompRow(trId) {
  const tr = document.getElementById(trId);
  if (tr) {
    tr.style.transition = 'opacity .18s';
    tr.style.opacity    = '0';
    setTimeout(() => { tr.remove(); renumberRows('compTbody'); compute(); }, 180);
  }
}

// ─────────────────────────────────────────────────────────────
// Add / Remove — Additional Items
// ─────────────────────────────────────────────────────────────
function addAddlRow() {
  addlRowCount++;
  const n    = addlRowCount;
  const tbody = document.getElementById('addlTbody');
  const tr   = document.createElement('tr');
  tr.id        = `addl_tr_${n}`;
  tr.className = 'row-new';
  tr.innerHTML = `
    <td><div class="row-num" style="background:#e8f0fe;color:#3d5a80">${tbody.rows.length + 1}</div></td>
    <td>
      <select class="form-select addl-select" data-row="${n}" onchange="onAddlChange(${n})">
        ${buildAddlOptions()}
      </select>
    </td>
    <td><span class="unit-cost-badge empty" id="addl_unit_${n}">—</span></td>
    <td>
      <input type="number" class="form-control addl-area"
             id="addl_area_${n}" data-row="${n}"
             value="" min="0" step="0.01" oninput="compute()" placeholder="0.00" disabled>
    </td>
    <td><div class="addl-computed-cost" id="addl_cost_${n}">₱0.00</div></td>
    <td>
      <button class="remove-row-btn" onclick="removeAddlRow('addl_tr_${n}')" title="Remove row">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/>
        </svg>
      </button>
    </td>`;
  tbody.appendChild(tr);
  renumberRows('addlTbody');
  compute();
}

function removeAddlRow(trId) {
  const tr = document.getElementById(trId);
  if (tr) {
    tr.style.transition = 'opacity .18s';
    tr.style.opacity    = '0';
    setTimeout(() => { tr.remove(); renumberRows('addlTbody'); compute(); }, 180);
  }
}

// ─────────────────────────────────────────────────────────────
// Re-number row badges after add / remove
// ─────────────────────────────────────────────────────────────
function renumberRows(tbodyId) {
  const rows = document.getElementById(tbodyId).rows;
  Array.from(rows).forEach((tr, idx) => {
    const badge = tr.querySelector('.row-num');
    if (badge) badge.textContent = idx + 1;
  });
}

// ─────────────────────────────────────────────────────────────
// Update percentage when component dropdown changes
// ─────────────────────────────────────────────────────────────
function onComponentChange(rowNum) {
  const sel    = document.querySelector(`.comp-select[data-row="${rowNum}"]`);
  const pctEl  = document.getElementById(`pct_${rowNum}`);
  const areaEl = document.getElementById(`area_${rowNum}`);

  if (sel.value === '') {
    pctEl.value       = '';
    pctEl.placeholder = '—';
    pctEl.disabled    = true;
    areaEl.disabled   = true;
    areaEl.value      = '';
    document.getElementById(`cost_${rowNum}`).textContent = '₱0.00';
  } else {
    const pct = COMPONENT_PCTS[sel.value] ?? 0;
    pctEl.value       = pct;
    pctEl.placeholder = '0';
    pctEl.disabled    = false;
    areaEl.disabled   = false;
  }
  compute();
}

// ─────────────────────────────────────────────────────────────
// Additional Items dropdown change
// ─────────────────────────────────────────────────────────────
function onAddlChange(rowNum) {
  const sel       = document.querySelector(`.addl-select[data-row="${rowNum}"]`);
  const unitBadge = document.getElementById(`addl_unit_${rowNum}`);
  const areaEl    = document.getElementById(`addl_area_${rowNum}`);
  const costEl    = document.getElementById(`addl_cost_${rowNum}`);

  if (sel.value === '') {
    unitBadge.textContent = '—';
    unitBadge.className   = 'unit-cost-badge empty';
    areaEl.disabled = true;
    areaEl.value    = '';
    costEl.textContent = '₱0.00';
  } else {
    const unit = ADDITIONAL_ITEMS[sel.value] || 0;
    unitBadge.textContent = '₱' + unit.toLocaleString('en-PH', {minimumFractionDigits:2});
    unitBadge.className   = 'unit-cost-badge';
    areaEl.disabled = false;
  }
  compute();
}

function computeAddl() { compute(); }

// ─────────────────────────────────────────────────────────────
// Main computation — reads ALL rows dynamically
// ─────────────────────────────────────────────────────────────
function compute() {
  const unitCost   = getUnitCost();
  const mainArea   = Math.max(0, parseFloat(document.getElementById('mainArea').value) || 0);
  const structType = document.getElementById('structuralType').value;

  // Main floor cost
  const mainCost = mainArea * unitCost;
  document.getElementById('mainFormula').textContent =
    `${num2(mainArea)} × ${num2(unitCost)} = ${peso(mainCost)}`;

  // ── Building Components ──
  let compAreaTotal = 0;
  let compCostTotal = 0;
  const compRows = document.querySelectorAll('#compTbody tr');
  compRows.forEach(tr => {
    const sel  = tr.querySelector('.comp-select');
    const rn   = sel ? sel.dataset.row : null;
    if (!rn) return;
    const area = Math.max(0, parseFloat(document.getElementById(`area_${rn}`)?.value) || 0);
    const pct  = Math.max(0, parseFloat(document.getElementById(`pct_${rn}`)?.value)  || 0);
    const cost = area * unitCost * (pct / 100);
    compAreaTotal += area;
    compCostTotal += cost;
    const costEl = document.getElementById(`cost_${rn}`);
    if (costEl) costEl.textContent = peso(cost);
  });

  const totalCost = mainCost + compCostTotal;

  // ── Additional Items ──
  let addlCostTotal = 0;
  const addlLines   = [];
  const addlRows    = document.querySelectorAll('#addlTbody tr');
  addlRows.forEach(tr => {
    const sel = tr.querySelector('.addl-select');
    const rn  = sel ? sel.dataset.row : null;
    if (!rn || !sel.value) {
      const ce = document.getElementById(`addl_cost_${rn}`);
      if (ce) ce.textContent = '₱0.00';
      return;
    }
    const area = Math.max(0, parseFloat(document.getElementById(`addl_area_${rn}`)?.value) || 0);
    const unit = ADDITIONAL_ITEMS[sel.value] || 0;
    const cost = area * unit;
    addlCostTotal += cost;
    const costEl = document.getElementById(`addl_cost_${rn}`);
    if (costEl) costEl.textContent = peso(cost);
    if (area > 0) addlLines.push({ name: sel.value, area, unit, cost });
  });

  const grandTotal = totalCost + addlCostTotal;
  const marketVal  = Math.round(grandTotal / 10) * 10;
  const assessRate = getAssessmentLevel(structType, marketVal);
  const assessedV  = Math.round(marketVal * assessRate / 10) * 10;
  const taxable    = assessedV * 0.02;
  const isGovt     = structType === 'Government';

  // Summaries
  document.getElementById('totalMainArea').innerHTML =
    `${num2(mainArea)} <small style="font-size:.7em;opacity:.6">sqm</small>`;
  document.getElementById('totalCompArea').innerHTML =
    `${num2(compAreaTotal)} <small style="font-size:.7em;opacity:.6">sqm</small>`;
  document.getElementById('totalAddlCost').textContent = peso(addlCostTotal);
  document.getElementById('totalCost').textContent     = peso(grandTotal);

  // Assessment
  document.getElementById('marketValue').textContent   = peso(marketVal);
  document.getElementById('assessLevel').textContent   = (assessRate * 100).toFixed(2) + '%';
  document.getElementById('assessedValue').textContent = peso(assessedV);

  // Taxable — show EXEMPT for Government
  const taxableEl   = document.getElementById('taxableValue');
  const taxableCard = taxableEl.closest('.assess-card');
  const taxLabelEl  = taxableCard.querySelector('.ac-label');
  if (isGovt) {
    taxableEl.textContent   = 'EXEMPT';
    taxableEl.style.color   = '#b91c1c';
    taxableEl.style.fontSize = '1.4rem';
    taxableEl.style.fontFamily = "'DM Sans', sans-serif";
    taxableEl.style.fontWeight = '700';
    taxableEl.style.letterSpacing = '.05em';
    taxLabelEl.textContent  = 'Taxable Value';
    taxableCard.style.background   = '#fff1f2';
    taxableCard.style.borderColor  = '#fca5a5';
  } else {
    taxableEl.textContent  = peso(taxable);
    taxableEl.style.color  = '';
    taxableEl.style.fontSize = '';
    taxableEl.style.fontFamily = '';
    taxableEl.style.fontWeight = '';
    taxableEl.style.letterSpacing = '';
    taxLabelEl.textContent = 'Taxable Value (2%)';
    taxableCard.style.background  = '';
    taxableCard.style.borderColor = '';
  }

  // ── Build formula breakdown text (like Excel yellow box) ──
  const fmtN = v => Number(v).toLocaleString('en-US', {minimumFractionDigits:2, maximumFractionDigits:2});

  let lines = [];
  lines.push(`EST COST: ${fmtN(mainArea)} x ${fmtN(unitCost)} = ${fmtN(mainCost)}`);

  // ── Components lines — walk the DOM just like the compute loop ──
  document.querySelectorAll('#compTbody tr').forEach(tr => {
    const sel = tr.querySelector('.comp-select');
    const rn  = sel ? sel.dataset.row : null;
    if (!rn || !sel.value) return;
    const area = Math.max(0, parseFloat(document.getElementById(`area_${rn}`)?.value) || 0);
    const pct  = Math.max(0, parseFloat(document.getElementById(`pct_${rn}`)?.value)  || 0);
    const cost = area * unitCost * (pct / 100);
    if (area > 0) {
      lines.push(`${sel.value}: ${fmtN(area)} x ${fmtN(unitCost)} x ${(pct/100).toFixed(2)} = ${fmtN(cost)}`);
    }
  });

  lines.push('');
  lines.push(`Cons. Cost:    ${fmtN(totalCost)}`);

  // ── Additional items lines ──
  if (addlLines.length > 0) {
    lines.push('');
    lines.push('--- Additional Items ---');
    addlLines.forEach(a => {
      lines.push(`${a.name}: ${fmtN(a.area)} x ${fmtN(a.unit)} = ${fmtN(a.cost)}`);
    });
    lines.push(`Add. Items Total: ${fmtN(addlCostTotal)}`);
    lines.push('');
    lines.push(`Grand Total:   ${fmtN(grandTotal)}`);
  }

  lines.push(`Market Value:  ${fmtN(marketVal)}`);
  lines.push(`Assess Level:  ${(assessRate * 100).toFixed(2)}%`);
  lines.push('');
  lines.push(`${fmtN(marketVal)} x ${assessRate.toFixed(2)} = ${fmtN(marketVal * assessRate)}`);
  lines.push('');
  lines.push(`Assess Value:  ${fmtN(assessedV)}`);
  lines.push(`Taxable:       ${isGovt ? 'EXEMPT' : fmtN(taxable)}`);
  if (isGovt) lines.push(`               (Government properties are tax-exempt)`);

  document.getElementById('formulaText').value = lines.join('\n');

  // Auto-resize textarea height
  const ta = document.getElementById('formulaText');
  ta.style.height = 'auto';
  ta.style.height = (ta.scrollHeight + 4) + 'px';
}

// ─────────────────────────────────────────────────────────────
// Copy ALL formula text to clipboard (button only copies everything)
// User can freely select & Ctrl+C any portion inside the textarea
// ─────────────────────────────────────────────────────────────
function copyFormula() {
  const ta      = document.getElementById('formulaText');
  const btn     = document.getElementById('copyBtn');
  const txt     = document.getElementById('copyBtnText');
  const confirm = document.getElementById('copyConfirm');

  navigator.clipboard.writeText(ta.value).then(() => {
    btn.classList.add('copied');
    txt.textContent       = 'Copied!';
    confirm.style.display = 'inline';
    setTimeout(() => {
      btn.classList.remove('copied');
      txt.textContent       = 'Copy All';
      confirm.style.display = 'none';
    }, 2000);
  }).catch(() => {
    // Fallback: select all then execCommand
    ta.focus();
    ta.setSelectionRange(0, ta.value.length);
    document.execCommand('copy');
    txt.textContent = 'Copied!';
    setTimeout(() => { txt.textContent = 'Copy All'; }, 2000);
  });
}

// ═══════════════════════════════════════════════════════════════
// BACKGROUND MINI-GAME — Falling Bricks Demolition
// Click bricks to demolish them and earn points!
// ═══════════════════════════════════════════════════════════════
(function() {
  const canvas  = document.getElementById('bgCanvas');
  const ctx     = canvas.getContext('2d');
  let gameActive = false;
  let animId    = null;
  let score     = 0;
  let combo     = 1;
  let comboTimer = null;
  let level     = 1;
  let frameCount = 0;
  let bricks    = [];
  let particles = [];
  let cranes    = [];

  // Brick colours — construction themed
  const BRICK_COLOURS = [
    '#c0392b','#e74c3c','#e67e22','#d35400',
    '#f39c12','#8e6b3e','#a0522d','#795548',
    '#607d8b','#546e7a','#4caf7d','#2e7d52',
  ];

  const BRICK_W = 52, BRICK_H = 24;

  function resize() {
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
  }

  // ── Brick object ──────────────────────────────────────────
  function makeBrick() {
    const col   = BRICK_COLOURS[Math.floor(Math.random() * BRICK_COLOURS.length)];
    const speed = 0.6 + Math.random() * 0.8 + level * 0.12;
    return {
      x:      Math.random() * (canvas.width  - BRICK_W),
      y:      -BRICK_H - Math.random() * 300,
      w:      BRICK_W + Math.floor(Math.random() * 24),
      h:      BRICK_H,
      colour: col,
      speed,
      wobble: (Math.random() - 0.5) * 0.4,
      hp:     1,
      shake:  0,
      opacity: 1,
      dead:   false,
    };
  }

  // ── Particle burst ────────────────────────────────────────
  function burst(x, y, colour, count = 10) {
    for (let i = 0; i < count; i++) {
      const angle = (Math.PI * 2 / count) * i + Math.random() * 0.5;
      const speed = 2 + Math.random() * 4;
      particles.push({
        x, y,
        vx: Math.cos(angle) * speed,
        vy: Math.sin(angle) * speed - 2,
        r:  3 + Math.random() * 4,
        colour,
        life: 1,
        decay: 0.02 + Math.random() * 0.03,
      });
    }
  }

  // ── Crane (decorative, slowly moves) ─────────────────────
  function makeCrane(x) {
    return { x, y: 0, speed: 0.15 + Math.random() * 0.1, dir: 1 };
  }

  // ── Draw a single brick ───────────────────────────────────
  function drawBrick(b) {
    ctx.save();
    ctx.globalAlpha = b.opacity;
    const sx = b.shake ? (Math.random() - 0.5) * b.shake : 0;

    // Shadow
    ctx.shadowColor = 'rgba(0,0,0,0.18)';
    ctx.shadowBlur  = 6;
    ctx.shadowOffsetX = 2; ctx.shadowOffsetY = 3;

    // Body
    ctx.fillStyle = b.colour;
    ctx.beginPath();
    ctx.roundRect(b.x + sx, b.y, b.w, b.h, 3);
    ctx.fill();

    // Mortar lines (texture)
    ctx.shadowBlur = 0;
    ctx.strokeStyle = 'rgba(0,0,0,0.15)';
    ctx.lineWidth = 1;
    ctx.beginPath();
    ctx.moveTo(b.x + sx + b.w / 2, b.y);
    ctx.lineTo(b.x + sx + b.w / 2, b.y + b.h);
    ctx.stroke();

    // Highlight
    ctx.fillStyle = 'rgba(255,255,255,0.12)';
    ctx.beginPath();
    ctx.roundRect(b.x + sx + 2, b.y + 2, b.w - 4, b.h / 2 - 2, 2);
    ctx.fill();

    ctx.restore();
  }

  // ── Draw a crane ──────────────────────────────────────────
  function drawCrane(c) {
    const x = c.x, h = canvas.height * 0.35;
    ctx.save();
    ctx.globalAlpha = 0.07;
    ctx.strokeStyle = '#1a2332';
    ctx.lineWidth = 3;
    // Mast
    ctx.beginPath();
    ctx.moveTo(x, canvas.height);
    ctx.lineTo(x, canvas.height - h);
    ctx.stroke();
    // Jib (horizontal arm)
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(x - 20, canvas.height - h);
    ctx.lineTo(x + 120, canvas.height - h);
    ctx.stroke();
    // Cable
    ctx.lineWidth = 1;
    ctx.beginPath();
    ctx.moveTo(x + 90, canvas.height - h);
    ctx.lineTo(x + 90, canvas.height - h + 60);
    ctx.stroke();
    // Hook ball
    ctx.beginPath();
    ctx.arc(x + 90, canvas.height - h + 65, 5, 0, Math.PI * 2);
    ctx.fillStyle = '#1a2332';
    ctx.fill();
    ctx.restore();
  }

  // ── Score popup ───────────────────────────────────────────
  function showScorePop(x, y, text) {
    const el = document.createElement('div');
    el.className = 'score-pop';
    el.textContent = text;
    el.style.left = x + 'px';
    el.style.top  = y + 'px';
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 850);
  }

  // ── Hit detection ─────────────────────────────────────────
  function hitBrick(mx, my) {
    for (let i = bricks.length - 1; i >= 0; i--) {
      const b = bricks[i];
      if (b.dead) continue;
      if (mx >= b.x && mx <= b.x + b.w && my >= b.y && my <= b.y + b.h) {
        b.dead   = true;
        b.shake  = 0;
        score   += combo;
        // Combo
        clearTimeout(comboTimer);
        combo++;
        comboTimer = setTimeout(() => { combo = 1; updateHUD(); }, 1200);

        burst(b.x + b.w / 2, b.y + b.h / 2, b.colour, 12 + combo);
        showScorePop(
          Math.min(mx, window.innerWidth - 80),
          my - 10,
          combo > 1 ? `+${combo} COMBO!` : `+1`
        );
        updateHUD();
        return true;
      }
    }
    return false;
  }

  function updateHUD() {
    document.getElementById('hudScore').textContent = score;
    document.getElementById('hudCombo').textContent = 'x' + combo;
    level = 1 + Math.floor(score / 20);
    document.getElementById('hudLevel').textContent = level;
  }

  // ── Main game loop ────────────────────────────────────────
  function loop() {
    if (!gameActive) return;
    animId = requestAnimationFrame(loop);
    frameCount++;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Spawn bricks
    const spawnRate = Math.max(55 - level * 3, 18);
    if (frameCount % spawnRate === 0) {
      bricks.push(makeBrick());
    }

    // Update & draw cranes
    cranes.forEach(c => {
      c.x += c.speed * c.dir;
      if (c.x > canvas.width + 150 || c.x < -150) c.dir *= -1;
      drawCrane(c);
    });

    // Update & draw bricks
    bricks = bricks.filter(b => {
      if (b.dead) {
        b.opacity -= 0.06;
        b.y       -= 1.5;
        return b.opacity > 0;
      }
      b.y    += b.speed;
      b.x    += b.wobble;
      if (b.shake > 0) b.shake -= 0.3;
      // Bounce off walls
      if (b.x < 0)                    { b.x = 0; b.wobble *= -1; }
      if (b.x + b.w > canvas.width)  { b.x = canvas.width - b.w; b.wobble *= -1; }
      drawBrick(b);
      return b.y < canvas.height + BRICK_H;
    });

    // Update & draw particles
    particles = particles.filter(p => {
      p.x    += p.vx;
      p.y    += p.vy;
      p.vy   += 0.18; // gravity
      p.life -= p.decay;
      if (p.life <= 0) return false;
      ctx.save();
      ctx.globalAlpha = p.life;
      ctx.fillStyle   = p.colour;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r * p.life, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
      return true;
    });
  }

  // ── Toggle game ───────────────────────────────────────────
  window.toggleGame = function() {
    gameActive = !gameActive;
    const btn = document.getElementById('gameToggle');
    const hud = document.getElementById('gameHUD');

    if (gameActive) {
      resize();
      if (!cranes.length) {
        cranes = [
          makeCrane(canvas.width * 0.15),
          makeCrane(canvas.width * 0.75),
        ];
      }
      canvas.classList.add('interactive');
      hud.classList.add('visible');
      btn.innerHTML = '<span class="gt-icon">⛔</span> Stop Game';
      btn.style.background = '#c0392b';
      loop();
    } else {
      canvas.classList.remove('interactive');
      hud.classList.remove('visible');
      btn.innerHTML = '<span class="gt-icon">🏗️</span> Play Background Game';
      btn.style.background = '';
      cancelAnimationFrame(animId);
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      bricks = []; particles = [];
    }
  };

  // ── Click handler ─────────────────────────────────────────
  canvas.addEventListener('click', e => {
    if (!gameActive) return;
    const rect = canvas.getBoundingClientRect();
    hitBrick(e.clientX - rect.left, e.clientY - rect.top);
  });

  // ── Touch support ─────────────────────────────────────────
  canvas.addEventListener('touchstart', e => {
    if (!gameActive) return;
    e.preventDefault();
    const rect  = canvas.getBoundingClientRect();
    const touch = e.touches[0];
    hitBrick(touch.clientX - rect.left, touch.clientY - rect.top);
  }, { passive: false });

  window.addEventListener('resize', () => {
    resize();
    cranes = [
      makeCrane(canvas.width * 0.15),
      makeCrane(canvas.width * 0.75),
    ];
  });

  resize();
})();
// ─────────────────────────────────────────────────────────────
// Init — seed 1 row for each table (reduced from 5), then compute
// ─────────────────────────────────────────────────────────────
document.querySelectorAll('input[type=number]').forEach(el => {
  el.addEventListener('blur', () => {
    if (parseFloat(el.value) < 0) { el.value = 0; compute(); }
  });
});

onConstructionChange();
for (let s = 0; s < 1; s++) { addCompRow(); }
for (let s = 0; s < 1; s++) { addAddlRow(); }
</script>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H037GPSG7X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H037GPSG7X');
</script>
</body>
</html>
