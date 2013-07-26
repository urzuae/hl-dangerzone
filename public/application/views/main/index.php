<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="statics/css/general.css" type="text/css" />
  </head>
  <body>
    <header>
      <a href="index.html"><img src="logo.jpg" alt="herbalife" style="height: 132px; "/></a>
    </header>
    <section>
      <div>
        Por favor registra tu nombre de usuario y contraseña con la que ingresas en tu página de herbalife®.
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
  </body>
</html>

