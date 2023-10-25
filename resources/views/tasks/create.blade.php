@extends('layouts.main')

@section('title', 'Создание задачи')

@section('content')
    <form action="{{route('tasks.store')}}" method="post" class="mb-4" enctype="multipart/form-data">
        @csrf
        <label for="text">Введите название задачи</label>
        <input type="text" id="text"  name="name"/>
        @error('name')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br/>
        <label for="smart">Краткое описание задачи</label>
        <input type="text" name="preview" id="smart" />
        @error('preview')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br/>
        <label for="full">Полное описание задачи</label>
        <textarea name="text" id="full" cols="23" rows="20"></textarea>
        @error('text')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br/>
        <input type="checkbox" name="priority" value="1"/> Высокий приоритет
        @error('priority')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br/>
        <input type="file" name="file" />
        <button>Сохранить</button>
    </form>
@endsection
