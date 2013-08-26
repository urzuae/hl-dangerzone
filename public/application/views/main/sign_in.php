<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/login.css') ; ?>" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" />
        </a>
      </header>
      <section>
        <div class="error_message">
          Por favor contacte a su Distribuidor Herbalife&reg;
        </div>
        <br/>
        <form action="<?php echo base_url('main/sign_in'); ?>" method="post" id="login">
          <div>
            <input type="text" name="id" value="" id="id" placeholder="ID HERBALIFE" />
          </div>
          <div>
            <input type="submit" value="Entrar">
          </div>
        </form>
      </section>
    </div>
  </body>
</html>

