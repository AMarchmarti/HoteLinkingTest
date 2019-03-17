@extends('layouts.app')


@section('content')
    <p>Aquí encontrará diferentes ofertas que le puedan interesar, ya sean noches gratuitas, descuentos para hoteles, entre otros...</p>
    @if(count ($offers) > 0)
        @foreach($offers as $offer)
            <div class="wll">
                <h3>{{ $offer->Offers_name }}</h3>
                <p>{{ $offer->description}}</p>
            </div>
        @endforeach
    @endif
@endsection