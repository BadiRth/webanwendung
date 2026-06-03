<div style="padding: 20px; width: 100%; box-sizing: border-box;">    <h1 class="fi-header-heading">GEAR MANAGER</h1>
    <p style="color: #8888FF; letter-spacing: 1px; margin-top: 8px;">
        Verwalte deine Ausrüstung –
        <a href="/ausruestung" style="color: #CCCCFF; text-decoration: underline;">erstelle</a>,
        <a href="/ausruestung" style="color: #CCCCFF; text-decoration: underline;">bearbeite</a>
        und
        <a href="/gear-manager/gear-items" style="color: #CCCCFF; text-decoration: underline;">lösche</a>
        Einträge über die Navigation.
    </p>

    <style>
        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            align-items: stretch;
            gap: 32px;
            margin-top: 48px;
            width: 100%;
        }
        @media (max-width: 768px) {
            .stats-grid { grid-template-columns: 1fr; }
        }
        .stat-card {
            display: flex;
            flex-direction: column;
            background: #0D0D1A;
            border: 1px solid #8888FF;
            box-shadow: 6px 6px 0px #4444AA;
            padding: 24px;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            text-decoration: none;
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 8px 8px 0px #8888FF;
        }
        .stat-label {
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #AAAAEE;
        }
        .stat-value {
            font-size: 36px;
            font-weight: 700;
            color: #AAAAEE;
            margin: 12px 0;
            margin-top: auto;
        }
        .stat-desc {
            font-size: 11px;
        }
    </style>

    <div class="stats-grid">
        <a href="/ausruestung" class="stat-card">
            <div class="stat-label">GESAMT ITEMS</div>
            <div class="stat-value">{{ \App\Models\GearItem::count() }}</div>
            <div class="stat-desc" style="color: #44AA44;">Alle Ausrüstungsgegenstände</div>
        </a>

        <a href="/ausruestung" class="stat-card">
            <div class="stat-label">GESAMTWERT</div>
            <div class="stat-value">€ {{ number_format(\App\Models\GearItem::sum('value'), 2, ',', '.') }}</div>
            <div class="stat-desc" style="color: #AAAA44;">Wert aller Items</div>
        </a>

        <a href="/gear-manager/gear-items" class="stat-card">
            <div class="stat-label">KAPUTTE ITEMS</div>
            <div class="stat-value">{{ \App\Models\GearItem::where('condition', 'broken')->count() }}</div>
            <div class="stat-desc" style="color: #AA4444;">Benötigen Reparatur</div>
        </a>
    </div>
</div>