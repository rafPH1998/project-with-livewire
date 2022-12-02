<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <script src="https://cdn.tailwindcss.com"></script>


    @livewireStyles

</head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="container mx-auto h-200">
            <main>
                    {{ $slot }}
            </main>
        </div>


        @livewireScripts
    </body>
</html>