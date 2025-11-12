<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MJRS Associates — Services</title>
    <meta name="description"
        content="Professional accounting services in Oakville, ON — Bookkeeping, Payroll, HST/WSIB, Corporate Tax, Advisory, and Corporate Filings. Canada-wide remote support." />

    <style>
        :root {
            --mjrs-red: #C10F1A;
            --mjrs-black: #0B0B0B;
            --mjrs-gold: #C9A227;
            --bg-1: #ffffff;
            --bg-2: #f9fafb;
            --muted: #6b7280;
            --panel: #ffffff;
            --radius: 18px;
            --shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font: 16px/1.7 system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, "Helvetica Neue", Arial, sans-serif;
            color: var(--mjrs-black);
            background: linear-gradient(180deg, var(--bg-1), var(--bg-2));
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            color: var(--mjrs-red);
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 22px;
        }

        .hero {
            padding-top: 32px;
        }

        .eyebrow {
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--mjrs-gold);
            font-weight: 700;
        }

        h1 {
            font-size: clamp(30px, 4.2vw, 46px);
            line-height: 1.15;
            margin: .3rem 0 1rem;
            color: var(--mjrs-black);
        }

        .lead {
            max-width: 72ch;
            color: #374151;
            margin: 0 0 18px;
        }

        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 18px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            padding: 14px 20px;
            border-radius: 999px;
            font-weight: 700;
            box-shadow: var(--shadow);
            transition: all .2s ease;
        }

        .btn-primary {
            background: var(--mjrs-red);
            color: #fff;
        }

        .btn-primary:hover {
            background: #a50c15;
        }

        .btn-outline {
            border: 1.6px solid #d1d5db;
            color: var(--mjrs-black);
            background: #fff;
        }

        .btn-outline:hover {
            background: var(--mjrs-red);
            color: #fff;
            border-color: var(--mjrs-red);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 36px;
        }

        @media (max-width:980px) {
            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width:680px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: var(--radius);
            padding: 24px;
            position: relative;
            transition: transform .2s ease, box-shadow .2s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.04);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin: .2rem 0 .4rem;
            font-size: 22px;
            color: var(--mjrs-black);
        }

        .card p {
            margin: 0 0 12px;
            color: #555;
        }

        .card li {
            margin: .35rem 0;
            color: #444;
        }

        .tag {
            display: inline-block;
            font-size: 12px;
            letter-spacing: .08em;
            text-transform: uppercase;
            background: linear-gradient(90deg, rgba(193, 15, 26, .1), rgba(201, 162, 39, .1));
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: 999px;
            color: var(--mjrs-black);
            padding: 7px 10px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .value-wrap {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 40px;
        }

        @media (max-width:900px) {
            .value-wrap {
                grid-template-columns: 1fr;
            }
        }

        .value {
            background: #fafafa;
            border: 1px solid #e5e7eb;
            border-radius: var(--radius);
            padding: 22px;
        }

        .value h4 {
            margin: .2rem 0 .5rem;
            color: var(--mjrs-black);
        }

        .value p {
            margin: 0;
            color: #555;
        }

        .industries {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 12px;
        }

        .chip {
            background: #f3f4f6;
            border: 1px solid #e5e7eb;
            color: var(--mjrs-black);
            padding: 8px 12px;
            border-radius: 999px;
            font-weight: 600;
        }

        .panel {
            margin-top: 40px;
            background: linear-gradient(90deg, rgba(193, 15, 26, .05), rgba(201, 162, 39, .05));
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: var(--radius);
            padding: 22px;
        }

        .panel h3 {
            margin: .2rem 0 .3rem;
            color: var(--mjrs-black);
        }

        .panel p {
            margin: 0 0 12px;
            color: #333;
        }

        .spacer {
            height: 26px;
        }
    </style>
</head>

<body>
    <header class="container hero" aria-labelledby="services-title">
        <span class="eyebrow">Our Services</span>
        <h1 id="services-title">Accounting solutions that scale with you</h1>
        <p class="lead">From audit-ready bookkeeping to corporate tax and strategic advisory, MJRS Associates delivers
            precise, compliant, and technology-enabled accounting services. Based in Oakville, ON and serving clients
            across
            Canada.</p>
        <div class="cta-row">
            <a class="btn btn-primary" href="#contact">Book a Free Consultation</a>
            <a class="btn btn-outline" href="/bookkeeping">Explore Bookkeeping</a>
        </div>
    </header>

    <main class="container" aria-label="Services list">
        <section class="grid" aria-describedby="grid-desc">
            <p id="grid-desc" class="visually-hidden">Nine service cards with summaries and deep links.</p>

            <article class="card" aria-labelledby="s1"><span class="tag">Core</span>
                <h3 id="s1">Bookkeeping</h3>
                <p>Audit‑ready monthly close, accurate categorization, reconciliations, and clear reporting — the
                    financial backbone of your business.</p>
                <ul>
                    <li>Month‑end close & management reports</li>
                    <li>Bank/credit reconciliations</li>
                    <li>Digital receipt capture & archive</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit bookkeeping page" href="/bookkeeping">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s2"><span class="tag">Compliance</span>
                <h3 id="s2">Payroll, HST & WSIB</h3>
                <p>On‑time, accurate filings and remittances with integrated workflows to eliminate penalties and reduce
                    admin.</p>
                <ul>
                    <li>Payroll processing & remittances</li>
                    <li>GST/HST coding & returns</li>
                    <li>WSIB reporting & coordination</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit compliance page" href="/bookkeeping#compliance">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s3"><span class="tag">Tax</span>
                <h3 id="s3">Corporate Tax (T2)</h3>
                <p>Accurate preparation and filing with full documentation, tax planning, and CRA‑ready support.</p>
                <ul>
                    <li>Year‑end working papers & schedules</li>
                    <li>Tax optimization strategies</li>
                    <li>CRA correspondence & support</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit corporate tax page" href="/tax-corporate">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s4"><span class="tag">Advisory</span>
                <h3 id="s4">Strategic Advisory</h3>
                <p>From KPI frameworks to budgeting and cash‑flow modelling — insight that turns data into decisions.
                </p>
                <ul>
                    <li>Dashboards & KPI design</li>
                    <li>Budgeting, forecasting & scenarios</li>
                    <li>Governance, risk & compliance</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit advisory page" href="/advisory">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s5"><span class="tag">Structure</span>
                <h3 id="s5">Incorporation & Structuring</h3>
                <p>Choose the right entity and structure parent/subsidiary relationships with a view to tax, control,
                    and scale.</p>
                <ul>
                    <li>Incorporation guidance</li>
                    <li>Share structure & minute book</li>
                    <li>Multi‑entity & holding companies</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit structuring page" href="/tax-corporate#structuring">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s6"><span class="tag">Readiness</span>
                <h3 id="s6">CRA Audit Support</h3>
                <p>Proactive documentation, reconciliations, and representation so you’re prepared when the CRA reviews.
                </p>
                <ul>
                    <li>Audit‑ready documentation systems</li>
                    <li>Variance analysis & support</li>
                    <li>Direct CRA correspondence</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit CRA support section" href="/tax-corporate#audit">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s7"><span class="tag">Systems</span>
                <h3 id="s7">Software Setup & Migration</h3>
                <p>Implement or migrate to modern cloud accounting with clean charts, workflows, and controls.</p>
                <ul>
                    <li>QBO/Xero setup & conversions</li>
                    <li>Workflow automation</li>
                    <li>Controls & permissions</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit systems section" href="/bookkeeping#systems">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s8"><span class="tag">Cleanup</span>
                <h3 id="s8">Catch‑Up & Rescue</h3>
                <p>Backlogs eliminated and prior periods rebuilt with audit‑ready working papers and reconciliations.
                </p>
                <ul>
                    <li>Historical clean‑up & AR/AP rebuild</li>
                    <li>Bank/credit catch‑up</li>
                    <li>Year‑end readiness pack</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit cleanup section" href="/bookkeeping#cleanup">Learn more →</a>
            </article>

            <article class="card" aria-labelledby="s9"><span class="tag">Corporate</span>
                <h3 id="s9">Corporate Filings & Minute Book</h3>
                <p>Annual returns, resolutions, updates, and secure minute‑book maintenance to keep you compliant.</p>
                <ul>
                    <li>Annual returns & resolutions</li>
                    <li>Director/officer updates</li>
                    <li>Digital minute‑book storage</li>
                </ul>
                <div class="spacer"></div>
                <a aria-label="Visit corporate filings section" href="/tax-corporate#corporate-filings">Learn more →</a>
            </article>
        </section>

        <!-- Value props -->
        <section class="value-wrap" aria-label="Why choose MJRS">
            <div class="value">
                <h4>Audit‑Ready by Design</h4>
                <p>Our workflows, documentation, and reconciliations are built to withstand CRA review and external
                    audit.</p>
            </div>
            <div class="value">
                <h4>Integrated, End‑to‑End</h4>
                <p>Bookkeeping, tax, payroll, and advisory function together — one team, one source of truth.</p>
            </div>
            <div class="value">
                <h4>Canada‑Wide & Cloud‑Enabled</h4>
                <p>Based in Oakville, ON. Secure remote collaboration for clients across Canada.</p>
            </div>
        </section>

        <!-- Industries -->
        <section style="margin-top:36px" aria-labelledby="industries">
            <h3 id="industries">Industries we serve</h3>
            <div class="industries" role="list">
                <span class="chip" role="listitem">Professional services</span>
                <span class="chip" role="listitem">Construction & trades</span>
                <span class="chip" role="listitem">Retail & eCommerce</span>
                <span class="chip" role="listitem">Real estate & holdingcos</span>
                <span class="chip" role="listitem">Healthcare & clinics</span>
                <span class="chip" role="listitem">Non‑profit</span>
                <span class="chip" role="listitem">Startups</span>
            </div>
        </section>

        <!-- CTA panel -->
        <section id="contact" class="panel" role="region" aria-labelledby="cta-title">
            <h3 id="cta-title">Discuss your goals with our team</h3>
            <p>Schedule a strategic consultation. We’ll map a tailored scope, timelines, and milestones — pricing is
                customized to volume and complexity.</p>
            <div class="cta-row">
                <a class="btn btn-primary" href="mailto:info@mjrsassociates.com?subject=Consultation%20Request"
                    aria-label="Email MJRS Associates">Email Us</a>
                <a class="btn btn-outline" href="tel:+19050000000" aria-label="Call MJRS Associates">(905) XXX‑XXXX</a>
            </div>
        </section>
    </main>
</body>

</html>