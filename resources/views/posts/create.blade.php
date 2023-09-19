<x-layouts.layout title="crear nuevo post" meta- description="Formulario para crear un nuevo blog post">

    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf {{-- proteccion token  --}}

        @include('posts.form-fields')

        <button type="submit">Enviar</button>
    </form>

    <br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.layout>
