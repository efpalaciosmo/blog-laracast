
<x-layoutWay1>
    <article>
        <h1>
            {!! $post->slug  !!}
        </h1>

        <p>
            By <a href="#">{{$post->user->name}}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
        </p>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go back</a>
    </article>
</x-layoutWay1>


