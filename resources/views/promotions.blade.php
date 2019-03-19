@extends('layouts.app')

@section('content')
<main role="main" class="container">
        {!! Form::open(['action' => 'OffersController@store', 'method' => 'POST']) !!}
        <?php
        $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90)) 
        . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90); 
        ?>

        <div class="starter-template">
          <h1>Felicitaciones, </h1>
          <p class="lead">Ha adquirido este código promocional, recuerde que este código es único.<br> Si desea canjearlo solo tiene que escribirlo aqui y tendrá su maravillosa oferta.</p>
          <h3>{{ $random_string }}</h3>
        </div>
        
            <div class="form-grup">
                {{ Form::label('code', 'Código aquí') }}
                {{ Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Código']) }}
            </div>
            {{ Form::submit('Canjear', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
      </main><!-- /.container -->
@endsection