<!DOCTYPE html>
<html>
<head>
    <title>Gear Manager</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        a { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Gear Manager</h1>
    <a href="{{ route('gear-items.create') }}">+ Neues Item</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Kategorie</th>
            <th>Zustand</th>
            <th>Wert</th>
            <th>Notizen</th>
            <th>Aktionen</th>
        </tr>
        @foreach($gearItems as $item)
        <tr>
            <td><a href="{{ route('gear-items.show', $item) }}">{{ $item->name }}</a></td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->condition_label }}</td>
            <td>{{ $item->value }} €</td>
            <td>{{ $item->notes ?? '-' }}</td>
            <td>
                <a href="{{ route('gear-items.edit', $item) }}">Bearbeiten</a>
                <form action="{{ route('gear-items.destroy', $item) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Sicher?')">Löschen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>