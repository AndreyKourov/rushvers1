@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')
{{--    --}}
<h1 class="text-center mb-3 display-4">Edit</h1>
<hr>
<div class="container" style="height: 60vh;">

{!! Form::model($block, ['method'=>'put', 'files'=>true ,'action'=>['ServiceController@idupdate', $block->id]]) !!}

    <div class="form-group row">
        {!! Form::label('login', 'Login', ['class'=>'col-md-2']) !!}
        {!! Form::text('login', '', ['class'=>'form-control col-md-10', 'placeholder'=>'Enter your login']) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('password', 'Password', ['class'=>'col-md-2']) !!}
        {!! Form::text('password', '', ['class'=>'form-control col-md-10', 'placeholder'=>'Enter your password']) !!}
    </div>
     
    <button type="submit" class="btn btn-success">Edit</button>

{!! Form::close() !!}

</div>
@endsection

@section('footer')
    @parent
@endsection