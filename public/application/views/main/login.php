<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/login.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/login.js'); ?>"></script>
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" />
        </a>
      </header>
      <section>
        <p class="login_message">
          Recuerda que debes tener a la mano los datos de tu Pasaporte, Visa, email y los adicionales para iniciar el registro.
          <br/>
          Teclea tu ID Herbalife &copy;
        </p>
        <form action="<?php echo base_url('main/sign_in'); ?>" method="post" id="login">
          <div>
            <input type="text" name="id_herbalife" value="" id="id_herbalife" placeholder="ID HERBALIFE" />
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

