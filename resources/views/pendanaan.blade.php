<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="min-h-screen">
        <div class="container min-h-screen mx-auto py-8 px-6">
            <h1 class="text-3xl font-bold mb-6">Rincian Dana BOS</h1>
            <div class="mb-6">
                <input class="w-full p-2 border border-gray-300 rounded" placeholder="Search" type="text" />
            </div>
            @foreach ($posts as $berita)
                @if ($berita['id'] <= 4)
                    <div class="space-y-6">
                        <!-- News Item -->
                        <div class="border-b mb-3 pb-3">
                            <h2 class="text-xl font-bold">
                                <a href="/berita/{{ $berita['slug'] }}"
                                    class="hover:text-blue-500 transition duration-300">{{ $berita['title'] }}</a>
                            </h2>
                            <p class="text-gray-600">by {{ $berita['author']->name }} |
                                {{ $berita->created_at->diffForHumans() }}</p>
                            <p class="text-gray-700 mt-2">
                                {{ Str::limit($berita['body'], 100, '...') }}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </main>
</x-layout>
