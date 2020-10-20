@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')
<div class="container">
    <div class="row">
    <div class="col">
    
    {!! Form::model($block, ['method'=>'put', 'files'=>true ,'route'=>['admin.update', $block->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('optionid', 'Select Option') !!}
        {!! Form::select('optionid', $options, $block->optionid, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title', 'Edit title') !!}
        {!! Form::text('title', $block->title, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('_content', 'Edit content') !!}
        {!! Form::textarea('content', $block->content, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('imagepath', 'Edit image') !!}
        {!! Form::file('imagepath', ['class'=>'form-control']) !!}
    </div>
    
        {!! Form::submit('Save edit block', ['class'=>'btn btn-primary']) !!}
                
    {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection

@section('footer')
    @parent
@endsection