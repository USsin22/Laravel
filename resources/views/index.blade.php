<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>


    </style>
</head>

<body class="">
    <div class="grid grid-cols-5 gap-4">
        {{-- <div class="clo-span-1">
            @include('layouts.side-bar')
            </div> --}}
        <div class="col-span-5">
            @include('layouts.header')
            @include("layouts.main")

        </div>
        

    </div>
    
    {{-- @include('layouts.footer') --}}


</body>

</html>
