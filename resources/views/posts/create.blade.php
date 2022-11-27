<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear nuevo blog post"
>

    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text">
        </label> <br>
        <label>
            Body <br>
            <textarea name="body" ></textarea>
        </label> <br>
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
        <a href="{{route('posts.index')}}">regresar</a>

</x-layouts.app>
