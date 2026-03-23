<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    </style>
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Add New Student</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="border border-gray-300 px-2 py-1 rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="border border-gray-300 px-2 py-1 rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" class="border border-gray-300 px-2 py-1 rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="groupe" class="block text-sm font-medium text-gray-700">Groupe</label>
                <input type="text" name="groupe" id="groupe" class="border border-gray-300 px-2 py-1 rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="filiere" class="block text-sm font-medium text-gray-700">Filiere</label>
                <input type="text" name="filiere" id="filiere" class="border border-gray-300 px-2 py-1 rounded-md w-full" required>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Add Student</button>
            <a href="{{ route('index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
        </form>
    </div>
            
        </body>
        </html>