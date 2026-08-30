<head>
    <title>Landing</title>
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif
</head>
<body class="w-[100vw] h-[100vh] flex bg-gray-500">
    <div class="m-auto">
        <h1 class="text-xl font-bold">Seu acesso não foi autorizado.</h1>
        <p>Entrar em contato com o administrador.</p>
    </div>
</body>