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
    <h1 class="font-bold text-center  mb-10 text-4xl">Inventory List</h1>

    <table class="table-auto border">
        <thead>
            <tr class="font-semibold text-center  mb-6 text-2xl">
                <th class="border">ID</th>
                <th class="border">Item</th>
                <th class="border">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="font-semibold text-center  mb-6">
                    <td class="border">{{ $item->id }}</td>
                    <td class="border">{{ $item->item }}</td>
                    <td class="border">{{ $item->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $items->links() }}
    </div>
</body>

</html>
