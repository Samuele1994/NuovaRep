@extends('layouts.app')

@section('title','Libri')

@section('content')

    <h1>{{$titolo}}</h1>
    <main>
        @foreach ($libri as $id => $libro)
        <x-card :id="$id" :titolo="$libro['titolo']"/>
        @endforeach
    </main>

@endsection
