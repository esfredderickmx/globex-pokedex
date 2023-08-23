
<div class="ui grid">
  <div class="ui mobile only row container">
    <div class="ui dropdown icon item">
      <i class="bars icon"></i>
      <div class="menu">
        <a class="item"><i class="home icon"></i>Inicio</a>
        <div class="divider"></div>
        <a class="item" href="#"><i class="book icon"></i>Pokédex</a>
        <a class="item" href="#"><i class="hands helping icon"></i>Equipos</a>
        <a class="item" href="#"><i class="calculator icon"></i>Calculadoras</a>
      </div>
    </div>
  </div>
  <div class="tablet computer only row">
    <a class="item" href="#">Inicio</a>
    <a class="item" href="#">Pokédex</a>
    <a class="item" href="#">Equipos</a>
    <a class="item" href="#">Calculadoras</a>
  </div>
</div>
<div class="right menu">
  @auth
    <div class="ui dropdown item">
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item"><i class="user icon outline"></i>Perfil de usuario</a>
        <div class="divider"></div>
        <a class="item"><i class="door open alternate icon"></i>Cerrar sesión</a>
      </div>
    </div>
  @endauth
  @guest
    <div class="item">
      <div class="ui inverted button">¡Entra o únete!</div>
    </div>
  @endguest
</div>