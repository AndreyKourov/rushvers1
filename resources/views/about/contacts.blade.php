@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

        <h1 class="text-center text-break display-4">Contacts</h1>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-2"></div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><strong><span class="text-success">Address: </span></strong>11 Barron Pl, Bossley 2176, Australia</p>
                            <p class="card-text"><strong><span class="text-success">Schedule: </span></strong>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday: 10:00 - 20:00. Sunday: output</p>
                            <p class="card-text"><strong><span class="text-success">Phone: </span></strong>+7 232 132 2323</p>
                            
                            <div class="card-text">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abd564a338ede3a64b4050d35df49a3d684018129a7d9b7f33abc4965a1030198&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>
                        </div>
                    </div>
                <div class="col-2 col-md-2"></div>
            </div>
        </div>
        

{{-- 
    <div class="col-2 col-md-2"></div>
                <div class="card col-8 col-md-8">
--}}

@endsection

@section('footer')
    @parent
@endsection