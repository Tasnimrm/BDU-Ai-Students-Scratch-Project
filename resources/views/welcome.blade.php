<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AI-Enhanced Todo List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-12">
        @livewire('ai-todo-list')
    </div>
    @livewireScripts
</body>
</html>
