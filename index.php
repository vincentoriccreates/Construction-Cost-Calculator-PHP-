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
    'IV-C (13)' => 0,     'V-A (13)' => 0,      'V-B (13)' => 7570,   'V-C (13)' => 6890,
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

// Pass PHP data to JavaScript
$js_unit_costs       = json_encode($unit_costs);
$js_components       = json_encode($components);
$js_assessment_levels = json_encode($assessment_levels);
?>
<!DOCTYPE html>
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
  }

  *, *::before, *::after { box-sizing: border-box; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: #f4f7fb;
    color: var(--ink);
    min-height: 100vh;
    padding: 2rem 1rem;
  }

  /* ── Page background texture ── */
  body::before {
    content: '';
    position: fixed; inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 20% 10%, rgba(76,175,125,.08) 0%, transparent 60%),
      radial-gradient(ellipse 60% 50% at 80% 90%, rgba(46,158,100,.06) 0%, transparent 55%);
    pointer-events: none; z-index: 0;
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
  }
  .page-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.7rem, 4vw, 2.4rem);
    font-weight: 600;
    color: var(--ink);
    margin: 0 0 .4rem;
    line-height: 1.15;
  }
  .page-header p {
    color: var(--ink-light);
    font-size: .92rem;
    margin: 0;
  }

  /* ── Card ── */
  .calc-card {
    background: #fff;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    border: 1px solid var(--border);
  }

  /* ── Section headers ── */
  .section-header {
    display: flex;
    align-items: center;
    gap: .6rem;
    padding: 1.1rem 1.6rem;
    background: var(--green-50);
    border-bottom: 1px solid var(--green-200);
  }
  .section-header .dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--green-500);
    flex-shrink: 0;
  }
  .section-header span {
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .09em;
    text-transform: uppercase;
    color: var(--green-600);
  }

  /* ── Input Section ── */
  .input-section {
    padding: 1.5rem 1.6rem 1.3rem;
    background: linear-gradient(135deg, var(--green-50) 0%, #f8fffe 100%);
    border-bottom: 1px solid var(--border);
  }
  .input-section .row { gap: .6rem 0; }

  label.form-label {
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .04em;
    text-transform: uppercase;
    color: var(--ink-light);
    margin-bottom: .35rem;
  }

  .form-select, .form-control {
    border: 1.5px solid var(--border);
    border-radius: 9px;
    padding: .55rem .85rem;
    font-size: .9rem;
    font-family: 'DM Sans', sans-serif;
    color: var(--ink);
    background-color: #fff;
    transition: border-color .18s, box-shadow .18s;
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
    background: var(--ink);
    color: #fff;
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: .75rem 1rem;
    border: none;
    white-space: nowrap;
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
    font-size: .82rem; color: var(--ink-light); pointer-events: none;
  }

  .computed-cost {
    font-family: 'DM Mono', monospace;
    font-size: .9rem;
    font-weight: 500;
    color: var(--ink);
    text-align: right;
    white-space: nowrap;
    min-width: 130px;
  }

  /* ── Summary Section ── */
  .summary-section {
    background: var(--ink);
    padding: 1.4rem 1.6rem;
    border-top: 1px solid rgba(255,255,255,.07);
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
  }
  .summary-item .s-label {
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(255,255,255,.5);
    margin-bottom: .35rem;
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
  }
  .summary-item.highlight .s-label { color: rgba(255,255,255,.75); }
  .summary-item.highlight .s-value { font-size: 2rem; color: #fff; }

  /* ── Assessment Section ── */
  .assessment-section {
    padding: 1.3rem 1.6rem;
    background: #fafbff;
    border-top: 1px solid var(--border);
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
    color: var(--ink);
  }
  .assess-card.accent {
    border-color: var(--green-400);
    background: var(--green-50);
  }
  .assess-card.accent .ac-value { color: var(--green-600); }

  /* ── Tooltip on formula ── */
  .formula-hint {
    font-size: .72rem;
    color: var(--ink-light);
    margin-top: .3rem;
    font-family: 'DM Mono', monospace;
    opacity: .7;
  }

  /* ── Formula Breakdown Box ── */
  .formula-box-section {
    padding: 0 1.6rem 1.6rem;
    background: #fff;
  }

  .formula-yellow-box {
    background: #fffde7;
    border: 2px solid #f9c800;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(249,200,0,.18);
  }

  .formula-box-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f9c800;
    padding: .55rem 1rem;
  }

  .formula-box-title {
    font-size: .82rem;
    font-weight: 700;
    color: #5a3e00;
    letter-spacing: .04em;
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
    caret-color: transparent; /* hide blinking caret — read-like feel */
  }
  .formula-textarea:focus {
    caret-color: #9a7a00; /* show caret when actively focused */
  }
  .formula-textarea::selection {
    background: #f9c800;
    color: #2d1f00;
  }

  .formula-box-footer {
    padding: .45rem 1rem;
    border-top: 1px solid #f0d000;
    display: flex;
    align-items: center;
    gap: 1rem;
  }
  .formula-tip {
    font-size: .72rem;
    color: #9a7a00;
    font-style: italic;
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
  }
  .pct-input-wrap input:disabled + * { opacity: .4; }

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
              $cost_label = $uc > 0
                ? htmlspecialchars($ct) . ' — ₱' . number_format($uc, 2)
                : htmlspecialchars($ct) . ' — N/A';
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
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 1; $i <= 5; $i++): ?>
              <tr id="row_<?= $i ?>">
                <td><div class="row-num"><?= $i ?></div></td>
                <td>
                  <select class="form-select comp-select" data-row="<?= $i ?>" onchange="onComponentChange(<?= $i ?>)">
                    <option value="" data-pct="">-- Select Component --</option>
                    <?php foreach ($components as $cname => $cpct): ?>
                      <option value="<?= htmlspecialchars($cname) ?>" data-pct="<?= $cpct ?>">
                        <?= htmlspecialchars($cname) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input type="number" class="form-control area-input"
                         id="area_<?= $i ?>" data-row="<?= $i ?>"
                         value="" min="0" step="0.01" oninput="compute()" placeholder="0.00">
                </td>
                <td>
                  <div class="pct-input-wrap">
                    <input type="number" class="form-control pct-input"
                           id="pct_<?= $i ?>" data-row="<?= $i ?>"
                           value="" min="0" max="100" step="1" oninput="compute()" placeholder="—">
                  </div>
                </td>
                <td>
                  <div class="computed-cost" id="cost_<?= $i ?>">₱0.00</div>
                </td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
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
        <div class="summary-item highlight">
          <div class="s-label">Total Construction Cost</div>
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
// PHP → JS data injection
// ─────────────────────────────────────────────────────────────
const UNIT_COSTS        = <?= $js_unit_costs ?>;
const COMPONENT_PCTS    = <?= $js_components ?>;
const ASSESSMENT_LEVELS = <?= $js_assessment_levels ?>;

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
// Update percentage when component dropdown changes
// ─────────────────────────────────────────────────────────────
function onComponentChange(rowNum) {
  const sel    = document.querySelector(`.comp-select[data-row="${rowNum}"]`);
  const pctEl  = document.getElementById(`pct_${rowNum}`);
  const areaEl = document.getElementById(`area_${rowNum}`);

  if (sel.value === '') {
    // No component selected — clear & disable pct/area
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
// Main computation
// ─────────────────────────────────────────────────────────────
function compute() {
  const unitCost     = getUnitCost();
  const mainArea     = Math.max(0, parseFloat(document.getElementById('mainArea').value) || 0);
  const structType   = document.getElementById('structuralType').value;

  // Main floor cost
  const mainCost = mainArea * unitCost;
  document.getElementById('mainFormula').textContent =
    `${num2(mainArea)} × ${num2(unitCost)} = ${peso(mainCost)}`;

  // Components
  let compAreaTotal = 0;
  let compCostTotal = 0;

  for (let i = 1; i <= 5; i++) {
    const area  = Math.max(0, parseFloat(document.getElementById(`area_${i}`).value) || 0);
    const pct   = Math.max(0, parseFloat(document.getElementById(`pct_${i}`).value)  || 0);
    const cost  = area * unitCost * (pct / 100);
    compAreaTotal += area;
    compCostTotal += cost;
    document.getElementById(`cost_${i}`).textContent = peso(cost);
  }

  const totalCost  = mainCost + compCostTotal;
  const marketVal  = Math.floor(totalCost / 10) * 10;
  const assessRate = getAssessmentLevel(structType, marketVal);
  const assessedV  = Math.floor(marketVal * assessRate / 10) * 10;
  const taxable    = assessedV * 0.02;
  const isGovt     = structType === 'Government';

  // Summaries
  document.getElementById('totalMainArea').innerHTML =
    `${num2(mainArea)} <small style="font-size:.7em;opacity:.6">sqm</small>`;
  document.getElementById('totalCompArea').innerHTML =
    `${num2(compAreaTotal)} <small style="font-size:.7em;opacity:.6">sqm</small>`;
  document.getElementById('totalCost').textContent = peso(totalCost);

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
  const ct   = document.getElementById('constructionType').value;

  let lines = [];
  lines.push(`EST COST: ${fmtN(mainArea)} x ${fmtN(unitCost)} = ${fmtN(mainCost)}`);

  for (let i = 1; i <= 5; i++) {
    const compSel  = document.querySelector(`.comp-select[data-row="${i}"]`);
    const compName = compSel ? compSel.value : `Component ${i}`;
    const area     = Math.max(0, parseFloat(document.getElementById(`area_${i}`).value) || 0);
    const pct      = Math.max(0, parseFloat(document.getElementById(`pct_${i}`).value)  || 0);
    const cost     = area * unitCost * (pct / 100);
    if (area > 0) {
      lines.push(`${compName}: ${fmtN(area)} x ${fmtN(unitCost)} x ${(pct/100).toFixed(2)} = ${fmtN(cost)}`);
    }
  }

  lines.push('');
  lines.push(`Cons. Cost:    ${fmtN(totalCost)}`);
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
document.querySelectorAll('input[type=number]').forEach(el => {
  el.addEventListener('blur', () => {
    if (parseFloat(el.value) < 0) { el.value = 0; compute(); }
  });
});

// Init
onConstructionChange();

// Initialise all component rows — disable area/pct since default is "-- Select Component --"
for (let i = 1; i <= 5; i++) {
  const pctEl  = document.getElementById(`pct_${i}`);
  const areaEl = document.getElementById(`area_${i}`);
  pctEl.disabled  = true;
  areaEl.disabled = true;
}
</script>
</body>
</html>
