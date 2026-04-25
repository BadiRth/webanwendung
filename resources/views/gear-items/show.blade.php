<!DOCTYPE html>
<html>
<head>
    <title>{{ $gearItem->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; width: 200px; }
    </style>
</head>
<body>
    <h1>{{ $gearItem->name }}</h1>
    <a href="{{ route('gear-items.index') }}">← Zurück</a>
    <br><br>

    <table>
        <tr>
            <th>Name</th>
            <td>{{ $gearItem->name }}</td>
        </tr>
        <tr>
            <th>Kategorie</th>
            <td>{{ $gearItem->category }}</td>
        </tr>
        <tr>
            <th>Zustand</th>
            <td>{{ $gearItem->condition_label }}</td>
        </tr>
        <tr>
            <th>Kaufdatum</th>
            <td>{{ $gearItem->purchase_date }}</td>
        </tr>
        <tr>
            <th>Wert</th>
            <td>{{ $gearItem->value }} €</td>
        </tr>
        <tr>
            <th>Notizen</th>
            <td>{{ $gearItem->notes ?? '-' }}</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('gear-items.edit', $gearItem) }}">Bearbeiten</a>
</body>
</html>