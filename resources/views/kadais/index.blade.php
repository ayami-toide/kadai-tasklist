@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

     @if (count($kadais) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kadais as $kadai)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $kadai->id, ['id' => $kadai->id]) !!}</td>
                        <td>{{ $kadai->title }}</td>
                        <td>{{ $kadai->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}
@endsection