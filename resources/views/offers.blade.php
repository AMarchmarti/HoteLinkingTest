@extends('layouts.app')

<?php
        function alert(){
         $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90)) 
         . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90); 
         $alerta = 'El Código es: '.$random_string;
         return $alerta;}
         ?>
@section('content')
<main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="http://www.viajaenmimochila.com/wp-content/uploads/2015/12/unnamed-7-1024x683.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-text" id="title" for="name">Fiordos y la Aurora boreal</h4>
                <p class="card-text" id="body" for="description">Canjeando este cupón obtendrás un 30% de descuento en un viaje preparado para poder sentir en tus pieles la tierra de los vikingos.
                    Con este viaje entra el vuelo, la estancia y además una visita guiada por las tierras del norte.  Abriguense bien!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="http://images2.fanpop.com/image/photos/9500000/Rohan-rohan-9573992-950-401.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-text" id="title" name="title">La Tierra Media</h4>
                <p class="card-text" id="body" name="body">Canjeando este cupón obtendrás un 15% de descuento en un viaje para ver la Tierra dónde se rodo el Señor de Los Anillos, además incluye, 
                    con todos los gastos pagados, un tour por las zonas dónde se rodaron las películas. Imagínate estar en la Comarca o ver las praderas de Rohan. 
                    Si eres un fan de estas magnífica saga no lo dudes, aprovecha esta oportunidad.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/12/47/97/ec/parc-disneyland.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-text" id="title" name="title">Disneyland</h4>
                <p class="card-text" id="body" name="body">Su nombre lo dice todo, si quiere viajar a Disneyland necesitará este cupón con un 50% en todo el parque. 
                    A que esta esperando para ver las maravillosas atracciones, con sus respectivas zonas, Star Wars, Marvel, entre muchas otras. Un destino maravilloso 
                    para pasarlo en familia.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                 <img src="https://www.viajejet.com/wp-content/viajes/Aerol%C3%ADneas-alrededor-del-mundo.jpg"class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-text" id="title" name="title">Múltiples Destinos</h4>
                    <p class="card-text" id="body" name="body">Con este cupón y adquiriendo dos destinos, CUALESQUIERA, recibirá un destino adicional sin coste alguno. 
                        Ya no hay excusas para no viajar!</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="https://www.viajejet.com/wp-content/viajes/labadee-la-zona-turistica-de-haiti-1440x810.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-text" id="title" name="title">2 Semanas en Haití</h4>
                <p class="card-text" id="body" name="body">Canjeando este cupón entrarás en el sorteo de un magnifico viaje con todos los gastos pagados a Haití. 
                    Se alojara en hoteles de 3 y 4 estrellas durante su estancia recorriendo sus maravillosas playas y disfrutando de su magnífico arrecífe.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="https://www.enlacejudio.com/wp-content/uploads/2017/02/sitios-romantico-Israel-enlace-judio-1485.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                    <h4 class="card-text" id="title" name="title">Escapada Romántica</h4>
                    <p class="card-text" id="body" name="body">Dos noche de ensueño para pasarlo con su pareja con todos los gastos pagados en la ciudad que prefiráis entre estas: Paris, Roma, Sevilla y Praga. 
                        Dale una increíble sorpresa a su pareja o una pequeña escapadita para salir del estrés y monotonía del día a día</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="http://localhost/HoteLinkingTest/public/promotions" role="button">Seleccionar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
    </div>
</main>
@endsection