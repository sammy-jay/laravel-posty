<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>Posty</title>
</head>

<body class="bg-gray-200">
    <nav class="px-6 py-4 bg-white flex justify-between">
        <ul class="flex items-center font-semibold text-xl">
            <li><a href="/" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="{{ route('posts') }}" class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center space-x-4">
            @auth
                <li><a href="#" class="bg-gray-200 py-2 px-4 rounded-full ">
                        <span class="text-sm text-gray-400">Logged in as:</spa>
                            <span class="font-semibold text-gray-800">{{ auth()->user()->username }}</spa>
                    </a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="py-2 px-4 bg-red-500 text-white rounded-lg font-medium ">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}"
                        class="py-2 px-4 bg-blue-500 text-white rounded-lg font-medium ">Login</a></li>
                <li><a href="{{ route('register') }}"
                        class="py-2 px-4 bg-blue-500 text-white rounded-lg font-medium ">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>
