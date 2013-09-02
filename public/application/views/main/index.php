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
          dateFormat: 'yy-mm-dd',
          minDate: new Date(1920, 0, 1),
          yearRange: '1920:2013'
        }).each(function() {
          var fecha = $(this).val();
          $(this).datepicker('setDate', fecha);
        });
        $('#nationality').change(function() {
          if($(this).val() == 0) {
            $('#other_nat').removeClass('oculto');
          }
          else {
            $('#other_nat').addClass('oculto');
          }
        });
        $('#country').change(function() {
         if($(this).val() == 0) $('#other_county').removeClass('oculto');
         else $('#other_county').addClass('oculto');
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
            <li class="active"><a href="#" class="general">Calificado</a></li>
            <li><a href="#" class="first">Acompañante</a></li>
            <li><a href="#" class="second">Adicional 1</a></li>
            <li><a href="#" class="third">Adicional 2</a></li>
            <li><a href="<?php echo base_url('main/sign_out'); ?>" class="exit">Salir</a>
          </ul>
        </div>
        <section id="main_content">
          <h2>REGÍSTRATE</h2>
          <form action="<?php echo base_url('main/save'); ?>" method="post" id="contact_info">
            <div>
              <label for="id">ID HERBALIFE</label>
              <input type="text" name="id" value="<?php echo $user['id']; ?>" id="id" readonly class="disabled" />
            </div>
            <div>
              <label for="name">Nombre(s)</label>
              <input type="text" name="name" value="<?php echo $user['name']; ?>" id="name" />
            </div>
            <div>
              <label for="paternal_last_name">Apellido Paterno</label>
              <input type="text" name="paternal_last_name" value="<?php echo $user['paternal_last_name']; ?>" id="paternal_last_name" />
            </div>
            <div>
              <label for="maternal_last_name">Apellido Materno</label>
              <input type="text" name="maternal_last_name" value="<?php echo $user['maternal_last_name']; ?>" id="maternal_last_name" />
            </div>
            <div>
              <label for="gender">Género</label>
              <input type="radio" name="gender" value="1" <?php echo $user['gender'] == 1 ? 'checked="checked"' : ''; ?> /> Masculino
              <input type="radio" name="gender" value="2" <?php echo $user['gender'] == 2 ? 'checked="checked"' : ''; ?> /> Femenino
            </div>
            <div>
              <label for="nationality">Nacionalidad</label>
              <select name="nationality" id="nationality">
                <?php foreach($countries as $country) {?>
                  <option value="<?php echo $country['id']; ?>" <?php echo $country['id'] == $user['nationality'] ? 'selected="selected"' : ''; ?>><?php echo $country['name']; ?></option>
                <?php } ?>
                <option value="0" <?php echo 0 == $user['nationality'] ? 'selected="selected"' : ''; ?>>Otro</option>
              </select>
            </div>
            <div <?php echo $user['nationality'] == 0 ? '' : 'class="oculto"'; ?> id="other_nat">
              <label for="other_nationality">Otra Nacionalidad:</label>
              <input type="text" name="other_nationality" id="other_nationality" value="<?php echo $user['other_nationality']; ?>" />
            </div>
            <div>
              <label for="birthday">Fecha de Nacimiento</label>
              <input type="text" name="birthday" value="<?php echo $user['birthday']; ?>" id="birthday" class="date_input" />
            </div>
            <div>
              <label for="team_level">Equipo</label>
              <input type="text" name="team_level" value="<?php echo $user['team_level']; ?>" id="team_level" />
            </div>
            <div>
              <label for="country">País de residencia</label>
              <select name="country" id="country">
                <?php foreach($countries as $country) {?>
                  <option value="<?php echo $country['id']; ?>" <?php echo $country['id'] == $user['country'] ? 'selected="selected"' : ''; ?>><?php echo $country['name']; ?></option>
                <?php } ?>
                <option value="0" <?php echo 0 == $user['country'] ? 'selected="selected"' : ''; ?>>Otro</option>
              </select>
            </div>
            <div <?php echo $user['country'] == 0 ? '' : 'class="oculto"'; ?> id="other_county">
              <label for="other_country">Otro País de Residencia:</label>
              <input type="text" name="other_country" id="other_country" value="<?php echo $user['other_country']; ?>" />
            </div>
            <div>
              <label for="city">Ciudad de Residencia</label>
              <input type="text" name="city" id="city" value="<?php echo $user['city']; ?>" />
            </div>
            <div>
              <label for="passport">No. de Pasaporte</label><input type="text" name="passport" value="<?php echo $user['passport']; ?>" id="passport" />
            </div>
            <div>
              <label for="passport_date">Fecha de Expedición Pasaporte</label>
              <input type="text" name="passport_date" value="<?php echo $user['passport_date']; ?>" id="passport_date" class="date_input" />
            </div>
            <div>
              <label for="passport_due_date">Fecha de Vencimiento Pasaporte</label>
              <input type="text" name="passport_due_date" value="<?php echo $user['passport_due_date']; ?>" id="passport_due_date" class="date_input" />
            </div>
            <div>
              <label for="visa">No. de Visa</label><input type="text" name="visa" value="<?php echo $user['visa']; ?>" id="visa" />
            </div>
            <div>
              <label for="visa_date">Fecha de Expedición Visa</label>
              <input type="text" name="visa_date" value="<?php echo $user['visa_date']; ?>" id="visa_date" class="date_input" />
            </div>
            <div>
              <label for="visa_due_date">Fecha de Vencimiento Visa</label>
              <input type="text" name="visa_due_date" value="<?php echo $user['visa_due_date']; ?>" id="visa_due_date" class="date_input" />
            </div>
            <div>
              <label for="telephone">Teléfono Fijo</label><input type="text" name="telephone" value="<?php echo $user['telephone']; ?>" id="telephone" />
            </div>
            <div>
              <label for="telephone2">Teléfono Fijo 2</label>
              <input type="text" name="telephone2" value="<?php echo $user['telephone']; ?>" id="telephone2" />
            </div>
            <div>
              <label for="mobile_number">Teléfono móvil</label><input type="text" name="mobile_number" value="<?php echo $user['mobile']; ?>" id="mobile_number" />
            </div>
            <div>
              <label for="mobile_number2">Teléfono móvil 2</label>
              <input type="text" name="mobile_number2" value="<?php echo  $user['mobile'];  ?>" id="mobule_number2" />
            </div>
            <div>
              <label for="email">Correo electrónico</label><input type="text" name="email" value="<?php echo $user['email']; ?>" id="email" />
            </div>
            <div>
              <label for="email2">Correo electrónico 2</label>
              <input type="text" name="email2" value="<?php echo $user['email2']; ?>" id="email2" />
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
