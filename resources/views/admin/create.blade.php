@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')
<div class="container">
<h1>{{$page}}</h1>

@if(session('errors'))
    <div class='alert alert-danger'>
        @foreach(session('errors') -> all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif

@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

{!! Form::model($block, ['action'=>'AdminController@store' , 'method'=>'post', 'files'=>true, 'class'=>'form']) !!}

<div class="form-group row"> 

{{--
    {!! Form::label('optionid', 'Option Name', ['class'=>'col-md-2']) !!}
    {!! Form::select('optionid', $users, ['class'=>'col-md-8']) !!}
--}}    

    {!! Form::label('optionid', 'Select Option', ['class'=>'col-md-2']) !!}     
    {!! Form::select('optionid', $options, $block->optionid, ['class'=>'form-control col-md-10']) !!}
    
</div>    

<div class="form-group row">
    {!! Form::label('title', 'Title', ['class'=>'col-md-2']) !!}
    {!! Form::text('title', '', ['class'=>'form-control col-md-10', 'placeholder'=>'Enter title name']) !!}
</div>

<div class="form-group row">
    {!! Form::label('block_content', 'Add content', ['class'=>'col-md-2']) !!}
    {!! Form::textarea('block_content', '', ['class'=>'col-md-10']) !!}
</div>

<div class="form-group row">
    {!! Form::label('imagepath', 'Add Image', ['class'=>'col-md-2']) !!}
    {!! Form::file('imagepath', ['class'=>'form-control col-md-10']) !!}
</div>


<button type="submit" class="btn btn-primary">Add Block</button>
{!! Form::close() !!}
</div>
@endsection    