@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')


        <h1 class="text-center text-break display-4">Search results</h1>
        <hr>

<div class="container">
    <div class="row">     
        <div class="col-0 col-md-2"></div>
        <div class="col-12 col-md-8">
        @foreach($title as $blocktitle)
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset($blocktitle->imagepath) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$blocktitle -> title}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{$blocktitle -> updated_at}}</h6>
                        <p class="card-text">
                        {{ $blocktitle -> content }}
                        </p>
                        @if (Session::get('name'))
                        <a href="{{ url('about/'.$blocktitle->id.'/edit') }}" class="btn btn-danger mr-1">Delete</a>
                        <a href="{{ url('admin/'.$blocktitle->id.'/edit') }}" class="btn btn-success">Edit</a>
                        @else
                        @endif
                    </div>
                </div>
        @endforeach
        </div>
        <div class="col-0 col-md-2"></div>
    </div>
</div>

@endsection

@section('footer')
    @parent
@endsection