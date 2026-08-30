<head>
    <title>Landing</title>
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif
</head>
<body class="w-[100vw] h-[100vh] flex bg-gray-500">
    <form action="{{ route('portal.index') }}" method="POST" class="m-auto">
    @csrf
        <select name="autorizado" class="bg-gray-400">
            <option value="auth">Autorizado</option>
            <option value="nauth">Não Autorizado</option>
        </select>
    
    <button type="submit" class=" bg-blue-700 h-25 w-50 border rounded-xl hover:bg-blue-600 hover:cursor-pointer">
        Ir para o portal
    </button>
</form>
</body>
