
<x-layout>
    <article>
        <h1>
            {!! $post->slug  !!}
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
        </p>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go back</a>
    </article>
</x-layout>


