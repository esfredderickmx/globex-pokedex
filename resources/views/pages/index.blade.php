@extends('components.layouts.app')

@section('title', 'Inicio')

@section('content')
  <div class="ui inverted vertical center aligned segment" id="nav-section">
    @include('components.partials.navbar-embedded')
    <div class="ui text container">
      <h1 class="ui inverted header">Imagina tu aventura Pokémon perfecta</h1>
      <h2>Explora, descubre, ¡conviértete en maestro!</h2>
      <div class="ui huge red button">Adelante<i class="right arrow icon"></i></div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="seven wide column">
          <h3 class="ui header">Explora el mundo Pokémon</h3>
          <p>Explora la información detallada de todos los Pokémon, desde movimientos hasta estadísticas, con datos actualizados.</p>
          <a class="ui big black button">Explorar Pokédex</a>
        </div>
        <div class="nine wide column">
          <img src="{{asset('images/home-pokedex.png')}}" class="ui centered big bordered rounded image">
        </div>
      </div>
    </div>
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="nine wide tablet computer only column">
          <img src="{{asset('images/home-teams.png')}}" class="ui centered big bordered rounded image">
        </div>
        <div class="seven wide column">
          <h3 class="ui header">Crea tus propios equipos</h3>
          <p>Diseña estrategias ganadoras con nuestra herramienta de creación de equipos Pokémon. ¡Domina a tus oponentes!</p>
          <a class="ui big black button">Crear equipos</a>
        </div>
        <div class="nine wide mobile only column">
          <img src="{{asset('images/home-teams.png')}}" class="ui centered big bordered rounded image">
        </div>
      </div>
    </div>
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="seven wide column">
          <h3 class="ui header">Calculadoras útiles</h3>
          <p>Facilitamos tu experiencia con calculadoras, como la de eclosión de huevos, para que aproveches al máximo tus aventuras.</p>
          <a class="ui big black button">Usar calculadoras</a>
        </div>
        <div class="nine wide column">
          <img src="{{asset('images/home-calculators.png')}}" class="ui centered big bordered rounded image">
        </div>
      </div>
    </div>
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="nine wide tablet computer only column">
          <img src="{{asset('images/home-community.png')}}" class="ui centered big bordered rounded image">
        </div>
        <div class="seven wide column">
          <h3 class="ui header">Comunidad Pokémon</h3>
          <p>Conéctate con otros entrenadores, comparte consejos y descubre historias emocionantes en nuestra comunidad.</p>
          <a class="ui big black button">Explorar comunidad</a>
        </div>
        <div class="nine wide mobile only column">
          <img src="{{asset('images/home-community.png')}}" class="ui centered big bordered rounded image">
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"Globex es mi fuente esencial para planificar mis equipos y estrategias. ¡Imprescindible para cualquier entrenador!"</h3>
          <p>
            <img src="{{asset('vectors/app-logo.svg')}}" class="ui avatar image"> <b>Alejandro A.</b> Entrenador Pokémon
          </p>
        </div>
        <div class="column">
          <h3>"Las calculadoras de este sitio me han ahorrado horas de juego. ¡Me encanta!"</h3>
          <p>
            <img src="{{asset('vectors/app-logo.svg')}}" class="ui avatar image"> <b>Angel A.</b> Fanático Pokémon
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Nuevas formas en Pokémon Escarlata y Púrpura</h3>
      <p>Descubre las emocionantes formas y variantes que llegan a Paldea en Pokémon Escarlata y Púrpura. En este artículo, exploraremos en detalle las transformaciones que tus Pokémon favoritos han experimentado en esta región tan única. Aprende cómo estas nuevas formas afectarán a tu equipo y prepárate para enfrentarte a desafíos aún mayores. ¡No te pierdas esta guía completa sobre Paldea!</p>
      <a class="ui large black button">Me interesa</a>
      <h4 class="ui horizontal header divider">
        <a href="#">NOTICIAS Y ACTUALIZACIONES</a>
      </h4>
      <h3 class="ui header">¿Aún no logras atrapar ningún legendario?</h3>
      <p>¿Necesitas ayuda al atrapar Pokémon legendarios? En nuestro artículo, te proporcionamos consejos y estrategias detalladas para conseguir hacerte con todos. Desde conocer las ubicaciones exactas hasta preparar el equipo adecuado, te guiaremos paso a paso en tu búsqueda para capturar a estas criaturas legendarias. Domina el arte de la captura y conviértete en un maestro de los Pokémon legendarios. ¡No te pierdas esta oportunidad única!</p>
      <a class="ui large black button">Saber más</a>
    </div>
  </div>
@endsection