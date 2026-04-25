<!DOCTYPE html>
<html>
<head>
    <title>Neues Item</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input, select, textarea { display: block; margin-bottom: 10px; padding: 5px; width: 300px; }
    </style>
</head>
<body>
    <h1>Neues Gear Item</h1>
    <a href="{{ route('gear-items.index') }}">← Zurück</a>

    <form method="POST" action="{{ route('gear-items.store') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Kategorie</label>
        <input type="text" name="category" required>

        <label>Zustand</label>
        <select name="condition">
            <option value="new">Neu</option>
            <option value="good">Gut</option>
            <option value="worn">Abgenutzt</option>
            <option value="broken">Kaputt</option>
        </select>

        <label>Kaufdatum</label>
        <input type="date" name="purchase_date" required>

        <label>Wert (€)</label>
        <input type="number" step="0.01" name="value" required>

        <label>Notizen</label>
        <textarea name="notes"></textarea>

        <button type="submit">Speichern</button>
    </form>
</body>
</html>