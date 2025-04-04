<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorites - Movie Collection</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">My Favorite Movies</h1>
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="mr-4">Dashboard</a>
                <p class="mr-4">Welcome, {{ Auth::user()->name }}</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Your Favorite Movies</h2>
            <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back to Dashboard</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($favorites->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($favorites as $movie)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if($movie->poster_url)
                            <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}" class="w-full h-64 object-cover">
                        @else
                            <div class="w-full h-64 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <div class="p-4">
                            <h4 class="font-bold">{{ $movie->title }}</h4>
                            <p class="text-sm text-gray-600">{{ $movie->release_year }} | {{ $movie->genre }}</p>
                            <p class="text-sm mt-2 line-clamp-3">{{ $movie->description }}</p>
                            <div class="mt-3">
                                <form action="{{ route('favorites.toggle', $movie) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                        Remove from Favorites
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $favorites->links() }}
            </div>
        @else
            <div class="bg-gray-100 p-8 rounded text-center">
                <p class="text-xl mb-4">You haven't added any movies to your favorites yet.</p>
                <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Discover Movies</a>
            </div>
        @endif
    </div>

    <footer class="bg-gray-800 text-white p-6 mt-12">
        <div class="container mx-auto">
            <p class="text-center">© {{ date('Y') }} Movie Collection. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
