@extends('layouts.app')

@section('content')

　　　　<h1>id = {{ $task->id }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>user_id</th>
            <td>{{ $task->user_id }}</td>
        </tr>
        <tr>
            <th>status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

<!-- ここにページ毎のコンテンツを書く -->
　　　　{!! link_to_route('tasks.edit', '編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
　　　　
　　　　{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
@endsection