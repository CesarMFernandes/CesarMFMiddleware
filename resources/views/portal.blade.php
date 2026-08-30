<head>
    <title>Landing</title>
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif
</head>
<body class="w-[100vw] h-[100vh] flex bg-gray-500">
    <h1 class="m-auto text-xl font-bold">Bem vindo ao portal</h1>
</body>