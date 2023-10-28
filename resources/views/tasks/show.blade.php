@extends('layouts.main')
@section('content')


            <div class="cards text-center car">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$task->name}}({{$task->status->name}})</h5>
                    <p class="card-text">{{$task->preview}}</p>
                    <img src="{{asset($task->image)}}"/>
                    <a href="{{route('tasks.edit',['task'=>$task->id])}}" class="btn btn-primary">Изменить задачу</a>
                </div>
                <div class="card-footer text-body-secondary">
                    Список работающих над задачей
                    <ul>
                        <li>Кто то</li>
                        <li>Еще кто-то</li>
                        <li>Допустим еще 1</li>
                        <li>Три на смерть,четыре прекрасно</li>
                    </ul>
                </div>
                @if($task->status_id==1||$task->status_id==2)
                <form action="{{route('comments.store',['task'=>$task->id])}}" method="post" class="mb-4" enctype="multipart/form-data">
                   @csrf
                    <textarea id ="userComment" rows="4" cols="50" name="comment"> тута комментарий</textarea>

                    <br><br>
                    <input type="submit"  value="Submit">
                </form>
                @else
                    <p>А уже всё</p>
                @endif
                <div>

                    @foreach($task->comments as $comment)

                        <p>{{$comment->comment}}</p>
                    @endforeach

                </div>

@endsection
