@extends('layouts.app')

@section('content')

    <h1>id = {{ $kadai->id }} のメッセージ詳細ページ</h1>

<table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $kadai->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $kadai->status }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $kadai->content }}</td>
        </tr>
    </table>
   

   {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $kadai->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($kadai, ['route' => ['tasks.destroy', $kadai->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsections