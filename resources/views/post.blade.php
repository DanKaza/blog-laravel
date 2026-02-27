<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-320">

        <h2>
            {{ $post['title'] }}
        </h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }} | 2 Februari 1998 </a></a>
        </div>

        <p class="text-base text-gray-500">
            {{$post['body']}}
        </p>
        <a href="/posts" class="font-small text-blue-500 hover:underline">&laquo; Kembali ke halaman utama</a>

    </article>

</x-layout>