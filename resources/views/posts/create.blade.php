<x-layouts.layout title="crear nuevo post" meta- description="Formulario para crear un nuevo blog post">

    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf {{-- proteccion token  --}}
        <label for="">titulo <br>
            <input name="title" type="text"><br>
        </label><br>
        <label for="">Body<br>
            <textarea name="body"></textarea><br>
        </label><br>
        <button type="submit">Enviar</button>
    </form>
    <br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.layout>
