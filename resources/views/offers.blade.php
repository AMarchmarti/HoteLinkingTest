@extends('layouts.app')


@section('content')
<main role="main">
  {!! Form::open(['action' => 'OffersController@store', 'method' => 'POST']) !!}
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="http://www.viajaenmimochila.com/wp-content/uploads/2015/12/unnamed-7-1024x683.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-text" id="title" name="title">Fiordos y la Aurora boreal</h4>
                <p class="card-text" id="body" name="body">Canjeando este cupón obtendrás un 30% de descuento en un viaje preparado para poder sentir en tus pieles la tierra de los vikingos.
                    Con este viaje entra el vuelo, la estancia y además una visita guiada por las tierras del norte.  Abriguense bien!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    {{ Form::submit('Canjear', ['class' => 'btn btn-sm btn-outline-secondary']) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="http://images2.fanpop.com/image/photos/9500000/Rohan-rohan-9573992-950-401.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="https://media-cdn.tripadvisor.com/media/photo-s/12/47/97/ec/parc-disneyland.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://www.viajejet.com/wp-content/viajes/labadee-la-zona-turistica-de-haiti-1440x810.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="https://www.viajejet.com/wp-content/viajes/Aerol%C3%ADneas-alrededor-del-mundo.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="https://www.enlacejudio.com/wp-content/uploads/2017/02/sitios-romantico-Israel-enlace-judio-1485.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
    </div>
{!! Form::close() !!}
</main>
@endsection