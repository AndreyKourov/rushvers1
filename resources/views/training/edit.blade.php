@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')
<h1 class="text-center mb-3 display-4">Edit</h1>
<hr>
<div class="container">
    <!-- <div class="row">
    <div class="col">
    </div>
    </div> -->
    
    {!! Form::model($block, ['method'=>'put', 'files'=>true ,'route'=>['training.update', $block->id]]) !!}
    
    <div class="form-group row">
        {!! Form::label('optionid', 'Select Option', ['class'=>'col-md-2']) !!}
        {!! Form::select('optionid', $options, $block->optionid, ['class'=>'form-control col-md-10']) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('title', 'Edit title', ['class'=>'col-md-2']) !!}
        {!! Form::text('title', $block->title, ['class'=>'form-control col-md-10']) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('content', 'Edit content', ['class'=>'col-md-2']) !!}
        {!! Form::textarea('content', $block->content, ['class'=>'form-control col-md-10']) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('imagepath', 'Edit image', ['class'=>'col-md-2']) !!}
        {!! Form::file('imagepath', ['class'=>'form-control col-md-10']) !!}
    </div>
    <div class="form-group row">
    <div class="col-12 col-md-2">Current image</div>
    <div class="card col-12 col-md-8">
        <img src="{{asset($block->imagepath)}}" alt="" class="card-img-top">
    </div>
    <div class="col-12 col-md-2"></div>
    </div>
    
        {!! Form::submit('Save edit block', ['class'=>'btn btn-success']) !!}
                
    {!! Form::close() !!}
    
</div>
@endsection

@section('footer')
    @parent
@endsection