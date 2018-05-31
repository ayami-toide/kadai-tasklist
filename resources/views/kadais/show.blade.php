@extends('layouts.app')

@section('content')

    <h1>id = {{ $kadai->id }} のメッセージ詳細ページ</h1>

    <p>タイトル: {{ $kadai->status }}</p>
    <p>メッセージ: {{ $kadai->content }}</p>

    {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $kadai->id]) !!}

    {!! Form::model($kadai, ['route' => ['tasks.destroy', $kadai->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection