@extends('layouts.app')

@section('content')
<main role="main" class="container">
        <?php
        $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90)) 
        . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90); 
        ?>
        <div class="starter-template">
          <h1>Felicitaciones, {{ Auth::user()->name }}</h1>
          <p class="lead">Ha adquirido este código promocional, recuerde que este código es único.<br> Si desea canjearlo solo tiene que escribirlo aqui y tendrá su maravillosa oferta.</p>
          <h3>{{ $random_string }}</h3>
        </div>
        <form action="OffersController@store" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">code</label>
                    <input type="Código" class="form-control" id="inputPassword2" placeholder="Código">
                </div>
                <button type="submit" class="btn btn-primary mb-2"
                    onclick="alert('Código canjeado, revise su E-Mail')">Canjear Código</button>
      </main><!-- /.container -->
@endsection