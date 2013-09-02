<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/general.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('statics/css/datepicker.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.ui.js'); ?>"></script>
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
        $('#contact_info').submit(function() {
          return confirm('¿Desea continuar con el registro?. Recuerde que ya no podrá modificar sus datos');
        });
        $('#nationality').change(function() {
          if($(this).val() == 0) {
            $('#other_nat').removeClass('oculto');
          }
          else {
            $('#other_nat').addClass('oculto');
          }
        });
	$('#relative').change(function() {
          $(this).val() == "" ? $('#other_relative').removeClass('oculto').val('') : $('#other_relative').addClass('oculto').val($(this).val());
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
            <li><a href="<?php echo base_url('main/sign_out'); ?>" class="exit">Salir</a></li>
          </ul>
        </div>
        <section id="main_content">
          <h2>ACOMPAÑANTE</h2>
          <form action="<?php echo base_url('main/save_companion'); ?>" method="post" id="contact_info">
            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>" />
            <input type="hidden" name="no_companion" value="<?php echo $no_companion; ?>" />
            <div>
              <label for="name">Nombre(s)</label><input type="text" name="name" value="" id="name" />
            </div>
            <div>
              <label for="paternal_last_name">Apellido Paterno</label><input type="text" name="paternal_last_name" value="" id="paternal_last_name" />
            </div>
            <div>
              <label for="maternal_last_name">Apellido Materno</label><input type="text" name="maternal_last_name" value="" id="maternal_last_name" />
            </div>
            <div>
              <label for="nationality">Nacionalidad</label>
              <select name="nationality" id="nationality">
                <?php foreach($countries as $country) {?>
                  <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
                <?php } ?>
                <option value="0">Otro</option>
              </select>
            </div>
            <div id="other_nat">
              <label for="other_nationality">Otra Nacionalidad:</label>
              <input type="text" name="other_nationality" id="other_nationality" value="" />
            </div>
            <div>
              <label for="relative">Parentesco</label>
            <select id="relative">
                <option <?php if('Cónyuge' == $companion['relative']) echo "selected='selected'"; ?> >Cónyuge</option>
                <option>Hijo(a)</option>
                <option>Padre</option>
                <option>Madre</option>
                <option>Tío(a)</option>
                <option>Abuelo(a)</option>
                <option>Hermano(a)</option>
                <option>Amigo(a)</option>
                <option value="">Otro</option>
              </select>
              <input type="text" name="relative" id="other_relative" value="" class="oculto" />
            </div>
            <div>
              <label for="passport">No. de Pasaporte</label><input type="text" name="passport" value="" id="passport" />
            </div>
            <div>
              <label for="passport_date">Fecha de Expedición Pasaporte</label>
              <input type="text" name="passport_date" id="passport_date" class="date_input" value="" />
            </div>
            <div>
              <label for="passport_due_date">Fecha de Vencimiento Pasaporte</label>
              <input type="text" name="passport_due_date" value="" id="passport_due_date" class="date_input" />
            </div>
            <div>
              <label for="visa">No. de Visa</label><input type="text" name="visa" value="" id="visa" />
            </div>
            <div>
              <label for="visa_date">Fecha de Expedición Visa</label>
              <input type="text" name="visa_date" id="visa_date" class="date_input" value="" />
            </div>
            <div>
              <label for="visa_due_date">Fecha de Vencimiento Visa</label><input type="text" name="visa_due_date" value="" id="visa_due_date" class="date_input" />
            </div>
            <div style="padding-left: 100px;">
              <input type="submit" value="Continuar y Finalizar Registro" name="finish" />
              <input type="submit" value="Continuar y Añadir Adicional" name="continue" />
            </div>
          </form>
        </section>
      </div>
    </div>
  </body>
</html>
