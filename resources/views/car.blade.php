<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cars</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center my-8">Cars</h1>
        <div class="flex justify-center">
            <a href="{{ route('create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Car</a>
        </div>
        <div class="mt-8">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Model</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td class="border px-4 py-2">{{ $car->id }}</td>
                            <td class="border px-4 py-2">{{ $car->name }}</td>
                            <td class="border px-4 py-2">{{ $car->model }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('edit', $car->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded-md">Edit</a>
                                <form action="{{ route('destroy', $car->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-md">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>