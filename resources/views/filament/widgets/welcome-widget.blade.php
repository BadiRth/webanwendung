<div style="padding: 20px;">
    <h1 class="fi-header-heading">GEAR MANAGER</h1>
    <p style="color: #8888FF; letter-spacing: 1px; margin-top: 8px;">
        Verwalte deine Ausrüstung – 
        <a href="/gear-manager/gear-items" style="color: #CCCCFF; text-decoration: underline;">erstelle</a>, 
        <a href="/gear-manager/gear-items" style="color: #CCCCFF; text-decoration: underline;">bearbeite</a> 
        und 
        <a href="/gear-manager/gear-items" style="color: #CCCCFF; text-decoration: underline;">lösche</a> 
        Einträge über die Navigation.
    </p>

    <div style="display: flex; flex-wrap: wrap; gap: 32px; margin-top: 48px;">
        
        <div style="
            flex: 1 1 200px;
            background: #0D0D1A;
            border: 1px solid #8888FF;
            box-shadow: 6px 6px 0px #4444AA;
            padding: 32px;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;"
            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='8px 8px 0px #8888FF';"
            onmouseout="this.style.transform=''; this.style.boxShadow='6px 6px 0px #4444AA';">
            <div style="font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: #AAAAEE;">GESAMT ITEMS</div>
            <div style="font-size: 32px; font-weight: 700; color: #AAAAEE; margin: 12px 0;">{{ \App\Models\GearItem::count() }}</div>
            <div style="font-size: 11px; color: #44AA44;">Alle Ausrüstungsgegenstände</div>
        </div>

        <div style="
            flex: 1 1 200px;
            background: #0D0D1A;
            border: 1px solid #8888FF;
            box-shadow: 6px 6px 0px #4444AA;
            padding: 32px;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;"
            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='8px 8px 0px #8888FF';"
            onmouseout="this.style.transform=''; this.style.boxShadow='6px 6px 0px #4444AA';">
            <div style="font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: #AAAAEE;">GESAMTWERT</div>
            <div style="font-size: 32px; font-weight: 700; color: #AAAAEE; margin: 12px 0;">€ {{ number_format(\App\Models\GearItem::sum('value'), 2, ',', '.') }}</div>
            <div style="font-size: 11px; color: #AAAA44;">Wert aller Items</div>
        </div>

        <div style="
            flex: 1 1 200px;
            background: #0D0D1A;
            border: 1px solid #8888FF;
            box-shadow: 6px 6px 0px #4444AA;
            padding: 32px;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;"
            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='8px 8px 0px #8888FF';"
            onmouseout="this.style.transform=''; this.style.boxShadow='6px 6px 0px #4444AA';">
            <div style="font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: #AAAAEE;">KAPUTTE ITEMS</div>
            <div style="font-size: 32px; font-weight: 700; color: #AAAAEE; margin: 12px 0;">{{ \App\Models\GearItem::where('condition', 'broken')->count() }}</div>
            <div style="font-size: 11px; color: #AA4444;">Benötigen Reparatur</div>
        </div>

    </div>
</div>