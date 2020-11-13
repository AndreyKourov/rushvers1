@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')


        <h1 class="text-center text-break display-4">About us</h1>
        <hr>
        <img src="{{ asset('images/AboutT2_1920x400.jpg') }}" style="margin: 0px; padding: 0px;" class="container-fluid d-flex align-items-center justify-content-center" alt="">

<div class="container">
    <div class="row">
        <div class="col">        

            <div class="row mt-3">  
            <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et quasi ipsam nemo accusamus, consequatur neque veritatis consectetur ex dolore praesentium soluta, similique id possimus quo facere? Harum quae error voluptates, ducimus repudiandae, corrupti exercitationem blanditiis debitis amet ut quod, mollitia delectus. Quibusdam officia dolor consequuntur obcaecati minus quia voluptates doloremque, sed est temporibus eum cupiditate dignissimos reiciendis suscipit eos placeat adipisci eligendi labore doloribus velit quis totam accusantium harum! Vel similique assumenda error consequatur praesentium rem quae iusto. Voluptatum temporibus quos autem deleniti, sed modi quasi officia atque? Eius voluptatem at animi, earum quod aliquam autem pariatur soluta quam nulla.</p>  
            
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-8">
            @foreach($block as $blocktitle)
                @if ($blocktitle -> optionid == 1 && $blocktitle -> imagepath !=='' )
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
                @continue
                @endif
            @endforeach
            </div>
            <div class="col-0 col-md-2"></div>

            </div>
 
        </div>
    </div>
</div>

{{-- 
            @foreach($block as $blocktitle)
                @if ($blocktitle -> optionid == 1 && $blocktitle -> imagepath !=='' )
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
                    <a href="{{ url('about/'.$blocktitle->id.'/edit') }}" class="btn btn-danger mr-1">Delete</a>
                    <a href="{{ url('admin/'.$blocktitle->id.'/edit') }}" class="btn btn-success">Edit</a>
                    @else
                    @endif
                    </div>
                    @continue
                @endif
            @endforeach
            --}}




{{--
            {{ $block->optionid }} 
        @foreach($option as $option)
            <p>{{ $option -> optionname }}</p>
            <p>{{ $option -> id }}</p>
        @endforeach
         
                @if( $blocktitle -> optionid == 1)
                    <h3>{{$blocktitle -> title}}</h3>
                    @continue
                @endif

                @if( $blocktitle -> imagepath !=='')
                    <img src="{{ asset($block->imagepath) }}" class="img-fluid" style="height: 20%;"  alt="">
                    @continue
                @endif

                @if( $blocktitle -> optionid == 1)
                    <p class="lead">{{ $blocktitle -> content }}</p>
                    @continue
                @endif
                
                {!! Form::open(['route'=>['admin.destroy', $block->id]]) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                {!! Form::close() !!}

                <a href="{{ url('admin/'.$block->id.'/edit') }}" class="btn btn-success">Edit</a>
                
--}}

{{-- 
                    {!! Form::open(['route'=>['admin.destroy', $blocktitle->id]]) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>

                    {!! Form::open( ['method'=>'put', 'class'=>'form', 'action'=>['AdminController@destroyabout', $blocktitle->id]]) !!}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#btndel">Delete {{$blocktitle->id}}</button>

                    <div class="modal fade" id="btndel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">                    
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::text('password', '', ['class'=>'form-control col-md-12', 'placeholder'=>'Enter your password']) !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete {{$blocktitle->id}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}      
--}}
{{-- 
    <a href="{{ url('about/'.$blocktitle->id.'/edit') }}" class="btn btn-danger mr-1">Delete</a>
    <a href="{{ url('about/'.$blocktitle->id.'/edit2edit') }}" class="btn btn-success">Edit</a>
--}}

@endsection

@section('footer')
    @parent
@endsection
