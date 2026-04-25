<!DOCTYPE html>
<html>
<head>
    <title>Item bearbeiten</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input, select, textarea { display: block; margin-bottom: 10px; padding: 5px; width: 300px; }
    </style>
</head>
<body>
    <h1>Item bearbeiten</h1>
    <a href="{{ route('gear-items.index') }}">← Zurück</a>

    <form method="POST" action="{{ route('gear-items.update', $gearItem) }}">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ $gearItem->name }}" required>

        <label>Kategorie</label>
        <input type="text" name="category" value="{{ $gearItem->category }}" required>

        <label>Zustand</label>
        <select name="condition">
            <option value="new" {{ $gearItem->condition == 'new' ? 'selected' : '' }}>Neu</option>
            <option value="good" {{ $gearItem->condition == 'good' ? 'selected' : '' }}>Gut</option>
            <option value="worn" {{ $gearItem->condition == 'worn' ? 'selected' : '' }}>Abgenutzt</option>
            <option value="broken" {{ $gearItem->condition == 'broken' ? 'selected' : '' }}>Kaputt</option>
        </select>

        <label>Kaufdatum</label>
        <input type="date" name="purchase_date" value="{{ $gearItem->purchase_date }}" required>

        <label>Wert (€)</label>
        <input type="number" step="0.01" name="value" value="{{ $gearItem->value }}" required>

        <label>Notizen</label>
        <textarea name="notes">{{ $gearItem->notes }}</textarea>

        <button type="submit">Aktualisieren</button>
    </form>
</body>
</html>