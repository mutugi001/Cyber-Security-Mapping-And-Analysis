<!DOCTYPE html>
<html>
<head>
    <title>News Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Search News</h1>
    <form method="GET" action="{{ route('admin.news.get')}}" class="mb-6">
        <div class="mb-4">
            <label for="query" class="block text-gray-700">Query:</label>
            <input type="text" id="query" name="query" class="mt-1 block w-full" value="{{ request('query') }}">
        </div>

        {{-- <div class="mb-4">
            <label for="language" class="block text-gray-700">Language:</label>
            <input type="text" id="language" name="language" class="mt-1 block w-full" value="{{ request('language', 'en') }}">
        </div>

        <div class="mb-4">
            <label for="country" class="block text-gray-700">Country:</label>
            <input type="text" id="country" name="country" class="mt-1 block w-full" value="{{ request('country') }}">
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700">Category:</label>
            <input type="text" id="category" name="category" class="mt-1 block w-full" value="{{ request('category') }}">
        </div>

        <div class="mb-4">
            <label for="pageSize" class="block text-gray-700">Page:</label>
            <input type="number" id="page" name="page" class="mt-1 block w-full" value="{{ request('page', 1) }}">
        </div> --}}
        <div class="mb-4">
            <label for="pageSize" class="block text-gray-700">Page Size:</label>
            <input type="number" id="pageSize" name="pageSize" class="mt-1 block w-full" value="{{ request('pageSize', 10) }}">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Search</button>
    </form>

    @if(isset($news['results']))
        <h2 class="text-2xl font-bold mb-4">Results:</h2>
        <ul class="list-disc pl-5">
            @foreach($news['results'] as $article)
                <li class="mb-2">
                    <a href={{ $article['link'] }} target="_blank" class="text-blue-500">{{ $article['title'] }}</a>
                    <p class="text-gray-600">{{ $article['description'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No news found. Please try a different query.</p>
    @endif
</body>
</html>
