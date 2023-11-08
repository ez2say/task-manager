@extends('layouts.main')

@section('title', 'Тэги')

@section('content')

    <div class="cards text-center car">
        <div class="card-header">
            <h1>Список тегов<h1>
        </div>
        <div class="card-body">
            <ul>
            @foreach($tags as $tag)
                <li>{{$tag->name, $tag->color}}</li>
            @endforeach
            </ul>

            <button>Сохранить</button>
        </div>
@endsection
