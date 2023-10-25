@extends('layouts.main')


@section('content')
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <h1 class="mb-4">Список задач
        <a href="{{route('tasks.create')}}" class="btn-primary">Добавить задачу</a>
    </h1>
    <div class="row">
        @foreach($tasks as $task)
        <div class="col-3">
            <div class="card mb-4">
                <img src="{{asset($task->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$task->name}}({{$task->status->name}})</h5>
                    <p class="card-text">{{$task->preview}}</p>
                    <a href="{{route('tasks.show', ['task'=>$task->id])}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="commentForm">
        <form action="{{route('comments.store')}}" method="post" class="mb-4" enctype="multipart/form-data">
            @csrf
            <textarea rows="4" cols="50" name="comment" class="textArea"> тута комментарий</textarea>
            <br><br>
            <input type="submit"  value="Submit">
            @error('comment')
            <p style="color:red;">{{$message}}</p>
            @enderror
            <select multiple name="select" class="textArea">
                @foreach($tasks as $task)
                <option value="{{$task->id}}">{{$task->name}}({{$task->status->name}})</option>
                @endforeach
            </select>
            @error('select')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </form>

    </div>

@endsection
