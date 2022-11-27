<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear nuevo blog post"
>

    <h1>Create New Post</h1>



    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
            <br>
            <small style="color:red">{{$message}}</small>
            @enderror
        </label> <br>
        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
            <br>
            <small style="color:red">{{$message}}</small>
            @enderror
        </label> <br>
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
        <a href="{{route('posts.index')}}">regresar</a>

</x-layouts.app>
