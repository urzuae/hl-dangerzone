<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="statics/css/general.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logo.jpg'); ?>" alt="herbalife" />
        </a>
      </header>
      <section>
        <img src="http://herbalife.hen/statics/images/botones/login.png" />
        <p class="login_message">
          Por favor registra tu nombre de usuario y contraseña con la que ingresas en tu página de herbalife®.
        </p>
        <form action="<?php echo base_url('main/sign_in'); ?>" method="post" id="login">
          <div>
            <input type="text" name="id_herbalife" value="" id="id_herbalife" placeholder="ID HERBALIFE" />
          </div>
          <div>
            <input type="password" name="password" value="" id="password" placeholder="Contraseña" />
          </div>
          <div class="login_box"><input type="submit" value="Entrar &rarr;"></div>
        </form>
      </section>
    </div>
  </body>
</html>

