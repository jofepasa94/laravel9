<x-layouts.app
    :title="$post->title"
    :meta-description='$post->body'>

<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
    <br>
<a href="{{route('posts.index')}}">regresar</a>

</x-layouts.app>
