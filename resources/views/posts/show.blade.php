<x-layouts.layout :title="$post -> title" meta- description="Home meta description">

    <h1>{{$post -> title}}</h1>
    <h1>{{$post -> body}}</h1>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.layout>
