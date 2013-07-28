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
        <div>
          Por favor registra tu nombre de usuario y contraseña con la que ingresas en tu página de herbalife®.
        </div>
        <div class="error_message">
          El ID Herbalife o contraseña que ingresó, no son validos.
        </div>
        <form action="<?php echo base_url('main/formulario'); ?>" method="get" id="login">
          <div>
            <label for="id_herbalife">ID HERBALIFE</label><input type="text" name="id_herbalife" value="" id="id_herbalife" />
          </div>
          <div>
            <label for="password">Contraseña</label><input type="password" name="password" value="" id="password" />
          </div>
          <div><input type="submit" value="Entrar &rarr;"></div>
        </form>
      </section>
    </div>
  </body>
</html>
