@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

    <h1 class="text-center text-break display-4">Service</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
            @foreach($block as $blocktitle)
                @if ($blocktitle -> optionid == 2 && $blocktitle -> imagepath !=='' )
                    <div class="col-12 text-center mt-3">
                        <h3>{{$blocktitle -> title}}</h3>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <img src="{{ asset($blocktitle->imagepath) }}" class="img-fluid rounded mx-auto d-block" style="height: 500px; object-fit:cover;"  alt="">
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <p class="">{{ $blocktitle -> content }}</p>
                    </div>
                    <div class="col-12 mt-3 text-center">
                    <a href="{{ url('service/'.$blocktitle->id.'/deledit') }}" class="btn btn-danger">Delete</a>
                    <a href="{{ url('service/'.$blocktitle->id.'/idedit') }}" class="btn btn-success">Edit</a>
                    </div>
                @continue
                @endif
            @endforeach
            </div>
        </div>
    </div>
    @endsection

@section('footer')
    @parent
@endsection