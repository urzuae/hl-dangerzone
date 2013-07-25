<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="statics/css/general.css" type="text/css" />
  </head>
  <body>
    <header>
      <a href="index.html"><img src="logo.jpg" alt="herbalife" style="height: 132px; "/></a>
    </header>
    <section>
      <div>
        Datos de Registro
      </div>
      <form action="formulario.html" method="get" id="login">
        <div>
          <label for="id_herbalife">ID HERBALIFE</label><input type="text" name="id_herbalife" value="<?php echo $_GET['id_herbalife'] ?>" id="id_herbalife" />
        </div>
        <div>
          <label for="name">Nombre(s)</label><input type="text" name="name" value="" id="name" />
        </div>
        <div>
          <label for="gender">Género</label><input type="radio" name="gender" value="1" />H <input type="radio" name="gender" value="2" />M
          
        <div><input type="submit" value="Entrar &rarr;"></div>
      </form>
    </section>
  </body>
</html>