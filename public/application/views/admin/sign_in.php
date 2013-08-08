<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/login.css'); ?>" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" class="admin_logo" />
        </a>
      </header>
      <section>
        <p class="login_message">
          Por favor para poder continuar ingresa tu id y contraseña.
        </p>
        <form action="<?php echo base_url('admin/sign_in'); ?>" method="post" id="login">
          <div>
            <input type="text" name="id_herbalife" value="" id="id_herbalife" placeholder="ID HERBALIFE" />
          </div>
          <div>
            <input type="password" name="password" value="" id="password" placeholder="CONTRASEÑA" />
          </div>
          <div>
            <input type="submit" value="Entrar">
          </div>
        </form>
      </section>
    </div>
  </body>
</html>


