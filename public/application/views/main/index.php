<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/general.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <!--<script type="text/javascript" src="http://localhost/validamesta/src/validamesta.js"></script>-->
    <script type="text/javascript">
      /*$(document).ready(function() {
        //$('#contact_info').validamesta();
        $('#contact_info').validamesta();
        $('#contact_info').submit(function() { 
          $(this).data('validamesta').validate();
          return false;
        });
      });*/
    </script>
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" class="logo"/></a>
      </header>
      <div id="main_container">
        <div id="sidebar">
          <ul id="nav">
            <li class="active"><a href="#" class="general">Datos Generales</a></li>
            <li><a href="#" class="first">Primer Acompañante</a></li>
            <li><a href="#" class="second">Segundo Acompañante</a></li>
            <li><a href="#" class="third">Tercer Acompañante</a></li>
            <li><a href="<?php echo base_url('main/sign_out'); ?>" class="exit">Salir</a>
          </ul>
        </div>
        <section id="main_content">
          <h2>REGÍSTRATE</h2>
          <form action="<?php echo base_url('main/save'); ?>" method="post" id="contact_info">
            <div>
              <label for="id_herbalife">ID HERBALIFE</label><input type="text" name="id_herbalife" value="<?php echo $user['id_herbalife']; ?>" id="id_herbalife" disabled="disabled" />
            </div>
            <div>
              <label for="name">Nombre(s)</label><input type="text" name="name" value="<?php echo $user['name']; ?>" id="name" />
            </div>
            <div>
              <label for="gender">Género</label>
              <input type="radio" name="gender" value="1" />H 
              <input type="radio" name="gender" value="2" />M
            </div>
            <div>
              <label for="nationality">Nacionalidad</label><input type="text" name="nationality" value="<?php echo $user['nationality']; ?>" id="nationality" />
            </div>
            <div>
              <label for="date_birth">Fecha de Nacimiento</label><input type="text" name="date_birth" value="" id="date_birth" />
            </div>
            <div>
              <label for="team_level">Nivel de Equipo</label><input type="text" name="team_level" value="" id="team_level" />
            </div>
            <div>
              <label for="residence_country">País de residencia</label><input type="text" name="residence_country" value="" id="residence_country" />
            </div>
            <div>
              <label for="passport">#Pasaporte</label><input type="text" name="passport" value="" id="passport" />
            </div>
            <div>
              <label for="passport_due_date">Vencimiento Pasaporte</label><input type="text" name="passport_due_date" value="" id="passport_due_date" />
            </div>
            <div>
              <label for="visa">Visa</label><input type="text" name="visa" value="" id="visa" />
            </div>
            <div>
              <label for="visa_due_date">Vencimiento Visa</label><input type="text" name="visa_due_date" value="" id="visa_due_date" />
            </div>
            <div>
              <label for="telephone">Teléfono Fijo</label><input type="text" name="telephone" value="" id="telephone" />
            </div>
            <div>
              <label for="mobile_number">Teléfono móvil</label><input type="text" name="mobile_number" value="" id="mobile_number" />
            </div>
            <div>
              <label for="email">Correo electrónico</label><input type="text" name="email" value="" id="email" />
            </div>
            <div>
              <label></label>
              <input type="submit" value="Guardar" name="submit" />
              <input type="submit" value="Confirmar" name="submit" />
            </div>
          </form>
        </section>
      </div>
    </div>
  </body>
</html>
