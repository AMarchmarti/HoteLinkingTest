@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                    <div class="panel-header">Promotions</div>
    
                    <div class="panel-body">
                        <h4>Aquí tienes los cupones canjeados</h4>
                        <table class="table table-striped">
                            <tr>
                                <th>Ofertas seleccionadas</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($promotions as $promotion)
                                <tr>
                                    <th>{{ $offerts->title }}</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection