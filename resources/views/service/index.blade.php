@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

    <h1 class="text-center text-break display-4">Service</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-8">
            
            @foreach($block as $blocktitle)
                @if ($blocktitle -> optionid == 2 && $blocktitle -> imagepath !=='' )
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset($blocktitle->imagepath) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$blocktitle -> title}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{$blocktitle -> updated_at}}</h6>
                        <p class="card-text">
                        {{ $blocktitle -> content }}
                        </p>
                        @if (Session::get('name'))
                        <a href="{{ url('service/'.$blocktitle->id.'/deledit') }}" class="btn btn-danger">Delete</a>
                        <a href="{{ url('service/'.$blocktitle->id.'/edit') }}" class="btn btn-success">Edit</a>
                        @else
                        @endif
                    </div>
                </div>

                @continue
                @endif
            @endforeach
            </div>
            <div class="col-0 col-md-2"></div>
        </div>
    </div>


    {{--
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
                    @if (Session::get('name'))
                    <a href="{{ url('service/'.$blocktitle->id.'/deledit') }}" class="btn btn-danger">Delete</a>
                    <a href="{{ url('service/'.$blocktitle->id.'/edit') }}" class="btn btn-success">Edit</a>
                    @else
                    @endif
                    </div>
                @continue
                @endif
            @endforeach
            --}}
    @endsection

@section('footer')
    @parent
@endsection