<div id="recup"  class="login-wrap">
  <div id="_AJAX_LOGIN_">

  </div>
<div class="login-html">
<label for="tab-1" class="tab">Iniciar Sesión</label>
<div class="login-form">
  <div class="sign-in-htm">
  <form onkeypress="return runScriptLogin(event)">
    <div class="group">
      <label for="user" class="label">Usuario</label><br>
      <input id="usuario" name="usuario" type="text" class="int">
    </div>
    <div class="group">
      <label for="pass" class="label">Contraseña</label><br>
      <input id="contra1" name="contra1" type="password" class="int" data-type="password">
    </div>
    <div class="group">
      <label><input type="checkbox" value="1" id="recordar" checked>Recordarme</label>
    </div>
    <div class="group">
      <button type="button" class="link animated fadeInUp delay-1s" onclick="goLogin()"><span ></span> Iniciar Sesión</button>
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

<script src="View/app/js/login.js"></script>
