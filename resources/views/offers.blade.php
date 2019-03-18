@extends('layouts.app')


@section('content')
    <p>Aquí encontrará diferentes ofertas que le puedan interesar, ya sean noches gratuitas, descuentos para hoteles, entre otros...</p>
    {!! Form::open(['action' => 'PromotionsController@store', 'method' => 'POST']) !!}
    @if(count ($offers) > 0)
        
            
            @foreach($offers as $offer)
                <div class="form-group">
                    {{ Form::label('title', $offer->Offers_name)}}
                    {{ Form::label('body', $offer->description)}}
                </div>
                {{ Form::submit('Canjear Cupón', ['class' => 'btn  btn-primary']) }}
          
        @endforeach
    @endif
    { !!Form::close()!!}
@endsection