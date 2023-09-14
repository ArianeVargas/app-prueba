{{--
est es la forma con template inherentance
@extends('layouts.app')

@section('title','home')

@section('meta-description','home description')

@section('content')
<h2>Bienvenidos a Home</h2>
@endsection

--}}


{{-- esta es la forma con components --}}
{{-- @component('components.layout')
<h2>Bienvenidos a Home</h2>
@endcomponent --}}


<x-layouts.layout title="Home" meta- description="Home meta description">
    {{-- <x-slot name="title">
        Home title
    </x-slot> --}}

    <h2>Bienvenidos a Home</h2>
</x-layouts.layout>


