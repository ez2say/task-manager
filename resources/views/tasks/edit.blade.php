@extends('layouts.main')

@section('title', 'Создание задачи')

@section('content')
    <form action="{{route('tasks.store')}}" method="post" class="mb-4" enctype="multipart/form-data">
        @csrf
        <div class="cards text-center car">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <label for="text">Введите название задачи</label>
                <input type="text" id="text"  name="name" placeholder="{{$task->name}}({{$task->status->name}})"/>
                    <br/>
                @error('name')
                <p style="color:red;">{{$message}}</p>
                @enderror
                <label for="smart">Краткое описание задачи</label>
                <input type="text" name="preview" id="smart" placeholder="{{$task->preview}}"/>
                     <br/>
                @error('preview')
                <p style="color:red;">{{$message}}</p>
                @enderror
                <label for="full">Полное описание задачи</label>
                <textarea name="text" id="full" cols="23" rows="20" placeholder="{{$task->text}}"></textarea>
                @error('text')
                <p style="color:red;">{{$message}}</p>
                @enderror
                <br/>
                <input type="file" name="file" placeholder="{{asset($task->image)}}"/>
                <br/>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="priority" value="checkbox" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Высокий приоритет
                    </label>
                </div>
                <input type="checkbox" name="priority" value="1"/> Высокий приоритет
                @error('priority')
                <p style="color:red;">{{$message}}</p>
                @enderror
                <br/>
                <button>Сохранить</button>
            </div>
    </form>
@endsection
