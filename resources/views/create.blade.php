<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="">
        <form action={{ route("store")}} method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="model" class="block text-sm font-bold text-gray-700">Model</label>
                <input type="text" id="model" name="model" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Car</button>
            </div>
        </form>
    </div>
    
</body>
</html>