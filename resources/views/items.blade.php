<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Inventory</title>
</head>

<body>
    <h1>Inventory List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $items->links() }}
    </div>
</body>

</html>
