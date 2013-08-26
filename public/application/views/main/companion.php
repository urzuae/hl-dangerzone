<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/general.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('statics/css/datepicker.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.ui.js'); ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/datepicker.js'); ?>"></script>
    <!--<script type="text/javascript" src="http://localhost/validamesta/src/validamesta.js"></script>-->
    <script type="text/javascript">
      $(document).ready(function() {
        /*$('#contact_info').validamesta();
        $('#contact_info').validamesta();
        $('#contact_info').submit(function() { 
          $(this).data('validamesta').validate();
          return false;
        });*/
         $('.date_input').datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'yy-mm-dd'
        });
      });
    </script>
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/herbalife.png'); ?>" alt="herbalife" class="herbalife" />
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" class="logo"/></a>
      </header>
      <div id="main_container">
        <div id="sidebar">
          <ul id="nav">
            <li><a href="#" class="general">Calificado</a></li>
            <li <?php echo $no_companion == 1 ? 'class="active"' : false; ?>><a href="#" class="first">Acompañante</a></li>
            <li <?php echo $no_companion == 2 ? 'class="active"' : false; ?>><a href="#" class="second">Adicional 1</a></li>
            <li <?php echo $no_companion == 3 ? 'class="active"' : false; ?>><a href="#" class="third">Adicional 2</a></li>
            <li><a href="<?php echo base_url('main/sign_out'); ?>" class="exit">Salir</a>
          </ul>
        </div>
        <section id="main_content">
          <h2>ACOMPAÑANTE</h2>
          <form action="<?php echo base_url('main/save_companion'); ?>" method="post" id="contact_info">
            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>" />
            <input type="hidden" name="companion_id" value="<?php echo $companion['id']; ?>" />
            <input type="hidden" name="no_companion" value="<?php echo $no_companion; ?>" />
            <div>
              <label for="name">Nombre(s)</label>
              <input type="text" name="name" value="<?php echo $companion['name']; ?>" id="name" />
            </div>
            <div>
              <label for="paternal_last_name">Apellido Paterno</label><input type="text" name="paternal_last_name" value="<?php echo $companion['paternal_last_name']; ?>" id="paternal_last_name" />
            </div>
            <div>
              <label for="maternal_last_name">Apellido Materno</label><input type="text" name="maternal_last_name" value="<?php echo $companion['maternal_last_name']; ?>" id="maternal_last_name" />
            </div>
            <div>
              <label for="nationality">Nacionalidad</label><input type="text" name="nationality" value="<?php echo $companion['nationality']; ?>" id="nationality" />
            </div>
            <div>
              <label for="relative">Parentesco</label><input type="text" name="relative" value="<?php echo $companion['relative']; ?>" id="relative" />
            </div>
            <div>
              <label for="passport">#Pasaporte</label><input type="text" name="passport" value="<?php echo $companion['passport']; ?>" id="passport" />
            </div>
            <div>
              <label for="passport_date">Expedición Pasaporte</label>
              <input type="text" name="passport_date" id="passport_date" class="date_input" value="<?php echo $companion['passport_date']; ?>" />
            </div>
            <div>
              <label for="passport_due_date">Vencimiento Pasaporte</label>
              <input type="text" name="passport_due_date" class="date_input" value="<?php echo $companion['passport_due_date']; ?>" id="passport_due_date" />
            </div>
            <div>
              <label for="visa">Visa</label><input type="text" name="visa" value="<?php echo $companion['visa']; ?>" id="visa" />
            </div>
            <div>
              <label for="visa_date">Expedición Visa</label>
              <input type="text" name="visa_date" id="visa_date" class="date_input" value="<?php echo $companion['visa_date']; ?>" />
            </div>
            <div>
              <label for="visa_due_date">Vencimiento Visa</label>
              <input type="text" name="visa_due_date" class="date_input" value="<?php echo $companion['visa_due_date']; ?>" id="visa_due_date" />
            </div>
            <div>
              <label></label>
              <input type="submit" value="Continuar" name="submit" />
            </div>
          </form>
        </section>
      </div>
    </div>
  </body>
</html>
