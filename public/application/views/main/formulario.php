<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/general.css'); ?>" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" style="height: 132px; "/></a>
      </header>
      <section>
        <div>
          Datos de Registro
        </div>
        <form action="<?php echo base_url('main/formulario'); ?>" method="post" id="contact_info">
          <div>
            <label for="id_herbalife">ID HERBALIFE</label><input type="text" name="id_herbalife" value="<?php echo $user['id_herbalife']; ?>" id="id_herbalife" />
          </div>
          <div>
            <label for="name">Nombre(s)</label><input type="text" name="name" value="<?php echo $user['name']; ?>" id="name" />
          </div>
          <div>
            <label for="gender">Género</label><input type="radio" name="gender" value="1" />H <input type="radio" name="gender" value="2" />M
          </div>
          <div>
            <label for="nationality">Nacionalidad</label><input type="text" name="nationality" value="" id="nationality" />
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
            <label for="passport_due_date">Vencimiento Pasaporte</label><input type="text" name="passport_due_date" value="" id="passport_due_date" />
          </div>
          <div>
            <label for="visa">Visa</label><input type="text" name="visa" value="" id="visa" />
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
          <div><input type="submit" value="Guardar &rarr;"></div>
        </form>
      </section>
    </div>
  </body>
</html>
