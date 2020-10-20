@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')


        <h1 class="text-center text-break">About us </h1>
        <hr>
        <img src="{{ asset('images/AboutT2_1920x400.jpg') }}" class="container-fluid d-flex align-items-center justify-content-center" alt="">

<div class="container">
<div class="row">
    <div class="col">        
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
                    <img src="{{ asset($block->imagepath) }}" class="img-fluid" style="height: 200px;"  alt="">
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
            <div class="row mt-3">  
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et quasi ipsam nemo accusamus, consequatur neque veritatis consectetur ex dolore praesentium soluta, similique id possimus quo facere? Harum quae error voluptates, ducimus repudiandae, corrupti exercitationem blanditiis debitis amet ut quod, mollitia delectus. Quibusdam officia dolor consequuntur obcaecati minus quia voluptates doloremque, sed est temporibus eum cupiditate dignissimos reiciendis suscipit eos placeat adipisci eligendi labore doloribus velit quis totam accusantium harum! Vel similique assumenda error consequatur praesentium rem quae iusto. Voluptatum temporibus quos autem deleniti, sed modi quasi officia atque? Eius voluptatem at animi, earum quod aliquam autem pariatur soluta quam nulla.</p>  
            
            @foreach($block as $blocktitle)

                @if ($blocktitle -> optionid == 1 && $blocktitle -> imagepath !=='' )
                    
                    <div class="col-12 text-center mt-3">
                        <h3>{{$blocktitle -> title}}</h3>
                    </div>
                    <div class="col-12 text-center">
                        <img src="{{ asset($blocktitle->imagepath) }}" class="img-fluid rounded mx-auto d-block" style="height: 500px;"  alt="">
                    </div>
                    <div class="col-12">
                    <p class="lead text-left">{{ $blocktitle -> content }}</p>
                    </div>
                    {!! Form::open(['route'=>['admin.destroy', $blocktitle->id]]) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}

                    <a href="{{ url('admin/'.$blocktitle->id.'/edit') }}" class="btn btn-success">Edit</a>

                    @continue

                @endif

            @endforeach
            </div>
 
    </div>
</div>
</div>    
@endsection

@section('footer')
    @parent
@endsection
