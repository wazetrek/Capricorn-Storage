<div id="recup"  class="login-wrap">
<div class="login-html">
<label for="tab-1" class="tab">Iniciar Sesión</label>
<div class="login-form">
  <div class="sign-in-htm">
  <form method="post" action="../../ADMIN/Controlador/verificar_login.php" onsubmit="return validacionUno()">
    <div class="group">
      <label for="user" class="label">Usuario</label><br>
      <input id="usuario" name="usuario" type="text" class="int">
    </div>
    <div class="group">
      <label for="pass" class="label">Contraseña</label><br>
      <input id="contra1" name="contra1" type="password" class="int" data-type="password">
    </div>
    <div class="group">
      <input id="sesion" type="submit" class="link animated fadeInUp delay-1s" value="Iniciar Sesión">
    </div>
    <div class="hr"></div>
    <div class="foot-lnk">
      <a id="contra" href="#">¿Olvidaste la contraseña?</a>
    </div>
    </form>
  </div>

  </div>
  </div>
</div>
