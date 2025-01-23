<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="overflow-hidden">
        <div class="container min-h-screen mx-auto py-8 px-6 text-justify">
            <a class="text-gray-500 mb-4 inline-block hover:text-blue-500 transition duration-300"
                href="{{ url()->previous() }}">
                <i class="fas fa-chevron-left"> </i>
                Back
            </a>
            <h1 class="text-3xl font-bold mb-2">
                {{ $post['title'] }}
            </h1>
            <p class="text-gray-600 mb-6">by {{ $post->author->name }} | {{ $post->created_at->format('d F Y') }}</p>
            <img alt="Foto Upacara.jpg" class="w-1/2 mb-6 mx-auto" src="{{ asset($post['image']) }}" />
            <p class="text-gray-700 mb-4">
                {{ $post['body'] }}
            </p>
        </div>
    </main>
</x-layout>
