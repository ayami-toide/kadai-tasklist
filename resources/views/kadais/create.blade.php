@extends（ 'layouts.app'）

@section（ 'content'）


<h1>メッセージ新しい作成ページ</h1>

    {!! Form :: model（$kadai、['route' => 'kadais.store']）!!}

        {!! Form :: label（ 'content'、 'メッセージ：'）!!}
        {!! Form :: text（ 'content'）!!}

        {!! Form :: submit（ '投稿'）!!}

    {!! Form :: close（）!!}


@endsection
