@extends('layouts.app')

@section('content')

    <h1>id: {{ $kadai->id }} のメッセージ編集ページ</h1>
 <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

    {!! Form::model($kadai, ['route' => ['tasks.update', $kadai->id], 'method' => 'put']) !!}

        <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
        
                    
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
    
       </div>
</div>
@endsection




