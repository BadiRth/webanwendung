<!DOCTYPE html>
<html>
<head>
    <title>Übersicht</title>
    <link rel="stylesheet" href="/css/retro.css">
    <style>
        body {
            background-color: #0A0A12;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* ── SIDEBAR ── */
        .sidebar {
            width: 216px;
            min-height: 100vh;
            background-color: #0D0D1A;
            border-right: 1px solid #4444AA;
            padding: 16px 0;
            flex-shrink: 0;
        }

        .sidebar-brand {
            padding: 16px 24px;
            font-size: 13px;
            letter-spacing: 2px;
            color: #8888FF;
            border-bottom: 1px solid #4444AA;
            margin-bottom: 8px;
        }

        .sidebar a {
            display: block;
            padding: 10px 24px;
            color: #8888FF;
            text-decoration: none;
            letter-spacing: 2px;
            font-size: 11px;
        }

        .sidebar a:hover {
            background-color: #1A1A3A;
            color: #CCCCFF;
            border-left: 2px solid #8888FF;
        }

        .sidebar a.active {
            background-color: #1A1A3A;
            color: #CCCCFF;
            border-left: 2px solid #8888FF;
        }

        /* ── MAIN ── */
        .main {
            flex: 1;
            padding: 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #AAAAEE;
            margin: 0;
        }

        /* ── GRID ── */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 32px;
        }

        .card {
            background-color: #0D0D1A;
            border: 1px solid #4444AA;
            box-shadow: 6px 6px 0px #4444AA;
            cursor: pointer;
            text-decoration: none;
            display: block;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 8px 8px 0px #8888FF;
            border-color: #8888FF;
        }

        .card-category {
            background-color: #1A1A3A;
            padding: 48px 24px;
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #CCCCFF;
            border-bottom: 1px solid #4444AA;
        }

        .card-body {
            padding: 24px;
        }

        .card-name {
            font-size: 13px;
            font-weight: 700;
            color: #AAAAEE;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .card-value {
            font-size: 16px;
            color: #8888FF;
            margin-bottom: 8px;
        }

        .card-condition {
            font-size: 11px;
            letter-spacing: 1px;
            padding: 4px 8px;
            display: inline-block;
        }

        .condition-new    { background-color: #1A3A1A; color: #44AA44; border: 1px solid #44AA44; }
        .condition-good   { background-color: #1A1A3A; color: #4444AA; border: 1px solid #4444AA; }
        .condition-worn   { background-color: #3A3A1A; color: #AAAA44; border: 1px solid #AAAA44; }
        .condition-broken { background-color: #3A1A1A; color: #AA4444; border: 1px solid #AA4444; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-brand">BadiDesign</div>
        <a href="/gear-manager">⌂ &nbsp; Home</a>
        <a href="/ausruestung" class="active">▦ &nbsp; Übersicht</a>
        <a href="/gear-manager/gear-items">↗ &nbsp; Verwaltung</a>
    </div>

    <div class="main">
        <div class="header">
            <h1>Übersicht</h1>
        </div>

        <div class="grid">
            @foreach($gearItems as $item)
            <a href="/gear-manager/gear-items/{{ $item->id }}" class="card">
                <div class="card-category">{{ $item->category }}</div>
                <div class="card-body">
                    <div class="card-name">{{ $item->name }}</div>
                    <div class="card-value">€ {{ number_format($item->value, 2, ',', '.') }}</div>
                    <span class="card-condition condition-{{ $item->condition }}">
                        {{ $item->condition_label }}
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</body>
</html>