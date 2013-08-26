<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/login.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/login.js'); ?>"></script>
  </head>
  <body>
    <div id="visa_message">
      <ul>
        <li><span>Si requieren Visa para ingresar a México:</span>
          <ul>
            <li>Bolivia</li>
            <li>Ecuador</li>
            <li>El Salvador</li>
            <li>Guatemala</li>
            <li>Honduras</li>
            <li>Nicaragua</li>
            <li>Dominicana</li>
          </ul>
        </li>
        <li><span>No requieren Visa para ingresar a México:</span>
          <ul>
            <li>Argentina</li>
            <li>Aruba</li>
            <li>Colombia</li>
            <li>Costa Rica</li>
            <li>Chile</li>
            <li>Panamá</li>
            <li>Paraguay</li>
            <li>Perú</li>
            <li>Uruguay</li>
            <li>USA</li>
            <li>Venezuela</li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" />
        </a>
      </header>
      <section>
        <p class="login_message">
          Recuerda que debes tener a la mano los datos de tu Pasaporte, <span id="visa_terms">Visa*</span>, email y los adicionales para iniciar el registro.
          <br/>
          Teclea tu ID Herbalife &copy;
        </p>
        <form action="<?php echo base_url('main/sign_in'); ?>" method="post" id="login">
          <div>
            <input type="text" name="id" value="" id="id" placeholder="ID HERBALIFE" />
          </div>
          <div>
            <input type="checkbox" id="terms" name="terms" value="1" /> Acepto los 
            <a href="<?php echo base_url('main/terminos'); ?>">términos y condiciones</a>
          </div>
          <div>
            <input type="submit" value="Entrar" class="disabled" id="submit" disabled />
          </div>
        </form>
      </section>
    </div>
  </body>
</html>

