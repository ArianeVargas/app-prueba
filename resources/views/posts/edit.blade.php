<x-layouts.layout :title="$post -> title" meta- description="Home meta description">

    <h1>Formulario de edicion</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf {{-- proteccion token  --}} @method('PATCH') {{-- NOS PERMITE USAR EL METODO PATCH DESDE POST --}}

        @include('posts.form-fields')

        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.layout>
